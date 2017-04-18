<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# Creating Mathematical Formulas

<p class="requirements">
	This feature was introduced in <strong>CKEditor 4.3</strong>. It is provided through an optional plugin that is not included in the CKEditor presets available from the <a href="http://ckeditor.com/download">Download</a> site and <a href="#!/guide/dev_widget_installation">needs to be added to your custom build</a> with <a href="http://ckeditor.com/builder">CKBuilder</a>.
</p>

The optional [Mathematical Formulas](http://ckeditor.com/addon/mathjax) plugin allows you to create and modify mathematical equations written in TeX directly in CKEditor. TeX content will be automatically replaced by a mathematical formulas widget when you put it in a `<span class="math-tex">` element.

New equations can also be inserted into the editor content by using the **Math** toolbar button and entering TeX code in the plugin dialog window. After you click the **OK** button, a mathematical formulas widget will be inserted into the editor content.

{@img mathjax_01.png}

Do note that the equations will be output in plain TeX format with MathJax delimiters, `\(` and `\)`, like in the example below:

	<span class="math-tex">\( \sqrt{\frac{a}{b}} \)</span>

Equations are inserted as widgets, so they have [all advantages of widgets](#!/guide/dev_widgets-section-common-usage-scenarios), i.e. you can **treat the entire equation as one entity** and select, delete, or move it with drag and drop in the editor content area as one unit.

## Displaying on Target Page

In order to display mathematical formulas on a target page, i.e. the page where content produced by CKEditor will be visible, the target page needs to [include the MathJax script](http://docs.mathjax.org/en/latest/start.html). It is advisable to use the same MathJax library version as set in the CKEDITOR.config.mathJaxLib configuration option. For example for the default setting this would be:

	<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/2.2-latest/MathJax.js?config=TeX-AMS_HTML"></script>

## Changing Path to MathJax Library

By default the MathJax library is loaded from the [official MathJax CDN](http://docs.mathjax.org/en/latest/start.html#using-the-mathjax-content-delivery-network-cdn). You can however use the CKEDITOR.config.mathJaxLib setting to use a different path, either a local resource or a different web resource. This configuration option accepts a full or an absolute path. For example:

	config.mathJaxLib = 'http:\/\/example.com\/libs\/MathJax.js';

## Changing Default Class

You can also modify the default class for `<span>` elements that are automatically converted into mathematical formulas widgets. Use the CKEDITOR.config.mathJaxClass option to provide a custom class. For example this setting:

	config.mathJaxClass = 'equation';

will turn all `<span class="equation">` elements into mathematical formulas widgets, including this one:

	<span class="equation">\( \sqrt{\frac{a}{b}} \)</span>

## Mathematical Formulas Demo

See the [working "Creating Mathematical Formulas" sample](../samples/mathjax.html) that showcases the Mathematical Formulas plugin with its MathJax widget that supports writing equations in TeX.
