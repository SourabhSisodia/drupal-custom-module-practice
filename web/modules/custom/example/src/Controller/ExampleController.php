<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase
{

  /**
   * Returns a render-able array for a test page.
   */
  public function content()
  {
    $myText = 'This is not just a default text!';
    $myNumber = 1;
    $myArray = [1, 2, 3];


    return [
      // Your theme hook name.
      '#theme' => 'example_theme_hook',
      // Your variables.
      '#variable1' => $myText,
      '#variable2' => $myNumber,
      '#variable3' => $myArray,
    ];
  }
}
