Ext.data.JsonP.CKEDITOR_plugins_contextMenu({"tagname":"class","name":"CKEDITOR.plugins.contextMenu","autodetected":{},"files":[{"filename":"plugin.js","href":"plugin19.html#CKEDITOR-plugins-contextMenu"}],"extends":"CKEDITOR.menu","members":[{"name":"constructor","tagname":"method","owner":"CKEDITOR.plugins.contextMenu","id":"method-constructor","meta":{}},{"name":"add","tagname":"method","owner":"CKEDITOR.menu","id":"method-add","meta":{}},{"name":"addListener","tagname":"method","owner":"CKEDITOR.menu","id":"method-addListener","meta":{}},{"name":"addTarget","tagname":"method","owner":"CKEDITOR.plugins.contextMenu","id":"method-addTarget","meta":{}},{"name":"hide","tagname":"method","owner":"CKEDITOR.menu","id":"method-hide","meta":{}},{"name":"open","tagname":"method","owner":"CKEDITOR.plugins.contextMenu","id":"method-open","meta":{}},{"name":"removeAll","tagname":"method","owner":"CKEDITOR.menu","id":"method-removeAll","meta":{}},{"name":"show","tagname":"method","owner":"CKEDITOR.menu","id":"method-show","meta":{}}],"alternateClassNames":[],"aliases":{},"id":"class-CKEDITOR.plugins.contextMenu","component":false,"superclasses":["CKEDITOR.menu"],"subclasses":[],"mixedInto":[],"mixins":[],"parentMixins":[],"requires":[],"uses":[],"html":"<div><pre class=\"hierarchy\"><h4>Hierarchy</h4><div class='subclass first-child'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='docClass'>CKEDITOR.menu</a><div class='subclass '><strong>CKEDITOR.plugins.contextMenu</strong></div></div><h4>Files</h4><div class='dependency'><a href='source/plugin19.html#CKEDITOR-plugins-contextMenu' target='_blank'>plugin.js</a></div></pre><div class='doc-contents'><p>Class replacing the non-configurable native context menu with a configurable CKEditor's equivalent.</p>\n</div><div class='members'><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-method'>Methods</h3><div class='subsection'><div id='method-constructor' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.plugins.contextMenu'>CKEDITOR.plugins.contextMenu</span><br/><a href='source/plugin19.html#CKEDITOR-plugins-contextMenu-method-constructor' target='_blank' class='view-source'>view source</a></div><strong class='new-keyword'>new</strong><a href='#!/api/CKEDITOR.plugins.contextMenu-method-constructor' class='name expandable'>CKEDITOR.plugins.contextMenu</a>( <span class='pre'>editor</span> ) : <a href=\"#!/api/CKEDITOR.plugins.contextMenu\" rel=\"CKEDITOR.plugins.contextMenu\" class=\"docClass\">CKEDITOR.plugins.contextMenu</a><span class=\"signature\"></span></div><div class='description'><div class='short'>Creates the CKEDITOR.plugins.contextMenu class instance. ...</div><div class='long'><p>Creates the <a href=\"#!/api/CKEDITOR.plugins.contextMenu\" rel=\"CKEDITOR.plugins.contextMenu\" class=\"docClass\">CKEDITOR.plugins.contextMenu</a> class instance.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>editor</span> : <a href=\"#!/api/CKEDITOR.editor\" rel=\"CKEDITOR.editor\" class=\"docClass\">CKEDITOR.editor</a><div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/CKEDITOR.plugins.contextMenu\" rel=\"CKEDITOR.plugins.contextMenu\" class=\"docClass\">CKEDITOR.plugins.contextMenu</a></span><div class='sub-desc'>\n</div></li></ul><p>Overrides: <a href=\"#!/api/CKEDITOR.menu-method-constructor\" rel=\"CKEDITOR.menu-method-constructor\" class=\"docClass\">CKEDITOR.menu.constructor</a></p></div></div></div><div id='method-add' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='defined-in docClass'>CKEDITOR.menu</a><br/><a href='source/plugin63.html#CKEDITOR-menu-method-add' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.menu-method-add' class='name expandable'>add</a>( <span class='pre'>item</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Adds an item. ...</div><div class='long'><p>Adds an item.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>item</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-addListener' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='defined-in docClass'>CKEDITOR.menu</a><br/><a href='source/plugin63.html#CKEDITOR-menu-method-addListener' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.menu-method-addListener' class='name expandable'>addListener</a>( <span class='pre'>listenerFn</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Adds a callback executed on opening the menu. ...</div><div class='long'><p>Adds a callback executed on opening the menu. Items\nreturned by that callback are added to the menu.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>listenerFn</span> : Function<div class='sub-desc'>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>startElement</span> : <a href=\"#!/api/CKEDITOR.dom.element\" rel=\"CKEDITOR.dom.element\" class=\"docClass\">CKEDITOR.dom.element</a><div class='sub-desc'><p>The selection start anchor element.</p>\n</div></li><li><span class='pre'>selection</span> : <a href=\"#!/api/CKEDITOR.dom.selection\" rel=\"CKEDITOR.dom.selection\" class=\"docClass\">CKEDITOR.dom.selection</a><div class='sub-desc'><p>The current selection.</p>\n</div></li><li><span class='pre'>path</span> : <a href=\"#!/api/CKEDITOR.dom.elementPath\" rel=\"CKEDITOR.dom.elementPath\" class=\"docClass\">CKEDITOR.dom.elementPath</a><div class='sub-desc'><p>The current elements path.</p>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'></span><div class='sub-desc'><p>Object (<code>commandName</code> => <code>state</code>) of items that should be added to the menu.</p>\n</div></li></ul></div></li></ul></div></div></div><div id='method-addTarget' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.plugins.contextMenu'>CKEDITOR.plugins.contextMenu</span><br/><a href='source/plugin19.html#CKEDITOR-plugins-contextMenu-method-addTarget' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.plugins.contextMenu-method-addTarget' class='name expandable'>addTarget</a>( <span class='pre'>element, [nativeContextMenuOnCtrl]</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Starts watching on native context menu triggers (Option key, right click) on the given element. ...</div><div class='long'><p>Starts watching on native context menu triggers (<kbd>Option</kbd> key, right click) on the given element.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>element</span> : <a href=\"#!/api/CKEDITOR.dom.element\" rel=\"CKEDITOR.dom.element\" class=\"docClass\">CKEDITOR.dom.element</a><div class='sub-desc'>\n</div></li><li><span class='pre'>nativeContextMenuOnCtrl</span> : Boolean (optional)<div class='sub-desc'><p>Whether to open native context menu if the\n<kbd>Ctrl</kbd> key is held on opening the context menu. See <a href=\"#!/api/CKEDITOR.config-cfg-browserContextMenuOnCtrl\" rel=\"CKEDITOR.config-cfg-browserContextMenuOnCtrl\" class=\"docClass\">CKEDITOR.config.browserContextMenuOnCtrl</a>.</p>\n</div></li></ul></div></div></div><div id='method-hide' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='defined-in docClass'>CKEDITOR.menu</a><br/><a href='source/plugin63.html#CKEDITOR-menu-method-hide' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.menu-method-hide' class='name expandable'>hide</a>( <span class='pre'>[returnFocus]</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Hides the menu. ...</div><div class='long'><p>Hides the menu.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>returnFocus</span> : Boolean (optional)<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-open' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='CKEDITOR.plugins.contextMenu'>CKEDITOR.plugins.contextMenu</span><br/><a href='source/plugin19.html#CKEDITOR-plugins-contextMenu-method-open' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.plugins.contextMenu-method-open' class='name expandable'>open</a>( <span class='pre'>offsetParent, [corner], [offsetX], [offsetY]</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Opens the context menu in the given location. ...</div><div class='long'><p>Opens the context menu in the given location. See the <a href=\"#!/api/CKEDITOR.menu-method-show\" rel=\"CKEDITOR.menu-method-show\" class=\"docClass\">CKEDITOR.menu.show</a> method.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>offsetParent</span> : <a href=\"#!/api/CKEDITOR.dom.element\" rel=\"CKEDITOR.dom.element\" class=\"docClass\">CKEDITOR.dom.element</a><div class='sub-desc'>\n</div></li><li><span class='pre'>corner</span> : Number (optional)<div class='sub-desc'>\n</div></li><li><span class='pre'>offsetX</span> : Number (optional)<div class='sub-desc'>\n</div></li><li><span class='pre'>offsetY</span> : Number (optional)<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-removeAll' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='defined-in docClass'>CKEDITOR.menu</a><br/><a href='source/plugin63.html#CKEDITOR-menu-method-removeAll' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.menu-method-removeAll' class='name expandable'>removeAll</a>( <span class='pre'></span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Removes all items. ...</div><div class='long'><p>Removes all items.</p>\n</div></div></div><div id='method-show' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/CKEDITOR.menu' rel='CKEDITOR.menu' class='defined-in docClass'>CKEDITOR.menu</a><br/><a href='source/plugin63.html#CKEDITOR-menu-method-show' target='_blank' class='view-source'>view source</a></div><a href='#!/api/CKEDITOR.menu-method-show' class='name expandable'>show</a>( <span class='pre'>offsetParent, [corner], [offsetX], [offsetY]</span> )<span class=\"signature\"></span></div><div class='description'><div class='short'>Shows the menu in given location. ...</div><div class='long'><p>Shows the menu in given location.</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>offsetParent</span> : <a href=\"#!/api/CKEDITOR.dom.element\" rel=\"CKEDITOR.dom.element\" class=\"docClass\">CKEDITOR.dom.element</a><div class='sub-desc'>\n</div></li><li><span class='pre'>corner</span> : Number (optional)<div class='sub-desc'>\n</div></li><li><span class='pre'>offsetX</span> : Number (optional)<div class='sub-desc'>\n</div></li><li><span class='pre'>offsetY</span> : Number (optional)<div class='sub-desc'>\n</div></li></ul></div></div></div></div></div></div></div>","meta":{}});