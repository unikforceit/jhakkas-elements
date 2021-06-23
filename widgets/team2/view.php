<?php

$settings = $this->get_settings();
$image_size = $settings['img_size'];
$img = jhakkas_image($settings['photo'], $image_size);

$url = jhakkas_link($settings['url']);
$title = $settings['title'];
$title_link = $settings['url']['url'] ? '<h3 class="team2-title"> <a '.$url.'> '.$title.' </a></h3>' : '<h3 class="team2-title">'.$title.'</h3>';
$des = $settings['des'];
$des_out = $des ? ' <div class="team2-position">'.$des.'</div>' : '';
$lists = $settings['lists'];
$icon2 = $settings['icon2'];

echo '<div class="team2-wrapper">
        <div class="team2-inner">
           <div class="team2-image"> 
             '.$img.'
           </div>
           <div class="team2-holder">
              <ul class="team2-social"> ';
                 foreach ($lists as $item) {
                    $link = jhakkas_link($item['link']);
                    $icon = $item['icon'];

                    if ($item['link']['url']) {

                        echo '<li><a class="jhakkas-team2-icons-' . $item['_id'] . '" ' . $link . '>';
                        \Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true']);
                        echo '</a></li>';

                    }
                    }
        echo' </ul>
                    <a href="#" class="member2-link">';
                        \Elementor\Icons_Manager::render_icon($icon2, ['aria-hidden' => 'true']);
                        echo '</a>
              '.$title_link.'
              '.$des_out.'
           </div>
        </div>
</div>';