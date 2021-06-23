<?php

$settings = $this->get_settings();
$image_size = $settings['img_size'];
$img = jhakkas_image($settings['photo'], $image_size);
$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? ' <h3 class="portfolio1-title"><a '.$url.'>'.$title.'</a></h3>' : '<h3 class="portfolio1-title">'.$title.'</h3>';
$btn = $settings['btn'];
$btn_out = $btn ? '<div class="portfolio1-btn"> <a '.$url.'>'.$btn.'</a></div>' : '';

echo '<div class="portfolio-layout1">
         <div class="portfolio1-image"> 
            <a '.$url.'>'.$img.'</a>
          </div>
        <div class="portfolio-box3">
        '.$title_link.'
        <div class="portfolio1-content">
        '.$btn_out.'
        </div>
        </div>
    </div>';