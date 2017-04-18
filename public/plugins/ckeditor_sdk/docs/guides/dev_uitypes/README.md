<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# Editor User Interface Types

Due to inherent differences between two editor types (classic and inline) dedicated solutions for the editor user interface are required. CKEditor thus comes with two UI versions:

* **Fixed UI** &ndash; a static user interface used by default in [classic editor](#!/guide/dev_framed).
* **Floating UI** &ndash; a dynamic user interface used by default by [inline editor](#!/guide/dev_inline).

## Fixed User Interface

In fixed UI, used by default in classic editor:

* The editor toolbar is always visible.
* The toolbar and bottom bar location is static and does not change.
* The editing area takes a predefined amount of space, regardless of the size of the content inside.

The **default behavior of an editor with fixed UI can be customized**, though:

* [Toolbar position](#!/guide/dev_toolbarlocation) can be configured with the CKEDITOR.config.toolbarLocation option.
* The editing area size can be adjusted automatically also when fixed UI is used &mdash; check the [Auto Grow](#!/guide/dev_autogrow) feature.
* The editor size can be controlled manually by using the resize handle located at the bottom of the interface. This feature is provided through the [Editor Resize](http://ckeditor.com/addon/resize) plugin and is available in Standard and Full editor distributions.

<img src="guides/dev_ckeditor_js_load/classic_example.png" alt="Classic editor with fixed UI">

### Fixed UI for Inline Editor

<p class="requirements">
	This feature is provided through an optional plugin that is not included in the CKEditor presets available from the <a href="http://ckeditor.com/download">Download</a> site and <a href="#!/guide/dev_plugins">needs to be added to your custom build</a> with <a href="http://ckeditor.com/builder">CKBuilder</a>.
</p>

Although fixed UI is mostly used in conjunction with classic editor, it is also possible to implement it with inline editor. This is done through the optional [Div Editing Area](http://ckeditor.com/addon/divarea) plugin. **Using this plugin has a few of drawbacks**, though:

* Under the hood, the element replaced by CKEditor is hidden automatically and a `<div>`-based editor is created next to it. This might affect the styles of content inside the editor, e.g. because of the lack of original element ID attribute used by CSS selectors.
* The `<div>`-based editor is rendered using multiple nested `<div>` elements. This might affect editor content styles, too.
* Last but not least, the [Auto Grow](#!/guide/dev_autogrow) feature is not fully supported in this scenario &mdash; the value of the CKEDITOR.config.autoGrow_minHeight option is ignored.

If you want to achieve a fixed UI experience with inline editor, consider using the [Shared Toolbar and Bottom Bar](#!/guide/dev_sharedspace) feature instead, where these limitations do not exist.

## Floating User Interface

In floating UI, used by default in inline editor:

* The editor toolbar is only shown when the editor is focused.
* The toolbar location changes dynamically to ensure that the toolbar is always available.
* The size of the editing area is determined by the size of the content inside.

<p class="note">
	Floating UI is not available for classic editor.
</p>

If you open a page that contains an inline editor instance you will see that the toolbar is shown on demand and it moves dynamically on the page adjusting itself to the viewport and a page element that is focused.

<img src="guides/dev_ckeditor_js_load/inline_example.png" alt="Inline editor with floating UI">

Due to the dynamic nature of floating UI, **some editor features are unavailable**:

* [Elements Path](http://ckeditor.com/addon/elementspath) is not available &mdash; to use it in an inline editor you need to implement fixed UI with the [Div Editing Area](http://ckeditor.com/addon/divarea) plugin or the [shared toolbar and bottom bar](#!/guide/dev_sharedspace) that comes with the [Shared Space](http://ckeditor.com/addon/sharedspace) plugin.
* [Source Editing Area](http://ckeditor.com/addon/sourcearea) is not available &mdash; an alternative solution using a [dialog window for source code editing](http://ckeditor.com/addon/sourcedialog) should be used. Refer to the [Source Code Editing](#!/guide/dev_sourcearea) documentation.
* The following configuration options that control the size of the editor are ignored: CKEDITOR.config.height and CKEDITOR.config.width.

## User Interface Types Demo

The following samples are available for two CKEditor user interface types:

* The [Fixed User Interface](../samples/fixedui.html) sample shows the implementation of fixed UI with both classic and inline editor.
* The [Floating User Interface](../samples/floatingui.html) sample shows an inline editor instance with its default floating UI.

## Related Features

* [Shared Toolbar and Bottom Bar](#!/guide/dev_sharedspace) &ndash; configuring multiple editor instances (both classic and inline) to share the same toolbar and bottom bar.
* [Toolbar Location](#!/guide/dev_toolbarlocation) &ndash; changing toolbar position for fixed user interface.
