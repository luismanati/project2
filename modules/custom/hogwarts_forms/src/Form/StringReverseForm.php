<?php

namespace Drupal\hogwarts_forms\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class StringReverseForm.
 */
class StringReverseForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'string_reverse_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['string_to_reverse'] = [
      '#type' => 'textfield',
      '#title' => $this->t('String to Reverse'),
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Reverse'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
   $messenger = \Drupal::messenger();
   $messenger->addMessage(strrev($form_state->getValue('string_to_reverse')));
  }
}
