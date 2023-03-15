Friends of the Dales WordPress Stuff
====================================

Plugin
------

Plugin to include filters and hooks in WordPress for the [Friends of the Dales website](https://friendsofthedales.org.uk/).

* adds the filter `wpcf7_autop_or_not` to stop Contact Form 7 adding `<br>` and `<p>` tags to forms

Create the plugin zip by using this command:
```
git archive --output=./fotd.zip --format=zip HEAD
```

WordPress Content
-----------------

The `wp` folder contains various bits of content which are used on the site for the subscription, donation and contact forms. These are:

* The Contact Form 7 forms
* Javascript used to drive the forms - added using the `Elements` part of the GeneratePress Premium plugin
* Additional CSS for the forms
