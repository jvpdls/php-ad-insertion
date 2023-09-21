<?php
// Verifica o user agent para determinar o tipo de dispositivo
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Verifica se o user agent indica que é um dispositivo móvel
$is_mobile = (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false);

if ($is_mobile) {
    // Se for um dispositivo móvel, mostra o banner para celular
    $link = "";
    $img_src = "";
    $img_alt = "";
    $img_width = 0;
    $img_height = 0;
} else {
    // Caso contrário, mostra o banner para tablet/desktop
    $link = "";
    $img_src = "";
    $img_alt = "";
    $img_width = 0;
    $img_height = 0;
}
?>

<a href="<?php echo $link; ?>" target="_blank" rel="sponsored">
    <img src="<?php echo $img_src; ?>" width="<?php echo $img_width; ?>" height="<?php echo $img_height; ?>" alt="<?php echo $img_alt; ?>"/>
</a>
