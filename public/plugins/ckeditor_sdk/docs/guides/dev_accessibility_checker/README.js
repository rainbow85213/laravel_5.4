Ext.data.JsonP.dev_accessibility_checker({"guide":"<h1 id='dev_accessibility_checker-section-managing-content-accessibility-with-accessibility-checker'>Managing Content Accessibility with Accessibility Checker</h1>\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_accessibility_checker-section-summary%3A-how-does-it-work%3F'>Summary: How Does It Work?</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-step-one%3A-content-validation'>Step One: Content Validation</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-step-two%3A-report-issues'>Step Two: Report Issues</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-step-three%3A-fix-the-issue'>Step Three: Fix the Issue</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-running-accessibility-checker'>Running Accessibility Checker</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-issues-found-%26mdash%3B-checking-mode'>Issues Found &mdash; Checking Mode</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-no-issues'>No Issues</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-what-exactly-are-issues%3F'>What Exactly Are Issues?</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-checking-mode'>Checking Mode</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-navigating-over-issues'>Navigating over Issues</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-navigation-buttons'>Navigation Buttons</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-clicking-a-selected-issue'>Clicking a Selected Issue</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-using-the-keyboard'>Using the Keyboard</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-using-quick-fixes'>Using Quick Fixes</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-working-with-quick-fixes'>Working with Quick Fixes</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-adding-quick-fixes'>Adding Quick Fixes</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-ignoring-issues'>Ignoring Issues</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-switching-to-listening-mode'>Switching to Listening Mode</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-listening-mode'>Listening Mode</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-keyboard-shortcuts'>Keyboard Shortcuts</a><ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-keyboard-shortcuts-for-windows-%2F-linux'>Keyboard Shortcuts for Windows / Linux</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-keyboard-shortcuts-for-mac'>Keyboard Shortcuts for Mac</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-accessibility-checker-demo'>Accessibility Checker Demo</a></li>\n<li>\n<a href='#!/guide/dev_accessibility_checker-section-related-features'>Related Features</a></li></ol>\n</div>\n\n<div class=\"requirements\">\n<p>\n    This feature is provided through optional plugins (<a href=\"http://ckeditor.com/addon/a11ychecker\">Accessibility Checker</a> and <a href=\"http://ckeditor.com/addon/balloonpanel\">Balloon Panel</a>) that are not included in the CKEditor presets available from the <a href=\"http://ckeditor.com/download\">Download</a> site and <a href=\"#!/guide/dev_plugins\">need to be added to your custom build</a> with <a href=\"http://ckeditor.com/builder\">CKBuilder</a>.\n</p>\n<p>\n    Accessibility Checker is available under a <a href=\"http://www.gnu.org/licenses/gpl.html\">GPL</a> or commercial license. <a href=\"https://cksource.com/contact\">Contact</a> us for more details.\n</p>\n<p>\n    Quail, the default accessibility tests library, requires <strong>jQuery 1.x or later</strong> to run. You thus need to add jQuery 1.x (or later) to any site that is going to use Accessibility Checker.\n</p>\n</div>\n\n\n<p>Accessibility Checker is an innovative solution that lets you <strong>inspect the accessibility level</strong> of content created in CKEditor and <strong>immediately solve</strong> any accessibility issues that are found.</p>\n\n<p>It is built upon three key elements:</p>\n\n<ul>\n<li>User Interface optimized for quick problem solving.</li>\n<li>Flexibility allowing you to use the accessibility checking engine of your choice.</li>\n<li>Quick Fix feature letting you fix common problems fully automatically.</li>\n</ul>\n\n\n<h2 id='dev_accessibility_checker-section-summary%3A-how-does-it-work%3F'>Summary: How Does It Work?</h2>\n\n<p>A typical accessibility checking process can be simplified to the following three steps.</p>\n\n<h3 id='dev_accessibility_checker-section-step-one%3A-content-validation'>Step One: Content Validation</h3>\n\n<p>Accessibility Checker inspects output HTML code against predefined patterns of common accessibility problems. For that purpose Accessibility Checker uses a dedicated <strong>accessibility checking engine</strong>.</p>\n\n<p>The default checking engine is <a href=\"http://quailjs.org\">Quail</a>, but you are free to integrate any other library you want &mdash; it can be written in JavaScript, PHP, Java, .NET or any other language of your choice.</p>\n\n<h3 id='dev_accessibility_checker-section-step-two%3A-report-issues'>Step Two: Report Issues</h3>\n\n<p>Accessibility Checker will list all issues found and highlight them in the document. It will provide a more detailed description of what is wrong with each issue so the user can verify and solve the problem.</p>\n\n<h3 id='dev_accessibility_checker-section-step-three%3A-fix-the-issue'>Step Three: Fix the Issue</h3>\n\n<p>Fix the markup to make your content free from accessibility issues. Thanks to the <a href=\"#!/guide/dev_accessibility_checker-section-using-quick-fixes\">Quick Fix feature</a> correcting common problems is as easy as clicking a button. When there is no Quick Fix available, you can switch Accessibility Checker <a href=\"#!/guide/dev_accessibility_checker-section-listening-mode\">into listening mode</a> and make necessary corrections to your content manually, following the checking engine recommendations provided in the panel.</p>\n\n<h2 id='dev_accessibility_checker-section-running-accessibility-checker'>Running Accessibility Checker</h2>\n\n<p>You can enable Accessibility Checker by clicking the <strong>Check Accessibility</strong> (<img src=\"guides/dev_accessibility_checker/a11ychecker.png\" alt=\"Check Accessibility\" title=\"Check Accessibility\" style=\"vertical-align: bottom;\">) toolbar button. Once the button is clicked, Accessibility Checker will perform the content checking process. Typically it takes a fraction of a second. Depending on the result, Accessibility Checker will switch to <strong>checking mode</strong> or inform you that the document contains no accessibility issues.</p>\n\n<h3 id='dev_accessibility_checker-section-issues-found-%26mdash%3B-checking-mode'>Issues Found &mdash; Checking Mode</h3>\n\n<p>When Accessibility Checker finds some issues, it will display a panel containing the tools needed for understanding and solving the problem.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_01.png\" alt=\"CKEditor Accessibility Checker in Checking Mode\" width=\"688\" height=\"393\"></p></p>\n\n<p>Accessibility problems are presented as one issue at a time, allowing you to iterate over the entire list. Issues can also be ignored (see <a href=\"#!/guide/dev_accessibility_checker-section-ignoring-issues\">Ignoring Issues</a>). For more information about checking mode please refer to the <a href=\"#!/guide/dev_accessibility_checker-section-checking-mode\">Checking Mode</a> section.</p>\n\n<h3 id='dev_accessibility_checker-section-no-issues'>No Issues</h3>\n\n<p>If no issues are found in the document, Accessibility Checker will inform you about it.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_02.png\" alt=\"Accessibility Checker dialog shown when no issues are found\" width=\"690\" height=\"211\"></p></p>\n\n<p>This means that your content is validated.</p>\n\n<h2 id='dev_accessibility_checker-section-what-exactly-are-issues%3F'>What Exactly Are Issues?</h2>\n\n<p>An issue represents a single accessibility problem in your content, as defined by your checking engine. Issue are grouped into different types:</p>\n\n<ul>\n<li><strong>Error</strong> &ndash; The checking engine is 100% certain that the highlighted element contains an accessibility issue.</li>\n<li><strong>Warning</strong> &ndash; The checking engine discovered that there is a possibility of a given error, but it does not have a 100% certainty.</li>\n<li><strong>Notice</strong> &ndash; The checking engine has no way to detect this issue, so it points an issue only as a notice and the user can verify if the content satisfies the given rule.</li>\n</ul>\n\n\n<p>In checking mode the highlight color will slightly differ (ranging from red for an error through yellow for a warning to gray for a notice) in order to hint the issue type.</p>\n\n<h2 id='dev_accessibility_checker-section-checking-mode'>Checking Mode</h2>\n\n<p>Checking mode is enabled when there is at least one issue in the editor content. It shows a panel containing all key information about the currently focused issue.</p>\n\n<p>It is designed for:</p>\n\n<ul>\n<li>Quick problem identification (with a meaningful title, description, help links).</li>\n<li>Navigation over the detected issues.</li>\n<li>Fixing the problems, ideally without leaving the panel.</li>\n</ul>\n\n\n<p>Checking mode will work on a single issue at a time, allowing you to iterate over all issues found in the document.</p>\n\n<p>The following picture highlights the most important parts of the panel shown in the checking mode.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_03.png\" alt=\"Checking mode panel with highlighted parts\" width=\"620\" height=\"284\"></p></p>\n\n<h3 id='dev_accessibility_checker-section-navigating-over-issues'>Navigating over Issues</h3>\n\n<p>Multiple ways to go through issues are available.</p>\n\n<h4 id='dev_accessibility_checker-section-navigation-buttons'>Navigation Buttons</h4>\n\n<p>Use the <strong>Previous</strong> or <strong>Next</strong> buttons in the Accessibility Checker panel to move between issues.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_04.png\" alt=\"Navigation using the Next and Previous buttons\" width=\"368\" height=\"301\"></p></p>\n\n<h4 id='dev_accessibility_checker-section-clicking-a-selected-issue'>Clicking a Selected Issue</h4>\n\n<p>Since issues are highlighted in the editor, you can click an issue with your mouse. It will focus the first issue within the selected element. The possibility to focus an issue is indicated by a hightlight and a cursor change.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_05.png\" alt=\"Navigation using the mouse\" width=\"679\" height=\"188\"></p></p>\n\n<h4 id='dev_accessibility_checker-section-using-the-keyboard'>Using the Keyboard</h4>\n\n<p>You can also use the keyboard to move through issues. A few keyboard shortcuts were defined to make navigation easy and intuitive.</p>\n\n<p>Please refer to the <a href=\"#!/guide/dev_accessibility_checker-section-keyboard-shortcuts\">Keyboard Shortcuts</a> section for a complete list of available keystrokes.</p>\n\n<h3 id='dev_accessibility_checker-section-using-quick-fixes'>Using Quick Fixes</h3>\n\n<p>Quick Fix is a powerful feature designed to solve issues as quickly as possible, without leaving the Accessibility Checker panel.</p>\n\n<p>There are two Quick Fix types:</p>\n\n<ul>\n<li><strong>Automatic</strong> &ndash; Does not require any user input at all to fix the problem.</li>\n<li><strong>Semi-automatic</strong> &ndash; Requires the user to provide some information before applying the Quick Fix.</li>\n</ul>\n\n\n<h4 id='dev_accessibility_checker-section-working-with-quick-fixes'>Working with Quick Fixes</h4>\n\n<p>Depending on the Quick Fix type, two approaches are possible.</p>\n\n<h5 id='dev_accessibility_checker-section-automatic-quick-fix'>Automatic Quick Fix</h5>\n\n<p>For automatic Quick Fixes the user's job is to just press the <strong>Quick Fix</strong> button in the Accessibility Checker panel.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_06.png\" alt=\"Accessibility Checker automatic Quick Fix example\" width=\"690\" height=\"326\"></p></p>\n\n<p>Once the button is pressed, the fix is applied. This will result in a change of the HTML source of your content.</p>\n\n<h5 id='dev_accessibility_checker-section-semi-automatic-quick-fix'>Semi-Automatic Quick Fix</h5>\n\n<p>A semi-automatic Quick Fix requires some action from the user, typically requested by a form text input in the Accessibility Checker panel. For example:</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_07.png\" alt=\"Semi-automatic Quick Fix example\" width=\"689\" height=\"290\"></p></p>\n\n<p>Initially this image has no alternative text so Quick Fix asks the user to provide it as it is unable to determine this automatically.</p>\n\n<h5 id='dev_accessibility_checker-section-user-input-validation'>User Input Validation</h5>\n\n<p>Quick Fixes are also smart enough to validate the user input data if needed.</p>\n\n<p>For example, it is recommended that an alternative text for an image should be shorter than 100 characters. If the user enters a text that is longer than 100 characters into the \"Alternative Text\" field and tries to apply it with a Quick Fix, Accessibility Checker will raise an error warning the user that the text is too long.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_08.png\" alt=\"Invalid user-provided data causes a validation error\" width=\"713\" height=\"285\"></p></p>\n\n<h4 id='dev_accessibility_checker-section-adding-quick-fixes'>Adding Quick Fixes</h4>\n\n<p>Quick Fix feature was created with extensibility in mind, so it is very easy for a developer to add new, custom Quick Fixes to Accessibility Checker.</p>\n\n<h3 id='dev_accessibility_checker-section-ignoring-issues'>Ignoring Issues</h3>\n\n<p>Issues reported by Accessibility Checker can also be ignored. This can be done by clicking the <strong>Ignore</strong> button for each selected issue in the Accessibility Checker panel.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_09.png\" alt=\"Issue ignore button\" width=\"902\" height=\"242\"></p></p>\n\n<p>If an issue is ignored, it will gain a very subtle highlight which no longer indicates the initial issue type, as shown below.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_10.png\" alt=\"Ignored issue higlighting\" width=\"891\" height=\"54\"></p></p>\n\n<p>It is still possible to open Accessibility Checker on an ignored issue by clicking it, navigating to it with your keyboard or moving to it from the previous or next issue.</p>\n\n<p>Once the issue is ignored you can also unset its ignore status by clicking the <strong>Stop ignoring</strong> button.</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_11.png\" alt=\"Stop ignoring button\" width=\"905\" height=\"239\"></p></p>\n\n<h3 id='dev_accessibility_checker-section-switching-to-listening-mode'>Switching to Listening Mode</h3>\n\n<p>When you wish to introduce some manual changes to your content, Accessibility Checker will switch to listening mode, waiting for your changes to be done.</p>\n\n<p>There are two ways of switching Accessibility Checker to listening mode after its initial activation:</p>\n\n<ul>\n<li>Clicking anywhere in the CKEditor content area.</li>\n<li>Pressing the listening mode <a href=\"#!/guide/dev_accessibility_checker-section-keyboard-shortcuts\">keyboard shortcut</a>.</li>\n</ul>\n\n\n<h2 id='dev_accessibility_checker-section-listening-mode'>Listening Mode</h2>\n\n<p>Listening mode is enabled when you want to make a quick change to the document.</p>\n\n<p>In listening mode Accessibility Checker minimizes itself and waits until you are finished editing your content. Listening mode will put the following indicator in the bottom right-hand corner of your browser:</p>\n\n<p><p><img src=\"guides/dev_accessibility_checker/a11ychecker_12.png\" alt=\"Accessibility Checker listening mode indicator\" width=\"256\" height=\"120\"></p></p>\n\n<p>When you are done with your changes, you can return to checking the content by clicking the <strong>Check again</strong> button.</p>\n\n<h2 id='dev_accessibility_checker-section-keyboard-shortcuts'>Keyboard Shortcuts</h2>\n\n<p>Accessibility Checker comes with good keyboard support. The following table describes default keystrokes and actions assigned to them.</p>\n\n<h3 id='dev_accessibility_checker-section-keyboard-shortcuts-for-windows-%2F-linux'>Keyboard Shortcuts for Windows / Linux</h3>\n\n<table class=\"a11ychecker\">\n    <thead>\n        <tr>\n            <th>Command</th>\n            <th>Keystroke</th>\n            <th>Restrictions</th>\n        </tr>\n    </thead>\n    <tbody>\n        <tr>\n            <td>Open or close Accessibility Checker</td>\n            <td><kbd>Ctrl+Alt+E</kbd></td>\n            <td></td>\n        </tr>\n        <tr>\n            <td>Next issue</td>\n            <td><kbd>Ctrl+E</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Previous issue</td>\n            <td><kbd>Ctrl+Shift+E</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Close Accessibility Checker</td>\n            <td><kbd>Esc</kbd></td>\n            <td></td>\n        </tr>\n        <tr>\n            <td>Switch to listening mode</td>\n            <td><kbd>Shift+Esc</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Switch to checking mode</td>\n            <td><kbd>Shift+Esc</kbd></td>\n            <td>Listening mode only</td>\n        </tr>\n    </tbody>\n</table>\n\n\n<h3 id='dev_accessibility_checker-section-keyboard-shortcuts-for-mac'>Keyboard Shortcuts for Mac</h3>\n\n<table class=\"a11ychecker\">\n    <thead>\n        <tr>\n            <th>Command</th>\n            <th>Keystroke</th>\n            <th>Restrictions</th>\n        </tr>\n    </thead>\n    <tbody>\n        <tr>\n            <td>Open or close Accessibility Checker</td>\n            <td><kbd>Command+Option+E</kbd></td>\n            <td></td>\n        </tr>\n        <tr>\n            <td>Next issue</td>\n            <td><kbd>Command+E</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Previous issue</td>\n            <td><kbd>Command+Shift+E</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Close Accessibility Checker</td>\n            <td><kbd>Esc</kbd></td>\n            <td></td>\n        </tr>\n        <tr>\n            <td>Switch to listening mode</td>\n            <td><kbd>Shift+Esc</kbd></td>\n            <td>Checking mode only</td>\n        </tr>\n        <tr>\n            <td>Switch to checking mode</td>\n            <td><kbd>Shift+Esc</kbd></td>\n            <td>Listening mode only</td>\n        </tr>\n    </tbody>\n</table>\n\n\n<p>Please note that the predefined keyboard shortcuts can be changed with the custom configuration.</p>\n\n<h2 id='dev_accessibility_checker-section-accessibility-checker-demo'>Accessibility Checker Demo</h2>\n\n<p>See the <a href=\"../samples/accessibilitychecker.html\">working \"Accessibility Checker\" sample</a> where you can try how to detect and fix accessibility issues in your editor content.</p>\n\n<h2 id='dev_accessibility_checker-section-related-features'>Related Features</h2>\n\n<p>Refer to the following resources for more information about accessibility in CKEditor:</p>\n\n<ul>\n<li>The <a href=\"#!/guide/dev_a11y\">Accessibility Support in CKEditor</a> article explains CKEditor compliance with some well-known accessibility standards and gives an overview of available accessibility-related features.</li>\n<li>The <a href=\"#!/guide/dev_shortcuts\">Keyboard Shortcuts</a> article lists all keyboard shortcuts supported in CKEditor.</li>\n<li>The <a href=\"#!/guide/dev_tabindex\">Page Navigation Using the \"Tab\" Key</a> article discusses how CKEditor participates in the page <kbd>Tab</kbd> order.</li>\n<li>The <a href=\"#!/guide/dev_section508\">CKEditor Section 508 Compliance</a> article describes CKEditor 4 compatibility with <a href=\"http://www.state.gov/m/irm/impact/c32157.htm\">Section 508 Amendment to the Rehabilitation Act of 1973</a>.</li>\n<li>The <a href=\"#!/guide/dev_wcag\">CKEditor WCAG 2.0 Compliance</a> article describes CKEditor 4 compatibility with the <a href=\"http://www.w3.org/TR/WCAG20/\">Web Content Accessibility Guidelines (WCAG) 2.0</a> standard.</li>\n</ul>\n\n","title":"Accessibility Checker","meta_description":"Check and fix accessibility issues in content.","meta_keywords":"ckeditor, editor, wysiwyg, accessibility, a11y, checker, check, issue, fix, fixes"});