<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# Keyboard Shortcuts

Many functions in CKEditor have their equivalent keyboard shortcuts. This is one of the reasons why working with the editor is
simple and efficient.

The list below contains available keyboard shortcuts grouped by problem areas. You can also learn about keyboard shortcuts directly in the editor:

* Through the [Accessibility Instructions](#!/guide/dev_a11y-section-accessibility-instructions-dialog-window) dialog window.
* Through toolbar button tooltips and context menu entries (CKEditor 4.6 or later).

<div class="requirements">
	<p>
		The <strong>Accessibility Instructions</strong> dialog window is provided through the <a href="http://ckeditor.com/addon/a11yhelp">Accessibility Help</a> plugin that is included in the Standard and Full presets available from the official CKEditor <a href="http://ckeditor.com/download">Download</a> site. You can also <a href="#!/guide/dev_plugins">add it to your custom build</a> with <a href="http://ckeditor.com/builder">CKBuilder</a>.
	</p>
	<p>
		Note that some shortcuts only work if the functionality behind them is included in your editor build.
	</p>
</div>

## Working with a Document

* <kbd>Esc</kbd> &ndash; Closes a CKEditor dialog window, drop-down list, or context menu. Equivalent to the
	**Cancel** button in a dialog window. Also moves from the context menu submenu to the parent option.
* <kbd>Enter</kbd> &ndash; Selects a CKEditor function from the toolbar, drop-down list, or context menu. Equivalent to the
	**OK** button in a dialog window.
* <kbd>Shift+F10</kbd>, <kbd>Menu/Application</kbd> key &ndash; Opens the element's context menu.

### Navigation

* <kbd>Home</kbd> &ndash; Jumps to the beginning of the line.
* <kbd>Ctrl+Home</kbd> &ndash; Jumps to the beginning of the document.
* <kbd>End</kbd> &ndash; Jumps to the end of the line.
* <kbd>Ctrl+End</kbd> &ndash; Jumps to the end of the document.
* <kbd>PgDn</kbd> &ndash; Scrolls down the document, approximately by the length of the editing area.
* <kbd>PgUp</kbd> &ndash; Scrolls up the document, approximately by the length of the editing area.

### Writing

* <kbd>Enter</kbd> (<kbd>Return</kbd>) &ndash; Ends a paragraph and starts a new one.
* <kbd>Shift+Enter</kbd> &ndash; Adds a line break.
* <kbd>Shift+Ctrl+3</kbd> &ndash; Enables enetring content (by adding a new paragraph) before a problematic element such as an image, table or `<div>` element that starts or ends a document, list, or even adjacent horizontal lines.
* <kbd>Shift+Ctrl+4</kbd> &ndash; Enables enetring content (by adding a new paragraph) after a problematic element such as an image, table or `<div>` element that starts or ends a document, list, or even adjacent horizontal lines.
* <kbd>Backspace</kbd>, <kbd>Del</kbd> &ndash; Deletes a character.
* <kbd>Ctrl+Backspace</kbd>, <kbd>Ctrl+Del</kbd> &ndash; Deletes a word.

### Undo and Redo

* <kbd>Ctrl+Z</kbd> &ndash; Performs the undo operation.
* <kbd>Ctrl+Y</kbd>, <kbd>Shift+Ctrl+Z</kbd> &ndash; Performs the redo operation.

### Cut, Copy and Paste

* <kbd>Ctrl+X</kbd>, <kbd>Shift+Del</kbd> &ndash; Cuts a text fragment to clipboard.
* <kbd>Ctrl+C</kbd> &ndash; Copies a text fragment to clipboard.
* <kbd>Ctrl+V</kbd>, <kbd>Shift+Insert</kbd> &ndash; Pastes a text fragment from clipboard.

### Text Selection

* <kbd>Ctrl+A</kbd> &ndash; Selects all document contents.
* <kbd>Shift+Arrow</kbd> &ndash; Selects a text fragment by letters.
* <kbd>Ctrl+Shift+Arrow</kbd> &ndash; Selects a text fragment by words.
* <kbd>Shift+Home</kbd> &ndash; Selects a text fragment from the cursor to the beginning of the line.
* <kbd>Shift+End</kbd> &ndash; Selects a text fragment from the cursor to the end of the line.
* <kbd>Ctrl+Shift+Home</kbd> &ndash; Selects a text fragment from the cursor to the beginning of the document.
* <kbd>Ctrl+Shift+End</kbd> &ndash; Selects a text fragment from the cursor to the end of the document.
* <kbd>Shift+PgDn</kbd> &ndash; Selects a text fragment of approximately the length of the editing area starting from the cursor
	and going down.
* <kbd>Shift+PgUp</kbd> &ndash; Selects a text fragment of approximately the length of the editing area starting from the cursor
	and going up.

## Text Styling

* <kbd>Ctrl+B</kbd> &ndash; Applies **bold** formatting to a text fragment.
* <kbd>Ctrl+I</kbd> &ndash; Applies *italics* formatting to a text fragment.
* <kbd>Ctrl+U</kbd> &ndash; Applies <span style="text-decoration: underline;">underline</span> formatting to a text fragment.

### Copy Formatting

* <kbd>Ctrl+Shift+C</kbd> &ndash; Copies the inline formatting from a text fragment and enables the sticky mode.
* <kbd>Ctrl+Shift+V</kbd> &ndash; Applies the previously copied inline formatting to a text fragment.
* <kbd>Esc</kbd> &ndash; Disables the sticky mode.

## Rich Text

* <kbd>Ctrl+L</kbd> &ndash; Opens the **Link** dialog window.
* <kbd>Tab</kbd> &ndash; Indents a list.
* <kbd>Shift+Tab</kbd> &ndash; Outdents a list.

## Accessibility

* <kbd>Alt+0</kbd> &ndash; Opens the **Accessibility Instructions** dialog window.
* <kbd>Alt+F10</kbd> &ndash; Enters the toolbar or the tab list of the currently open dialog window.
* <kbd>Alt+F11</kbd> &ndash; Enters the elements path.
* <kbd>Tab</kbd> &ndash; Moves to the next toolbar button group, context menu suboption, elements path element,
	dialog window element, or dialog window tab while in the tab list.
* <kbd>Right Arrow</kbd> &ndash; Moves to the next toolbar button within the group, context menu suboption,
	elements path element, dialog window element, or dialog window tab while in the tab list.
* <kbd>Tab</kbd> or <kbd>Down Arrow</kbd> &ndash; Moves to the next drop-down list or context menu option.
* <kbd>Shift+Tab</kbd> &ndash; Moves to the previous toolbar button group, context  menu parent option,
    elements path element, dialog window element, or dialog window tab while in the tab list.
* <kbd>Left Arrow</kbd> &ndash; Moves to the previous toolbar button within the  group, context menu
    parent option, elements path element, dialog window element, or dialog window tab while in the tab list.
* <kbd>Shift+Tab</kbd> or <kbd>Up Arrow</kbd> &ndash; Moves to the previous drop-down list or context menu option.
* <kbd>Space</kbd> or <kbd>Enter</kbd> &ndash; Activates a toolbar button, a context menu
    option, a drop-down list option, an elements path element, or a dialog window tab once selected.
	Also enters a context menu submenu, if it is available.

## Accessibility Checker Plugin

Please refer to the [Keyboard Shortcuts](#!/guide/dev_accessibility_checker-section-keyboard-shortcuts) section of the [Managing Content Accessibility with Accessibility Checker](#!/guide/dev_accessibility_checker) article.

## Accessibility and Keyboard Shortcuts Demo

See the [working "Accessibility Support and Keyboard Shortcuts" sample](../samples/accessibility.html) that showcases the usage of some accessibility-related features.

## Related Features

Refer to the following resources for more information about accessibility in CKEditor:

* The [Accessibility Support in CKEditor](#!/guide/dev_a11y) article explains CKEditor compliance with some well-known accessibility standards and gives an overview of available accessibility-related features.
* The [Managing Content Accessibility with Accessibility Checker](#!/guide/dev_accessibility_checker) article describes an innovative Accessibility Checker plugin that lets you inspect the accessibility level of content created in CKEditor and immediately solve any accessibility issues that are found.
* The [Page Navigation Using the "Tab" Key](#!/guide/dev_tabindex) article discusses how CKEditor participates in the page <kbd>Tab</kbd> order.
* The [CKEditor Section 508 Compliance](#!/guide/dev_section508) article describes CKEditor 4 compatibility with [Section 508 Amendment to the Rehabilitation Act of 1973](http://www.state.gov/m/irm/impact/c32157.htm).
* The [CKEditor WCAG 2.0 Compliance](#!/guide/dev_wcag) article describes CKEditor 4 compatibility with the [Web Content Accessibility Guidelines (WCAG) 2.0](http://www.w3.org/TR/WCAG20/) standard.
