<?php

$settings = $this->get_settings();
$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? ' <h3 class="flip-box-title"><a '.$url.'>'.$title.'</a></h3>' : '<h3 class="flip-box-title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? '<p class="flip-box-text">'.$des.'</p>' : '';
$icon = $settings['icon'];
$btn = $settings['btn'];
$btn_out = $btn ? '<div class="flip-box-btn"> <a '.$url.'>'.$btn.'</a></div>' : '';

$title2 = $settings['title2'];
$title_link2 = $settings['url']['url'] ? ' <h3 class="flip-box-title"><a '.$url.'>'.$title2.'</a></h3>' : '<h3 class="flip-box-title">'.$title2.'</h3>';
$des2 = $settings['des2'];
$des_out2 = $des2 ? '<p class="flip-box-text">'.$des2.'</p>' : '';
$icon2 = $settings['icon2'];

echo '<div class="flipbox-layout1 ">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <div class="flip-box-icon">';
    \Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);
    echo '</div>
      '.$title_link.'
      '.$des_out.'
    </div>
    <div class="flip-box-back">
    
  <div class="flip-box-icon">';
    \Elementor\Icons_Manager::render_icon($icon2, ['aria-hidden' => 'true']);
    echo '</div>
      '.$title_link2.'
      '.$des_out2.'
      '.$btn_out.'
    </div>
  </div>
  </div>
</div>';