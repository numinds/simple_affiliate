<?php

namespace Drupal\simple_affiliate\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SetTracking.
 *
 * @package Drupal\simple_affiliate\Controller
 */
class SetTracking extends ControllerBase {

  /**
   * Setting the tracking cookie.
   */
  public function setaffilliatetrackingcookie($uid) {
    // Add affiliate cookie with 6 month expiration.
    if (!isset($_COOKIE["simple_affiliate"])) {
      setcookie("simple_affiliate", $uid, time() + 60 * 60 * 24 * 180, "/");
    }
    return $this->redirect('<front>');

  }

}
