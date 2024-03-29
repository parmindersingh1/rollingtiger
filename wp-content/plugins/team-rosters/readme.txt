=== Team Rosters ===
Contributors: Mark O'Donnell
Donate link: http://shoalsummitsolutions.com
Tags: sports,games,roster,sports teams,team roster,sports roster,sports team roster  
Requires at least: 3.4.2
Tested up to: 3.5
Stable tag: 3.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Manages multiple sports team rosters. Displays tabular rosters, a single player bios, and player galleries.

== Description ==

Welcome to the MSTW Team Rosters Plugin from [Shoal Summit Solutions](http://shoalsummitsolutions.com/).

The MSTW Team Rosters plugin manages rosters for multiple teams. It provides roster tables with built-in formats for high school, college, and professional teams as well as custom roster formats for basball. Players are assigned to team rosters using a Teams custom taxonomy (screenshot-7). The plugin supports as many players and teams as needed. It provides several views of rosters including: a table (via a shortcode), a player gallery (via a custom taxonomy template), and single player bio (via a custom post type template). Samples of all of the above displays are available on the [Shoal Summit Solutions Plugin Development Site](http://shoalsummitsolutions.com/dev).


VERSION 3.0 HAS BEEN COMPLETELY REFACTORED TO PROVIDE SIGNIFICANT NEW FUNCTIONALITY AS OUTLINED BELOW. IF YOU ARE UPGRADING YOU WILL WANT TO READ THE INSTALLATION DOCUMENTATION AND UPGRADE NOTICE CAREFULLY. 

The following features enhance the user experience on both the front and back ends:
 
* You can now filter the "All Players" table on the admin screen by team (screenshot-1).
* Configure table columns and data fields to meet your requirements. You can show/hide all columns (except Player Name) and change the header/label of all columns and data fields (screenshot-5).
* Additional color settings have been provided on the admin settings screen, and the code to apply these settings has been re-factored to improve performance (screenshot-5).
* The new WordPress Color Selector has been added to the admin settings screen.
* Additional CSS tags have been added to the display code to allow any team's rosters to be uniquely styled via the plugin's stylesheet. This functionality supports websites with multiple teams (leagues or clubs) with multiple colors, as shown on the [Shoal Summit Solutions Plugin Development Site](http://shoalsummitsolutions.com/dev/test-roster-plugin/). 
* The player name format can now be controlled on the admin setting screen. Several formats are available, perhaps most importantly a first name only format is now available to address privacy concerns with young players (screenshot-5).
* While the six built-in roster formats remain (high-school, college, pro, baseball-high-school, baseball-college, and baseball-pro), roster and player displays are now highly configurable. Between the admin display settings and the plugin's stylesheet, you can take (almost) complete control of your roster displays.
* The plugin is internationalized and ready for translation. The current translations in the /lang directory now require updating, especially for the extensive additions to the admin screens. I am happy to help translators.

Complete documentation on the following topics is available at the links below:

* [Add Edit Players](http://shoalsummitsolutions.com/tr-data-entry/)

* [Team Roster Shortcode](http://shoalsummitsolutions.com/tr-shortcode/)

* [Single Player Template (Individual Player Bios)](http://shoalsummitsolutions.com/tr-templates/)

* [Team Taxonomy Template (Player Gallery View)](http://shoalsummitsolutions.com/tr-templates/)

* [Display Settings](http://shoalsummitsolutions.com/tr-display-settings/)

* [Styling the Displays (with CSS stylesheet)](http://shoalsummitsolutions.com/tr-styling/)

* [Player Photos & Defaults](http://shoalsummitsolutions.com/tr-usage-notes/)

* [Uploading Rosters from CSV Files](http://shoalsummitsolutions.com/tr-loading-csv-files/)

* [Other Usage Notes](http://shoalsummitsolutions.com/tr-usage-notes/)

**NOTES:**
The Team Rosters plugin is the third in a set of plugins supporting a framework for sports team websites. Others include Game Locations, Game Schedules, and League Standings, all now available on [WordPress.org](http://wordpress.org/extend/plugins/). Coaching Staffs, Sponsors, Frequently Asked Questions, Users Guide, and more are planned for future development. If you are a developer and there is one you would really like to have, or if you would like to participate in the development of one, please contact me (mark@shoalsummitsolutions.com).

== Installation ==

Complete installation instructions are available on [shoalsummitsolutions.com](http://shoalsummitsolutions.com/tr-installation/).

**NOTES:**
 
* When upgrading the existing player data will not be deleted.
* Any changes to the plugin stylesheet (css/mstw-tr-style.css)*will* be overwritten, so if you have customized that file you will want to save it before upgrading.
* To support the (significant) refactoring of the code in version 3.0, some shortcode arguments and default Display Settings had to be changed. Therefore, it is possible that some customizations of existing Roster Tables via [shortcode arguments], default colors and other display settings, and so forth may have to be replaced. Existing arguments and parameters were preserved to the greatest extent possible, so mileage will vary depending on exactly what arguments and/or settings you were using. 

== Frequently Asked Questions ==

[Frequently Asked Questions are available here](http://shoalsummitsolutions.com/tr-installation/).

== Usage Notes ==
*I suggest that you use the test pages on [my plugin development site](http://shoalsummitsolutions.com/dev) as guides to compare what works and what doesn't.*

The [Other Usage Notes](http://shoalsummitsolutions.com/tr-usage-notes/) are available on shoalsummitsolutions.com.

== Screenshots ==

1. Edit All Players admin screen
2. Edit Single Player admin screen
3. Sample of a Roster Table [shortcode] display
4. Sample of Single Player (bio) page
5. Display Settings admin screen
6. Sample Player Gallery page
7. Teams (taxonomy) admin screen
8. CSV File Import Screen

== Changelog ==

= 3.0.1 =
* Tweaked two calls (one in mstw-team-rosters.php and one in includes/mstw-team-rosters-admin.php) to prevent WARNINGS. (Easily fixed by setting WP_DEBUG to false in wp-config.php.) 
* Restructured the include files (filenames and function calls) to prevent conflicts with other MSTW plugins.

= 3.0 =
* Added a filter by team to the "All Players" table on the admin screen (screenshot-1).
* Added ability to configure table columns and data fields to meet specific application requirements. Show/hide all columns (except Player Name) and change the header/label of all columns and data fields. 
* Provided additional color settings on the Display Settings admin screen, and refactored the code to improve performance.
* Added the new WordPress Color Selector to the Display Settings admin screen.
* Added more CSS tags the display code to allow any team's rosters to be uniquely styled via the plugin's stylesheet. 
* Added player name format control to the Display Settings admin screen. Several formats are available, perhaps most importantly a first name only format is now available to address privacy concerns with young players.

= 2.1 =
* Re-factored the featured image (thumbnail) activation code to avoid conflicts with another plugin. (Thanks, Razz.)
* In the process, modified the theme settings so that the player photo width and height settings would always be honored. The default remains 150x150px regardless of how the thumbnail sizes are set in the theme.
* Corrected another conflict with some themes due to my horrible choice of the function name - my_get_posts(). Shame on me ... it's now mstw_tr_get_posts(). Doh!

= 2.0.1 =
* One include file was omitted from the build. That file is only needed for the CSV import function, which won't run without it.

= 2.0 =
* Added the ability to import rosters from CSV files
* Actived the Featured Image metabox on the add/edit page for players (player custom post type). Standard WordPress "Featured Images" are used for the player photos in the single player and player gallery pages.
* Added admin setting to hide player weights
* Added the ability to set the player photo size on the plugin settings page.
* Added three new formats for baseball: baseball-high-school, baseball-college, baseball-pro
* Cleaned up misc error checking and file/function includes to prevent conflicts with other plugins.

= 1.1 =
* Added the "Player Gallery" view of a roster
* Added admin settings for the sort order to allow numerical rosters in both the table [shortcode] and the player gallery.
* Added admin settings to enable or disable links from both the table view [shortcode] and the player gallery to the single player pages.
* Added an admin setting to control the title of the "Player Bio" content box on the single player view. By default, it is "Player Bio".
* Added fields to the player post type so that no field serves different purposes in different views [high-school|college|pro]. Note that not every field is used in every views and many fields are used in multiple views. However, every field now has one and only one meaning.

= 1.0 =
* Initial release.

== Upgrade Notice ==

Significant new fuctionality has been added to version 3.0. Admins now have the ability to customize the visibility of and headings for data fields in roster tables, player bios, and player galleries. Admins can also control the display of roster tables in terms of colors and layout on a team-by-team basis in support of leagues and clubs. See the documentation [here](http://shoalsummitsolutions.com/tr-styling/] for more details.

* Upgrades of the Team Rosters plugin are designed to *NOT* impact any existing players, rosters, or settings. (But backup your DB before you upgrade, just in case. :) )
* Any changes to the plugin stylesheet (css/mstw-tr-style.css)*will* be overwritten, so if you have customized that file you will want to save it before upgrading.
* To support the (significant) refactoring of the code in version 3.0, some shortcode arguments and default Display Settings had to be changed. Therefore, it is possible that some customizations of existing Roster Tables via [shortcode arguments], default colors and other display settings, and so forth may have to be replaced. Existing arguments and parameters were preserved to the greatest extent possible, so mileage will vary depending on exactly what arguments and/or settings you were using. 

The current version of Team Rosters has been developed and tested on WordPress 3.5. If you use older version of WordPress, good luck! (FYI, version 1.0 was developed and tested on WP 3.4.2.) If you are using a newer version, please let me know how the plugin works, especially if you encounter problems.

