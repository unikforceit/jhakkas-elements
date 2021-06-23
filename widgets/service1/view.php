<?php

$settings = $this->get_settings();
$image_size = $settings['img_size'];
$img = jhakkas_image($settings['photo'], $image_size);
$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? ' <h3 class="service-title"><a '.$url.'>'.$title.'</a></h3>' : '<h3 class="service-title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? '<p class="service-text">'.$des.'</p>' : '';
$icon = $settings['icon'];
$btn = $settings['btn'];

 echo '<div class="service-layout1">
<div class="service-box">
   <div class="service-img">
    '.$img.'
    </div><span class="service-icon">';\Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);echo '</span>
    <div class="service-content">
      '.$title_link.'
       '.$des_out.'
   </div>
   <a '.$url.' class="service-btn">
    <span class="btn-text">'.$btn.'<span class="service-btn-bg"></span></span>
   </a>
</div>
</div>';