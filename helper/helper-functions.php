<?php
function jhakkas_image($source, $img_size){
    if ($source){
        return wp_get_attachment_image($source['id'], $img_size);
    }
}
function jhakkas_image_sizes() {
    $image_sizes = get_intermediate_image_sizes();

    $addsizes = array(
        "full" => 'Full size'
    );
    $newsizes = array_merge($image_sizes, $addsizes);

    return array_combine($newsizes, $newsizes);
}


function jhakkas_link($link){

    $url = $link['url'] ? 'href='.esc_url($link['url']). '' : '';
    $ext = $link['is_external'] ? 'target= _blank' : '';
    $link = $url.' '.$ext;
    return $link;
}