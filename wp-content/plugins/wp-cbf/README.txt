=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://www.juliesmike.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Head section cleanup, custom settings used on every website setup as images settings, privacy and basic admin customizations.

== Description ==

WordPress Cleanup and Basic Options Functions is a utility plugin, even though it’s was developed with a focus on developers as many functionalities are what you might just add to every new website you build, it’s really easy to use, just check the boxes corresponding to the set up you want.
It will help you:

- Cleanup your website head and also some markup included with shortcodes section.
- Prettify the search url, ex: http://yourwebsite.com/search/search-terms.
- Load jQuery from Google CDN(default) or form your chosen cdn provider instead of using the hosted version.
- Change the p to figure tag to surround your images.
- Add Retina support for your images.
- Add additional images sizes and modify those.
- Setup a Logo and background color for your login page
- Hide Administration menu items with a simple checkbox setup
- Add some more privacy adding a “referrer” meta tag
- If Yoast SEO is activated, can remove Yoast comments in head
- Set up your SMTP emails settings


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-cbf.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
