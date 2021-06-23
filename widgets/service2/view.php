<?php

$settings = $this->get_settings();
$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? ' <h3 class="service2-title"><a '.$url.'>'.$title.'</a></h3>' : '<h3 class="service2-title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? '<p class="service2-text">'.$des.'</p>' : '';
$icon = $settings['icon'];
$btn = $settings['btn'];
$btn_out = $btn ? '<div class="service2-btn"> <a '.$url.'>'.$btn.'</a></div>' : '';

echo '<div class="service-layout2">
<div class="service-box2">
<div class="service2-icon">';
\Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);
echo '</div>
'.$title_link.'
<div class="service2-content">
'.$des_out.'
'.$btn_out.'
</div>
</div>
</div>';