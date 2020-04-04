<?php


namespace Drupal\simple_affiliate\Plugin\Block;


use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides automatically generated affiliate link with user id.
 *
 * @Block(
 *   id = "simple_affiliate_referral_link",
 *   admin_label = @Translation("Simple Affiliate Referral Link Block"),
 * )
 */
class AffiliateLinkBlock extends BlockBase {

  /**
   * @inheritDoc
   */
  public function build() {

    // Getting the current used id.
    $user_id = \Drupal::currentUser()->id();

    // Generating the link from the route.
    $link = Url::fromRoute('simple_affiliate.settracking');
    $link = $link->toString();
    $host = \Drupal::request()->getSchemeAndHttpHost();
    return [
      '#markup' => $host . $link . '/' . $user_id,
      '#prefix' => '<blockquote>',
      '#suffix' => '</blockquote>',
    ];
  }

}
