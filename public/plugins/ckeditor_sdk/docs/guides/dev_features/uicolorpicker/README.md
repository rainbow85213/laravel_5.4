<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# Using the UI Color Picker

<div class="requirements">
<p>
	Features described in this article are provided through an optional plugin that is not included in the CKEditor presets available from the <a href="http://ckeditor.com/download">Download</a> site and <a href="#!/guide/dev_plugins">needs to be added to your custom build</a> with <a href="http://ckeditor.com/builder">CKBuilder</a>.
</p>
<p>
	Please note that this feature can only be used for editor skins that are compatible with the so-called <a href="#!/guide/skin_sdk_chameleon">"chameleon" feature</a>. The skins created by CKSource, i.e. <a href="http://ckeditor.com/addon/moono">Moono</a> and <a href="http://ckeditor.com/addon/kama">Kama</a>, already support it. If you are using a custom skin, you will need to define the <a href="#!/api/CKEDITOR.skin-method-chameleon">CKEDITOR.skin.chameleon</a> function in your <code>skin.js</code> file.
</p>
</div>

[CKEditor UI color can be set manually](#!/guide/dev_uicolor) in the editor configuration, but adjusting the UI color can be even easier than that. To make use of the second method, your CKEditor build needs to include the optional [UI Color Picker](http://ckeditor.com/addon/uicolor) plugin.

When the plugin is enabled, it adds a new **UI Color Picker** button (<img class="inline" src="guides/dev_uicolorpicker/uicolorpicker.png">) to your toolbar. Clicking this button opens the **UI Color Picker** dialog window where you have a few options to find the right color.

{@img uicolor_02.png}

For a start, you can click anywhere in the color palette to select a color. You can also choose from one of the pre-defined color sets and fine-tune as you see fit. Last but not least you can simply manually enter an RGB color code or the RGB and HSV values in appropriate fields.

A nice feature of this tool is that it offers instant preview of the selected color, so testing your changes is really quick.

When you are satisfied with your choice, you can copy the working UI color configuration code displayed at the bottom of the dialog window and use it in your editor configuration as described above.

{@img uicolor_03.png}

## End-user Application

Although this feature is mainly useful for developers who are working on their CKEditor customizations, it can also be made available to end users. A developer can implement it in the administration panel of a CMS or a similar site builder application where the users are able to adjust the look of a website or application. User's choice can then be read from the editor instance by using the CKEDITOR.editor.getUiColor method and saved (e.g. in the application's database) to be served as [in-page configuration](#!/guide/dev_configuration-section-defining-configuration-in-page) when creating subsequent editor instances.

## UI Color Picker Demo

See the [working "UI Color Picker" sample](../samples/uicolorpicker.html) that showcases how easy it can be to set the editor UI color with the color picker tool.

## Related Features

Read more about setting the default UI color by using a configuration option in the [Adjusting Editor User Interface Color](#!/guide/dev_uicolor) article.
