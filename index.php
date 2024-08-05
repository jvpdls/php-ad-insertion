<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_mobile = (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false);

if ($is_mobile) {
    $link = "";
    $img_src = "";
    $img_alt = "";
    $img_width = 0;
    $img_height = 0;
} else {
    $link = "";
    $img_src = "";
    $img_alt = "";
    $img_width = 0;
    $img_height = 0;
}

?>

<a href="<?php echo $link; ?>" target="_blank" rel="sponsored">
    <img src="<?php echo $img_src; ?>" width="<?php echo $img_width; ?>" height="<?php echo $img_height; ?>" alt="<?php echo $img_alt; ?>" />
</a>