<?php
/**
 * @file
 * dp_image_optimization.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function dp_image_optimization_image_default_styles() {
  $styles = array();

  // Exported image style: catalog_images.
  $styles['catalog_images'] = array(
    'label' => 'Catalog Images',
    'effects' => array(
      2 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 600,
          'height' => 600,
        ),
        'weight' => 2,
      ),
    ),
  );

  return $styles;
}
