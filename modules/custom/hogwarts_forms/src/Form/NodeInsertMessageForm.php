<?php

namespace Drupal\hogwarts_forms\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class NodeInsertMessageForm.
 */
class NodeInsertMessageForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'hogwarts_forms.nodeinsertmessage',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'node_insert_message_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('hogwarts_forms.nodeinsertmessage');

    $form['node_insert_message'] = array(
      '#type' => 'textfield',
      '#title' => $this->t("Node Insert Message"),
      '#default_value' => $config->get('nodeinsertmessage'),
    );
    
    return parent::buildForm($form, $form_state);
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

    $this->config('hogwarts_forms.nodeinsertmessage')
    ->set('nodeinsertmessage', $form_state->getValue('node_insert_message'))
    ->save();

    parent::submitForm($form, $form_state);
  }
}
