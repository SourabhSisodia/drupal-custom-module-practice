<?php

/**
 * @file
 * Generate markup to be displayed.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the hello page.
 */
class HelloController extends ControllerBase
{

  /**
   * Display the hello page.
   *
   * @param string $name
   *   The name to be displayed in the greeting.
   *
   * @return array
   *   A render array containing the greeting message.
   */
  public function helloPage($name)
  {
    return [
      '#markup' => $this->t('Hello @name', ['@name' => $name]),
    ];
  }
}
