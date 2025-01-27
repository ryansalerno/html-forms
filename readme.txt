=== HTML Forms ===
Contributors: Ibericode, DvanKooten, hchouhan, lapzor
Donate link: https://htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=donate-link
Tags: form, contact form, email, contact, contact form 7
Requires at least: 4.5
Tested up to: 5.2
Stable tag: 1.3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires PHP: 5.3

Not just another contact form plugin.

== Description ==

With [HTML Forms](https://htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-description), you can easily add multi-purpose forms to your WordPress site.

The idea behind HTML Forms is different than most other form builder plugins. **You manage the form HTML. The plugin manages the PHP and JavaScript**.

That's right. No intuitive drag & drop interface but full control over the form HTML. No limitations.

We believe that dynamic form builders can be great, but they also severely limit your options. Also, they're slow.

HTML Forms aims to be simpler, faster and smarter.

You define your form fields in HTML and the plugin takes care of submitting the form, saving the form submission and running a configurable set of form actions.

> ### 1. Define your form fields
> You can use anything that resembles valid HTML. Ensure all `input` elements in your form have a `name` attribute to save data entered in that field.
> ### 2. Configure your form actions
> By default, form submissions are automatically saved for you. You can configure several other actions to run when a form is submitted, like sending an email notification or subscribing to MailChimp.
> ### 3. Show the form somewhere on your site
> You can show your form by using the `[hf_form]` shortcode in your WordPress posts, pages or widget areas.

## HTML Forms features

- Full control over the form HTML. If you want, we'll help you in generating the field HTML though.
- Each form submission is automatically saved in your database and can be viewed in a simple table format.
- Configure an unlimited amount of actions to run when a form is successfully submitted. For example, sending out email notifications.
- Access form field values by referencing the field name, eg `[NAME]` or `[EMAIL]`.
- Hide form or redirect to URL after a successful submission.
- Configurable & translatable form messages.
- Field validation.
- Developer friendly. HTML Forms comes with a myriad of [JavaScript events](https://kb.htmlforms.io/javascript-events/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-description) and WordPress hooks that allow you to modify or extend the plugin's default behavior.
- Advanced features are bundled in [HTML Forms Premium](https://www.htmlforms.io/premium-features/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-description).

## Who is this for?

HTML Forms is for everyone that wants a flexible & high performing form solution.

- Users. Managing your own site? With HTML Forms, you don't need any technical knowledge to setup a contact form.
- Developers. Building a site for your client? You supply the form HTML, HTML Forms takes care of validating and processing the form.
- Theme developers. Shipping a theme? HTML Forms allows for complete blend-in with your theme, and you don't have to write yet another contact form plugin.

With HTML Forms you can create any type of form. Contact forms, registration forms, price quote forms, you name it. It's somewhat similar to Contact Form 7, but without yet another template language for you to learn.

For more information, please refer to [htmlforms.io](https://htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-description).

#### Support

Use the [WordPress.org plugin forums](https://wordpress.org/support/plugin/html-forms) for community support where we try to help all of our users. If you found a bug, please create an issue on Github where we can act upon them more efficiently.

The [HTML Forms knowledge base](https://kb.htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-description) covers a wide range of frequently asked questions and is updated on a regular basis.

#### Development

HTML Forms is being developed on GitHub. If you want to collaborate, please look at [ibericode/html-forms](https://github.com/ibericode/html-forms).


== Installation ==

1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for **HTML Forms** and click "*Install now*"
1. Alternatively, download the plugin and upload the contents of `html-forms.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin

For more information, please refer to the [HTML Forms Knowledge Base](https://kb.htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=installation-instructions).

== Frequently Asked Questions ==

#### Where can I find help?
Start by going through the [HTML Forms knowledge base](https://kb.htmlforms.io/#utm_source=wp-plugin-repo&utm_medium=html-forms&utm_campaign=plugin-faq) where we cover a wide range of frequently asked questions.

#### How to display a form in posts or pages?
Use the `[hf_form]` shortcode.

#### How to display a form in widget areas like the sidebar or footer?
Go to **Appearance > Widgets**, add the "Text Widget" to any of your widget areas and use the `[hf_form]` shortcode.

#### How do I show a form in a pop-up?

We recommend the [Boxzilla pop-up plugin](https://wordpress.org/plugins/boxzilla/) for this. You can use the `[hf_form]` shortcode in your pop-up box to render any of your forms.

#### Can I send an email when the form is submitted?

Yes! You can configure this by opening up the "Actions" tab when editing your form and clicking the "Email" button under "Available actions".

### Does the plugin include anti-spam measures?

The plugin comes with built-in spam protection that should stop all automated attacks, unless specifically targeted at your site. When the built-in protection doesn't cut it, [WPBruiser](https://wordpress.org/plugins/goodbye-captcha/) surely will.


== Screenshots ==

1. Overview of forms in HTML Forms.
2. Editing form fields.
3. Sending an email when a form is submitted.
4. Viewing saved form submissions.
5. Hide form or redirect to URL after form submission.
6. Configurable form messages.
7. Details of a specific form submission.


== Changelog ==


#### 1.3.8 - May 28, 2019

**Fixes**

- Invalid HTML for generated textarea tag.

**Improvements**

- Improved HTML escaping, preserve double and single quotes.
- Explicitly set charset of HTML emails to UTF-8 by default.
- Escape HTML after limiting string length, not before.


#### 1.3.7 - April 8, 2019

**Additions**

- Add Gutenberg block for adding shortcode to content.
- Add setting in field builder for the `multiple` attribute on `<select>` elements.
- Add `hf_get_forms()` function for retrieving multiple form objects.

**Improvements**

- Add `edit_form` capability to user that activates the plugin.


#### 1.3.6 - March 27, 2019

**Improvements**

- Don't strip HTML from variable replacements in HTML emails. This change allows you to link to uploaded files properly.


#### 1.3.5 - January 29, 2019

**Improvements**

- Allow adding form field variables to the form's redirect URL.


#### 1.3.4 - January 9, 2019

**Improvements**

- Reload available field variables when adding action on form settings page.
- Add role="alert" attribute to all form messages.
- Emit "message" event whenever message is shown to user.


#### 1.3.3 - November 6, 2018

**Fixes**

- Fix selected state of email content type.

**Improvements**

- Add filter & action hook for extending forms with custom messages & message settings.
- Don't add line-breaks automatically when using HTML emails.
- Delete all related postmeta when deleting a submission.


#### 1.3.2 - Aug 6, 2018

**Improvements**

- Default to an empty string value in conditional fields logic. This allows you to show or hide elements when a field is empty or has not been set yet.


#### 1.3.1 - June 12, 2018

**Improvements**

- Format dates, files and arrays when using data variables.
- Format dates, files and arrays on the submissions overview and submissions details pages.
- Allow cancelling a form's submit event in JavaScript (with `event.stopPropagation()`) to prevent form submission.


#### 1.3.0 - May 28, 2018

**Fixes**

- PHP notice because of namespace import outside of any namespace.
- Removed usage of PHP 5.4+ feature.
- Enforce HTTPS in form preview iframe when WP Admin uses HTTPS but public site does not.

**Improvements**

- Hook into GDPR Personal Data Export & Erase functionality. Requires WP 4.9.6.
- Allow updating stored Submissions with empty values. [Allows clearing out IP address & user agents](https://github.com/ibericode/html-forms-code-snippets/blob/master/do-not-store-ip-address-and-user-agent.php).
- Internal field should start with underscore to hide it in column view.
- Add for attribute to generated label element. Allows for simple [multi-step forms](https://github.com/ibericode/html-forms-code-snippets/blob/master/multi-step-form.html).

**Additions**

- Add support for button clicks in conditional element logic.


#### 1.2.0 - April 24, 2018

**Fixes**

- Remove use of short-array syntax, which is only available in PHP 5.4 or later.

**Improvements**

- You can now hide columns on the submissions tab using screen options (in the top right corner).
- You can now disable saving submissions on a per-form basis.
- Allow pre-checking multiple checkboxes when using the field helper
- Fields with matching URL parameter names will automatically be prefilled.
- Use SVG icon in admin menu.

**Additions**

- Add simple action for subscribing to MailChimp. Requires [MailChimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/).


#### 1.1.5 - April 9, 2018

**Fixes**

- Conditionally hidden fields are now ignored in server-side required field validation too. Thanks [Jeroen Sormani](https://github.com/JeroenSormani)!

**Improvements**

- Added foundational stuff for being able to handle file uploads.

**Additions**

- Added `hf_process_form` action to execute code before the form actions run.


#### 1.1.4 - March 28, 2018

**Fixes**

- Ensure form is fully functional in live preview.
- Show all forms on the forms overview page (limit was 5).
- Parse field variables in custom email headers. Thanks [Jeroen Sormani](https://github.com/JeroenSormani)!

**Improvements**

- You can now [bind JavaScript events](https://kb.htmlforms.io/javascript-events/) using the default browser API, eg `document.getElementById('hf-form-5').addEventListener('hf-success', ..);`
- Only load JavaScript file on pages with a form on it. 
- Don't add line-breaks in HTML generated by the Field Builder.
- [Conditional elements](https://kb.htmlforms.io/conditional-elements/) now accept wildcard values: `*`
- Available field variables in email action settings are now clickable.

**Additions**

- Added several action & filter hooks to enable advanced functionality in [HTML Forms Premium](https://www.htmlforms.io/premium-features/).


#### 1.1.3 - February 12, 2018

**Fixes**

- Form preview was not working when WPML was activated.

**Improvements**

- Improved theme compatibility for the form preview.
- Print submission details as JSON instead of PHP object.
- Form messages are now added to the element as data attributes, so they can be used in JavaScript event callbacks.

**Additions**

- [Conditional logic](https://kb.htmlforms.io/conditional-elements/) now accepts multiple values, separated by the |-character.


#### 1.1.2 - January 18, 2018

**Fixes**

- Conditional elements visible in form preview.
- WP_List_Table issue on forms overview page.

**Improvements**

- Allow disabling submission storage through a global setting.
- Hide submissions tab when submission storage is disabled.
- Prevent PHP notice if `$_SERVER` global is missing properties.
- Update JavaScript dependencies.

**Additions**

- Filter: `hf_ignored_field_names`


#### 1.1.1 - December 21, 2017

**Fixes**

- Incorrect role capability for administrators.


#### 1.1 - December 21, 2017

**Fixes**

- JavaScript error in some older browser when submitting the form.

**Improvements**

- Use custom user capability base for editing & viewing forms.
- Delay form response until a later hook so other plugins get a chance to hook in.
- Disable client-side validation for conditional fields marked as required.

**Additions**

- Added live preview to the form editor.


#### 1.0.6 - December 11, 2017

**Fixes**

- Array replacements in email message were showing "Array" instead of a comma separated list of values.
- Don't reset form when there are errors. Thanks [Jeroen Sormani](https://github.com/JeroenSormani)!

**Additions**

- You can now use certain [template variables](https://kb.htmlforms.io/template-variables/) in the form content which will be dynamically replaced. 
- Added `hf_validate_form_{$form_slug}` filter hook.
- Added `hf_form_{$form_slug}_success` action hook.


#### 1.0.5 - November 18, 2017

**Fixes**

- Could not save more than one "Email" action.


#### 1.0.4 - November 10, 2017

**Fixes**

- Incompatibility with PHP versions before 5.6.
- Data variables could not be placed on the same line.

**Improvements**

- Clear output buffer before sending AJAX response to prevent issues with response parsing.

**Additions**

- Added `hf_form_message_{$code}` filter hook.



#### 1.0.3 - November 6, 2017

**Additions**

- Added [support for conditional elements](https://kb.htmlforms.io/conditional-elements/) by using `data-show-if` and `data-hide-if` attributes.

**Improvements**

- Accept `id` argument in `[hf_form]` shortcode.
- Catch errors in shortcode's `slug` attribute.
- Allow changing form slug after initial form is saved.

**Fixes**

- Fixes stylesheet URL when option to load stylesheet is toggled.



#### 1.0.2 - October 30, 2017

**Fixes**

- Form validation always failing when form has 0 required fields.

**Improvements**

- Fake success response when honeypot validation fails.
- Validate request by comparing size of POST array with number of form fields.
- Ensure submit button never has label element when using the field helper.
- Optimize URL generation of asset files on frontend.

**Additions**

- Added `hf_validate_form_request_size` filter hook.


#### 1.0.1 - October 28, 2017

**Improvements**
- Added SVG admin menu icon.
- Field names are now sanitized before they are saved in the database.
- Submit button was missing for default form fields.
- Unneeded `<form>` tags are now stripped from the form before saving.

**Additions**
- Added `data-title` and `data-slug` attributes to the `<form>` element on the frontend.


#### 1.0 - October 25, 2017

Introducing a first version of HTML Forms, a different approach to forms for WordPress sites.



== Upgrade Notice ==
