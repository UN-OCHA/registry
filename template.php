<?php
/**
 * @file
 * Theme functions
 */

require_once dirname(__FILE__) . '/includes/structure.inc';
require_once dirname(__FILE__) . '/includes/comment.inc';
require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/menu.inc';
require_once dirname(__FILE__) . '/includes/node.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';
require_once dirname(__FILE__) . '/includes/user.inc';
require_once dirname(__FILE__) . '/includes/view.inc';

/**
 * Implements hook_css_alter().
 */
function registry_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

/**
 * Implements template_preprocess_page().
 */
function registry_preprocess_page(&$variables) {
  global $theme_path;
  $tree = menu_tree_page_data('main-menu', 1);
  $main_menu_dropdown = menu_tree_output($tree);
  $main_menu_dropdown['#theme_wrappers'] = array();
  $variables['main_menu_dropdown'] = $main_menu_dropdown;
  $variables['hr_tabs'] = array();
  $header_img_path = $theme_path . '/assets/images/headers/general.png';
  if (module_exists('og_context')) {
    $gid = og_context_determine_context('node');
    if (!empty($gid)) {
      $og_group = entity_load('node', array($gid));
      $og_group = $og_group[$gid];
      if ($og_group->type == 'hr_operation') {
        // Salahumanitaria logo.
        if ($og_group->nid == 77) {
          // Nid of the Colombia operation.
          $variables['logo'] = '/sites/all/themes/registry/assets/images/salahumanitaria_logo.png';
        }
        if (!empty($og_group->field_operation_type) && !empty($og_group->field_operation_region) && $og_group->field_operation_type[LANGUAGE_NONE][0]['value'] == 'country') {
          // Determine the region of the operation.
          $region_id = $og_group->field_operation_region[LANGUAGE_NONE][0]['target_id'];
          $region = entity_load_single('node', $region_id);
          $region_uri = entity_uri('node', $region);
          $region_status = $region->field_operation_status[LANGUAGE_NONE][0]['value'];
          switch ($region_status) {
            case 'active':
              // Add the region to the tabs.
              $variables['hr_tabs'][] = l($region->title, $region_uri['path'], $region_uri['options']);
              break;

            case 'inactive':
              break;

            case 'archived':
              break;
          }
        }
      }
      elseif ($og_group->type == 'hr_disaster') {
        $glide = $og_group->field_glide_number[LANGUAGE_NONE][0]['value'];
        if ($glide == 'EP-2014-000041-GIN') {
          $variables['logo'] = '/sites/all/themes/registry/assets/images/unmeer_logo.png';
        }
      }
      elseif ($og_group->type == 'hr_bundle') {
        // Get operation from bundle.
        $op_gid = _hr_bundles_get_operation($og_group->nid);
        if (!empty($op_gid)) {
          $operation = entity_load_single('node', $op_gid);
          $op_uri = entity_uri('node', $operation);
          $variables['hr_tabs'][] = l($operation->title, $op_uri['path'], $op_uri['options']);
        }
      }
      $uri = entity_uri('node', $og_group);
      if ($og_group->status) {
        // Group is published.
        $variables['hr_tabs'][] = l($og_group->title, $uri['path'], $uri['options']);
      }
      else {
        $variables['hr_tabs'][] = '<a href="#">' . $og_group->title . '</a>';
      }
      $group_img_path = '/assets/images/headers/' . $og_group->type . '/' . strtolower(str_replace(array(' ', '/'), '-', $og_group->title)) . '.png';
      if (file_exists(dirname(__FILE__) . $group_img_path)) {
        $header_img_path = $theme_path . $group_img_path;
      }
    }
  }

  $variables['og_group_header_image'] = theme('image', array(
    'path' => $header_img_path,
    'alt' => 'Header image',
  ));

  if (user_is_anonymous()) {
    $variables['follow_us_link_href'] = 'connect/oauthconnector_hid_oauth';
    $variables['follow_us_link_title'] = t('Login to follow us');
    $variables['follow_us_link_status'] = 'flag';
  }
  $variables['hr_favorite_spaces'] = _registry_block_render('hr_bookmarks', 'hr_favorite_spaces');
}

/**
 * Custom function to render a block.
 */
function _registry_block_render($module, $block_id) {
  $block = block_load($module, $block_id);
  $block_content = _block_render_blocks(array($block));
  $build = _block_get_renderable_array($block_content);
  $block_rendered = drupal_render($build);
  return $block_rendered;
}

/**
 * Implements hook_preprocess_fieldable_panels_pane().
 *
 * Fixes title appearing 2 times in fieldable panels panes.
 */
function registry_preprocess_fieldable_panels_pane(&$variables) {
  if (isset($variables['content']['title'])) {
    unset($variables['content']['title']);
  }
}

/**
 * Implements theme_preprocess_html().
 */
function registry_preprocess_html(&$vars) {
  $apple = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/apple-touch-icon.png',
      'rel' => 'apple-touch-icon',
      'sizes' => '180x180',
    ),
  );
  drupal_add_html_head($apple, 'apple-touch-icon');

  $fav_32 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/favicon-32x32.png',
      'rel' => 'icon',
      'sizes' => '32x32',
      'type' => 'image/png',
    ),
  );
  drupal_add_html_head($fav_32, 'favicon-32x32');

  $fav_16 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/favicon-16x16.png',
      'rel' => 'icon',
      'sizes' => '16x16',
      'type' => 'image/png',
    ),
  );
  drupal_add_html_head($fav_16, 'favicon-16x16');

  $manifest = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/manifest.json',
      'rel' => 'manifest',
    ),
  );
  drupal_add_html_head($manifest, 'manifest');

  $safari_pinned_tab = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/safari-pinned-tab.svg',
      'rel' => 'mask-icon',
      'color' => '#5bbad5',
    ),
  );
  drupal_add_html_head($safari_pinned_tab, 'safari_pinned_tab');
}
