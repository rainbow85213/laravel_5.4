<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 4. 18.
 * Time: PM 5:41
 */

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;

class File_info extends Model
{
    /**
     * @var string
     */
    protected $table = 'file_info';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'file_sort'
        ,'use_type'
        ,'file_relation_id'
        ,'file_name'
        ,'file_type'
        ,'file_size'
        ,'file_rename'
        ,'file_url'
        ,'file_use_yn'
    ];

    /**
     * 업로드 가능한 파일인지 아닌지에 대한 여부를 판단한다.
     * @param $_limitExt
     * @param $_fileExt
     * @return bool
     */
    public function limitExtCheck($_limitExt , $_fileExt) {
        if(sizeof($_limitExt) <= 0) {
            return true;
        } else {
            return in_array($_fileExt , $_limitExt , true);
        }
    }

    /**
     * 업로드한 파일의 이름을 기존의 이름과 관계없이 고유한 이름으로 변경한다.
     * @param $_mode
     * @return string
     */
    private function fileRename($_mode) {
        list($usec, $sec) = explode(" " , microtime());
        $microTime = (int)($usec * 1000000);

        return $_mode . "_" . date('YmdHis') . $microTime;
    }

    /**
     * 파일명의 기준으로 파일의 확장자를 파악한다.
     * @param $_name
     * @return bool
     */
    public function fileExt($_name) {
        $fileNameArr = explode('.' , $_name);

        if(sizeof($fileNameArr) > 1) {
            $tmpExtNum = sizeof($fileNameArr) -1;
            $_ret = $fileNameArr[$tmpExtNum];
        } else {
            $_ret = false;
        }

        return $_ret;
    }

    /**
     * 업로드한 파일을 저장할 디렉토리를 정하고, 만약에 없다면 디렉토리까지 생성한다.
     * @param $_mode
     * @return string
     */
    private function fileDirect($_mode) {
        $realPath = "public/" . @date('Y') . "/" . @date('m') . "/" . @date('d') . "/" . $_mode;

        if(!is_dir($realPath)) {
            Storage::makeDirectory($realPath);
        }

        return $realPath;
    }

    /**
     * Converts bytes into human readable file size.
     *
     * @param string $bytes
     * @return string human readable file size (2,87 Мб)
     * @author Mogilev Arseny
     */
    public function fileSizeConvert($_bytes , $_conversType = 3)
    {
        $_bytes = floatval($_bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

        $_ret['file_size'] = (float)$_bytes / $arBytes[$_conversType]["VALUE"];
//        $result = str_replace(".", "," , strval(round($result, 2)));
        $_ret['file_size'] = round($_ret['file_size'], 2);
        $_ret['file_unit'] = $arBytes[$_conversType]["UNIT"];

        return $_ret;
    }


    /**
     * 파일을 스토리지에 저장하고 저장된 파일에 대한 정보를 반환한다.
     * @param $_file
     * @param string $_mode
     * @param array $_limitExt
     * @return array
     */
    public function fileSave($_file, $_mode = 'test', $_limitExt = []) {
        $_ret = [];

        if(sizeof($_file) <= 0) {
            $_ret['resultCode'] = false;
            $_ret['resultMsg'] = "Upload File Empty";
            $_ret['resultData'] = '';

            return $_ret;
        }

        foreach($_file AS $fileKey => $fileVal) {
            $fileRename = $this->fileRename($_mode);
            $fileExtName = $this->fileExt($fileVal->getClientOriginalName());
            $fileDirect = $this->fileDirect($_mode);

            $path = Storage::putFileAs(
                $fileDirect , $fileVal , $fileRename . "." . $fileExtName
            );
        }

        $_ret = [
            'resultCode' => true,
            'resultMsg' => 'Success',
            'resultData' => $path
        ];

        return $_ret;
    }

}