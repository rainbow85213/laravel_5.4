Ext.data.JsonP.CKEDITOR_feature({"tagname":"class","name":"CKEDITOR.feature","autodetected":{},"files":[{"filename":"filter.js","href":"filter.html#CKEDITOR-feature"}],"since":"4.1","abstract":true,"members":[{"name":"allowedContent","tagname":"property","owner":"CKEDITOR.feature","id":"property-allowedContent","meta":{}},{"name":"contentForms","tagname":"property","owner":"CKEDITOR.feature","id":"property-contentForms","meta":{}},{"name":"contentTransformations","tagname":"property","owner":"CKEDITOR.feature","id":"property-contentTransformations","meta":{}},{"name":"name","tagname":"property","owner":"CKEDITOR.feature","id":"property-name","meta":{}},{"name":"requiredContent","tagname":"property","owner":"CKEDITOR.feature","id":"property-requiredContent","meta":{}},{"name":"toFeature","tagname":"method","owner":"CKEDITOR.feature","id":"method-toFeature","meta":{}}],"alternateClassNames":[],"aliases":{},"id":"class-CKEDITOR.feature","short_doc":"Interface that may be automatically implemented by any\ninstance of any class which has at least the name property and...","component":false,"superclasses":[],"subclasses":[],"mixedInto":["CKEDITOR.plugins.widget.definition"],"mixins":[],"parentMixins":[],"requires":[],"uses":[],"html":"<div><pre class=\"hierarchy\"><h4>Mixed into</h4><div class='dependency'><a href='#!/api/CKEDITOR.plugins.widget.definition' rel='CKEDITOR.plugins.widget.definition' class='docClass'>CKEDITOR.plugins.widget.definition</a></div><h4>Files</h4><div class='dependency'><a href='source/filter.html#CKEDITOR-feature' target='_blank'>filter.js</a></div></pre><div class='doc-contents'><p>Interface that may be automatically implemented by any\ninstance of any class which has at least the <code>name</code> property and\ncan be meant as an editor feature.</p>\n\n<p>For example:</p>\n\n<ul>\n<li>\"Bold\" command, button, and keystroke &ndash; it does not mean exactly\n<code>&lt;strong&gt;</code> or <code>&lt;b&gt;</code> but just the ability to create bold text.</li>\n<li>\"Format\" drop-down list &ndash; it also does not imply any HTML tag.</li>\n<li>\"Link\" command, button, and keystroke.</li>\n<li>\"Image\" command, button, and dialog window.</li>\n</ul>\n\n\n<p>Thus most often a feature is an instance of one of the following classes:</p>\n\n<ul>\n<li><a href=\"#!/api/CKEDITOR.command\" rel=\"CKEDITOR.command\" class=\"docClass\">CKEDITOR.command</a></li>\n<li><a href=\"#!/api/CKEDITOR.ui.button\" rel=\"CKEDITOR.ui.button\" class=\"docClass\">CKEDITOR.ui.button</a></li>\n<li><a href=\"#!/api/CKEDITOR.ui.richCombo\" rel=\"CKEDITOR.ui.richCombo\" class=\"docClass\">CKEDITOR.ui.richCombo</a></li>\n</ul>\n\n\n<p>None of them have a <code>name</code> property explicitly defined, but\nit is set by <a href=\"#!/api/CKEDITOR.editor-method-addCommand\" rel=\"CKEDITOR.editor-method-addCommand\" class=\"docClass\">CKEDITOR.editor.addCommand</a> and <a href=\"#!/api/CKEDITOR.ui-method-add\" rel=\"CKEDITOR.ui-method-add\" class=\"docClass\">CKEDITOR.ui.add</a>.</p>\n\n<p>During editor initialization all features that the editor should activate\nshould be passed to <a href=\"#!/api/CKEDITOR.editor-method-addFeature\" rel=\"CKEDITOR.editor-method-addFeature\" class=\"docClass\">CKEDITOR.editor.addFeature</a> (shorthand for <a href=\"#!/api/CKEDITOR.filter-method-addFeature\" rel=\"CKEDITOR.filter-method-addFeature\" class=\"docClass\">CKEDITOR.filter.addFeature</a>).</p>\n\n<p>This method checks if a feature can be activated (see <a href=\"#!/api/CKEDITOR.feature-property-requiredContent\" rel=\"CKEDITOR.feature-property-requiredContent\" class=\"docClass\">requiredContent</a>) and if yes,\nthen it registers allowed content rules required by this feature (see <a href=\"#!/api/CKEDITOR.feature-property-allowedContent\" rel=\"CKEDITOR.feature-property-allowedContent\" class=\"docClass\">allowedContent</a>) along\nwith two kinds of transformations: <a href=\"#!/api/CKEDITOR.feature-property-contentForms\" rel=\"CKEDITOR.feature-property-contentForms\" class=\"docClass\">contentForms</a> and <a href=\"#!/api/CKEDITOR.feature-property-contentTransformations\" rel=\"CKEDITOR.feature-property-contentTransformations\" class=\"docClass\">contentTransformations</a>.</p>\n\n<p>By default all buttons that are included in <a href=\"#!/guide/dev_toolbar\">toolbar layout configuration</a>\nare checked and registered with <a href=\"#!/api/CKEDITOR.editor-method-addFeature\" rel=\"CKEDITOR.editor-method-addFeature\" class=\"docClass\">CKEDITOR.editor.addFeature</a>, all styles available in the\n'Format' and 'Styles' drop-down lists are checked and registered too and so on.</p>\n        <p>Available since: <b>4.1</b></p>\n</div><div class='members'><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-property'>Properties</h3><div class='subsection'><div id='property-allowedContent' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-property-allowedContent' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-property-allowedContent' class='name expandable'>allowedContent</a> : <a href=\"#!/api/CKEDITOR.filter.allowedContentRules\" rel=\"CKEDITOR.filter.allowedContentRules\" class=\"docClass\">CKEDITOR.filter.allowedContentRules</a><span class=\"signature\"></span></div><div class='description'><div class='short'>HTML code that can be generated by this feature. ...</div><div class='long'><p>HTML code that can be generated by this feature.</p>\n\n<p>For example a basic image feature (image button displaying the image dialog window)\nmay allow <code>'img[!src,alt,width,height]'</code>.</p>\n\n<p>During the feature activation this value is passed to <a href=\"#!/api/CKEDITOR.filter-method-allow\" rel=\"CKEDITOR.filter-method-allow\" class=\"docClass\">CKEDITOR.filter.allow</a>.</p>\n<p>Defaults to: <code>null</code></p></div></div></div><div id='property-contentForms' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-property-contentForms' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-property-contentForms' class='name expandable'>contentForms</a> : Object<span class=\"signature\"></span></div><div class='description'><div class='short'>Feature content forms to be registered in the CKEDITOR.editor.filter\nduring the feature activation. ...</div><div class='long'><p>Feature content forms to be registered in the <a href=\"#!/api/CKEDITOR.editor-property-filter\" rel=\"CKEDITOR.editor-property-filter\" class=\"docClass\">CKEDITOR.editor.filter</a>\nduring the feature activation.</p>\n\n<p>See <a href=\"#!/api/CKEDITOR.filter-method-addContentForms\" rel=\"CKEDITOR.filter-method-addContentForms\" class=\"docClass\">CKEDITOR.filter.addContentForms</a> for more details.</p>\n<p>Defaults to: <code>null</code></p></div></div></div><div id='property-contentTransformations' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-property-contentTransformations' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-property-contentTransformations' class='name expandable'>contentTransformations</a> : Object<span class=\"signature\"></span></div><div class='description'><div class='short'>Transformations (usually for content generated by this feature, but not necessarily)\nthat will be registered in the C...</div><div class='long'><p>Transformations (usually for content generated by this feature, but not necessarily)\nthat will be registered in the <a href=\"#!/api/CKEDITOR.editor-property-filter\" rel=\"CKEDITOR.editor-property-filter\" class=\"docClass\">CKEDITOR.editor.filter</a> during the feature activation.</p>\n\n<p>See <a href=\"#!/api/CKEDITOR.filter-method-addTransformations\" rel=\"CKEDITOR.filter-method-addTransformations\" class=\"docClass\">CKEDITOR.filter.addTransformations</a> for more details.</p>\n<p>Defaults to: <code>null</code></p></div></div></div><div id='property-name' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-property-name' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-property-name' class='name expandable'>name</a> : String<span class=\"signature\"></span></div><div class='description'><div class='short'>The name of the feature. ...</div><div class='long'><p>The name of the feature.</p>\n\n<p>It is used for example to identify which <a href=\"#!/api/CKEDITOR.filter-property-allowedContent\" rel=\"CKEDITOR.filter-property-allowedContent\" class=\"docClass\">CKEDITOR.filter.allowedContent</a>\nrule was added for which feature.</p>\n</div></div></div><div id='property-requiredContent' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-property-requiredContent' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-property-requiredContent' class='name expandable'>requiredContent</a> : <a href=\"#!/api/CKEDITOR.filter.contentRule\" rel=\"CKEDITOR.filter.contentRule\" class=\"docClass\">CKEDITOR.filter.contentRule</a><span class=\"signature\"></span></div><div class='description'><div class='short'>Minimal HTML code that this feature must be allowed to\ngenerate in order to work. ...</div><div class='long'><p>Minimal HTML code that this feature must be allowed to\ngenerate in order to work.</p>\n\n<p>For example a basic image feature (image button displaying the image dialog window)\nneeds <code>'img[src,alt]'</code> in order to be activated.</p>\n\n<p>During the feature validation this value is passed to <a href=\"#!/api/CKEDITOR.filter-method-check\" rel=\"CKEDITOR.filter-method-check\" class=\"docClass\">CKEDITOR.filter.check</a>.</p>\n\n<p>If this value is not provided, a feature will be always activated.</p>\n<p>Defaults to: <code>null</code></p></div></div></div></div></div><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-method'>Methods</h3><div class='subsection'><div id='method-toFeature' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.feature'>CKEDITOR.feature</span><br/><a href='source/filter.html#CKEDITOR-feature-method-toFeature' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.feature-method-toFeature' class='name expandable'>toFeature</a>( <span class='pre'></span> ) : <a href=\"#!/api/CKEDITOR.feature\" rel=\"CKEDITOR.feature\" class=\"docClass\">CKEDITOR.feature</a><span class=\"signature\"></span></div><div class='description'><div class='short'>Returns a feature that this feature needs to register. ...</div><div class='long'><p>Returns a feature that this feature needs to register.</p>\n\n<p>In some cases, during activation, one feature may need to register\nanother feature. For example a <a href=\"#!/api/CKEDITOR.ui.button\" rel=\"CKEDITOR.ui.button\" class=\"docClass\">CKEDITOR.ui.button</a> often registers\na related command. See <a href=\"#!/api/CKEDITOR.ui.button-method-toFeature\" rel=\"CKEDITOR.ui.button-method-toFeature\" class=\"docClass\">CKEDITOR.ui.button.toFeature</a>.</p>\n\n<p>This method is executed when a feature is passed to the <a href=\"#!/api/CKEDITOR.editor-method-addFeature\" rel=\"CKEDITOR.editor-method-addFeature\" class=\"docClass\">CKEDITOR.editor.addFeature</a>.</p>\n<h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/CKEDITOR.feature\" rel=\"CKEDITOR.feature\" class=\"docClass\">CKEDITOR.feature</a></span><div class='sub-desc'>\n</div></li></ul></div></div></div></div></div></div></div>","meta":{"abstract":true}});