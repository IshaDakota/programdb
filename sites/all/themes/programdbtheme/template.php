<?php
// programdbtheme by Adaptivethemes.com, a starter sub-sub-theme.

/**
 * Rename each function and instance of "programdbtheme" to match
 * your subthemes name, e.g. if you name your theme "programdbtheme" then the function
 * name will be "programdbtheme_preprocess_hook". Tip - you can search/replace
 * on "programdbtheme".
 */

/**
 * Override or insert variables into the html templates.
 * Replace 'programdbtheme' with your themes name, i.e. mytheme_preprocess_html()
 */
function programdbtheme_preprocess_html(&$vars) {

  // Load the media queries styles
  // If you change the names of these files they must match here - these files are
  // in the /css/ directory of your subtheme - the names must be identical!
  $media_queries_css = array(
    'programdbtheme.responsive.style.css',
    'programdbtheme.responsive.gpanels.css'
  );
  load_subtheme_media_queries($media_queries_css, 'programdbtheme'); // Replace 'programdbtheme' with your themes name

 /**
  * Load IE specific stylesheets
  * AT automates adding IE stylesheets, simply add to the array using
  * the conditional comment as the key and the stylesheet name as the value.
  *
  * See our online help: http://adaptivethemes.com/documentation/working-with-internet-explorer
  *
  * For example to add a stylesheet for IE8 only use:
  *
  *  'IE 8' => 'ie-8.css',
  *
  * Your IE CSS file must be in the /css/ directory in your subtheme.
  */
  /* -- Delete this line to add a conditional stylesheet for IE 7 or less.
  $ie_files = array(
    'lte IE 7' => 'ie-lte-7.css',
  );
  load_subtheme_ie_styles($ie_files, 'programdbtheme'); // Replace 'programdbtheme' with your themes name
  // */

}
