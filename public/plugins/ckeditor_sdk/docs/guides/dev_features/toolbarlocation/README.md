<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# Toolbar Location

CKEditor allows you to customize the editor toolbar location. By default, in [classic](#!/guide/dev_framed), `iframe`-based editors the toolbar is placed in the top part of the editor UI, above the editing area.

You can, however, use the CKEDITOR.config.toolbarLocation configuration setting to change this option. For the default editor implementation you can choose between the `top` (the default) and the `bottom` setting.

For example, to put the toolbar at the bottom of the interface, use the following option:

    config.toolbarLocation = 'bottom';

To receive the result such as this:

{@img toolbarlocation_01.png}

Please note that this option is only applicable to [classic](#!/guide/dev_framed) editor. In case of [inline](#!/guide/dev_inline) editor the toolbar position is set dynamically depending on the position of the editable element on the screen.

## Toolbar Location Demo

See the [working "Toolbar Location Adjustment" sample](../samples/toolbarlocation.html) that showcases how to place the editor toolbar at the bottom of its interface.

## Related Features

Refer to the following resources for more information about the editor toolbar:

 * The [Toolbar Configuration](#!/guide/dev_toolbar) article explains how to set up the editor toolbar using the toolbar configurator (CKEditor 4.5+).
 * The [Understanding CKEditor Toolbar Concepts](#!/guide/dev_toolbarconcepts) article explains the basic concepts behind the editor toolbar.
 * The [Shared Toolbar and Bottom Bar](#!/guide/dev_sharedspace) feature lets you place the toolbar in a designated page element and share it among multiple editor instances used on one page.
