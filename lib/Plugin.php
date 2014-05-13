<?php

/**
 * Wordpres SEO by Yoast Integration
 */

class PromotionsSEO_Plugin extends Promotions_Plugin_Base
{
  
  protected $tab_key  = 'seo';
  protected $tab_text = 'SEO';
  
  /**
   * @wp.filter       promotions/tabs/promotion/register
   * @wp.priority     50
   */
  public function register_tab( $tabs )
  {
    if( defined('WPSEO_VERSION') ){
      $tabs[$this->tab_key] = $this->tab_text;
    }
    return $tabs;
  }
  
  /**
   * @wp.action       add_meta_boxes
   * @wp.priority     1000
   */
  public function remove_seo( $post_type, $post )
  {
    $tabs = Promotions_UI_Tabs::get_instance( 'promotion' );
    
    if( $post_type == 'promotion' && $tabs->get_current_tab() != $this->tab_key ){
      remove_meta_box('wpseo_meta', 'promotion', 'normal');
    }
  }
}