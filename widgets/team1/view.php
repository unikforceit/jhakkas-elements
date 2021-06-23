<?php

$settings = $this->get_settings();
$image_size = $settings['img_size'];
$img = jhakkas_image($settings['photo'], $image_size);

$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? '<h3 class="item--title"> <a '.$url.'> '.$title.' </a></h3>' : '<h3 class="item--title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? ' <div class="item--position">'.$des.'</div>' : '';
$lists = $settings['lists'];

echo '<div class="team1-wrapper">
        <div class="item--inner">
           <div class="item--image"> 
             '.$img.'
           </div>
           <div class="item--holder">
              <div class="item--social"> ';
                 foreach ($lists as $item) {
                    $link = jhakkas_link($item['link']);
                    $icon = $item['icon'];
                    $color = $item['icon_color'];
                    $bg = $item['icon_bg'];

                    if ($item['link']['url']) {

                        echo '<a style="color:' . $color . '; background-color: ' . $bg . '" class="jhakkas-team-icons-' . $item['_id'] . '" ' . $link . '>';
                        \Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);
                        echo '</a>';

                    }

                    }
        echo' </div>
              '.$title_link.'
              '.$des_out.'
           </div>
        </div>
</div>';