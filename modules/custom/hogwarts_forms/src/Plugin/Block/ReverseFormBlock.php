<?php

namespace Drupal\hogwarts_forms\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ReverseFormBlock' block.
 *
 * @Block(
 *  id = "reverse_form_block",
 *  admin_label = @Translation("Reverse form block"),
 * )
 */
class ReverseFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['reverse_form_block']['#markup'] = 'Implement ReverseFormBlock.';

    return $build;
  }

}
