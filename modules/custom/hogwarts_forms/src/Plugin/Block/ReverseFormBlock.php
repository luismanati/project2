<?php

namespace Drupal\hogwarts_forms\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilder;
use Drupal\hogwarts_forms\Form\StringReverseForm;
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
    
    $form = \Drupal::formBuilder()->getForm('\Drupal\hogwarts_forms\Form\StringReverseForm');
    $build['reverse_form_block']['form'] = $form;
    
    return $build;
  }

}
