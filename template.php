<?php

// The QuickSites layout (can be overridden by dependant themes)
$GLOBALS['quickSites_layout'] = 'b';

// These content types will not display a title in inner.tpl.php
$GLOBALS['no_title_node_types'] = array("qs_events", "qs_people", "event");

function asc_qs_preprocess_page(&$vars, $hook) {
  $vars['head'] .= '<link '. drupal_attributes(array(
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => 'http://www.osu.edu/assets/fonts/webfonts.css')
  ) ." />\n";
}

?>
