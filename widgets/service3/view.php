<?php

$settings = $this->get_settings();
$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? ' <h3 class="service3-title"><a '.$url.'>'.$title.'</a></h3>' : '<h3 class="service3-title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? '<p class="service3-text">'.$des.'</p>' : '';
$icon = $settings['icon'];
$btn = $settings['btn'];
$btn_out = $btn ? '<div class="service3-btn"> <a '.$url.'>'.$btn.'</a></div>' : '';

echo '<div class="service-layout3">
<div class="service-box3">
<div class="service3-icon">';
\Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);
echo '</div>
'.$title_link.'
<div class="service3-content">
'.$des_out.'
'.$btn_out.'
</div>
</div>
</div>';