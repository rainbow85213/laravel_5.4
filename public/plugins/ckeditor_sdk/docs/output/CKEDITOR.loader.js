Ext.data.JsonP.CKEDITOR_loader({"tagname":"class","name":"CKEDITOR.loader","autodetected":{},"files":[{"filename":"loader.js","href":"loader.html#CKEDITOR-loader"}],"singleton":true,"members":[{"name":"loadedScripts","tagname":"property","owner":"CKEDITOR.loader","id":"property-loadedScripts","meta":{}},{"name":"scripts","tagname":"property","owner":"CKEDITOR.loader","id":"property-scripts","meta":{}},{"name":"load","tagname":"method","owner":"CKEDITOR.loader","id":"method-load","meta":{}},{"name":"loadPending","tagname":"method","owner":"CKEDITOR.loader","id":"method-loadPending","meta":{}}],"alternateClassNames":[],"aliases":{},"id":"class-CKEDITOR.loader","component":false,"superclasses":[],"subclasses":[],"mixedInto":[],"mixins":[],"parentMixins":[],"requires":[],"uses":[],"html":"<div><pre class=\"hierarchy\"><h4>Files</h4><div class='dependency'><a href='source/loader.html#CKEDITOR-loader' target='_blank'>loader.js</a></div></pre><div class='doc-contents'><p>Load core scripts and their dependencies from _source.</p>\n</div><div class='members'><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-property'>Properties</h3><div class='subsection'><div id='property-loadedScripts' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.loader'>CKEDITOR.loader</span><br/><a href='source/loader.html#CKEDITOR-loader-property-loadedScripts' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.loader-property-loadedScripts' class='name expandable'>loadedScripts</a> : Array<span class=\"signature\"></span></div><div class='description'><div class='short'>The list of loaded scripts in their loading order. ...</div><div class='long'><p>The list of loaded scripts in their loading order.</p>\n\n<pre><code>// Alert the loaded script names.\nalert( <a href=\"#!/api/CKEDITOR.loader-property-loadedScripts\" rel=\"CKEDITOR.loader-property-loadedScripts\" class=\"docClass\">CKEDITOR.loader.loadedScripts</a> );\n</code></pre>\n<p>Defaults to: <code>[]</code></p></div></div></div><div id='property-scripts' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.loader'>CKEDITOR.loader</span><br/><a href='source/loader.html#CKEDITOR-loader-property-scripts' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.loader-property-scripts' class='name expandable'>scripts</a> : Array<span class=\"signature\"></span></div><div class='description'><div class='short'><p>Table of script names and their dependencies.</p>\n</div><div class='long'><p>Table of script names and their dependencies.</p>\n</div></div></div></div></div><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-method'>Methods</h3><div class='subsection'><div id='method-load' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.loader'>CKEDITOR.loader</span><br/><a href='source/loader.html#CKEDITOR-loader-method-load' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.loader-method-load' class='name expandable'>load</a>( <span class='pre'>scriptName, [defer]</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Loads a specific script, including its dependencies. ...</div><div class='long'><p>Loads a specific script, including its dependencies. This is not a\nsynchronous loading, which means that the code to be loaded will\nnot necessarily be available after this call.</p>\n\n<pre><code><a href=\"#!/api/CKEDITOR.loader-method-load\" rel=\"CKEDITOR.loader-method-load\" class=\"docClass\">CKEDITOR.loader.load</a>( 'dom/element' );\n</code></pre>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>scriptName</span> : String<div class='sub-desc'>\n</div></li><li><span class='pre'>defer</span> : Boolean (optional)<div class='sub-desc'><p>params</p>\n<p>Defaults to: <code>false</code></p></div></li></ul></div></div></div><div id='method-loadPending' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.loader'>CKEDITOR.loader</span><br/><a href='source/loader.html#CKEDITOR-loader-method-loadPending' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.loader-method-loadPending' class='name expandable'>loadPending</a>( <span class='pre'></span> )<span class=\"signature\"></span></div><div class='description'><div class='short'> ...</div><div class='long'>\n</div></div></div></div></div></div></div>","meta":{}});