<?php


// Include extra scripts
$scripts = '
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/jquery.ui.touch-punch.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/unslider-min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/script.js"></script>
  <script src="https://use.fontawesome.com/e9bea6b0dc.js"></script>
';

$extra_scripts = array(
  '#type' => 'markup',
  '#markup' => $scripts,
  '#weight' => '3',
);
drupal_add_html_head($extra_scripts, 'extra_scripts');

/**
 * Override or insert variables into the page template.
 */
// Let's us get node fields in page.tpl.php
function nymta_preprocess_page(&$variables) {
  if (arg(0) == 'node') {
    $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][arg(1)];
  }
  
   if (isset($variables['node'])) {
    // Is the image field uri set?
    if (isset($variables['node']->field_banner_image['und'][0]['uri'])) {
      // Populate a variable we can print in the page template.
      $variables['field_banner_image'] = file_create_url($variables['node']->field_banner_image['und'][0]['uri']);
    }
  }
}
