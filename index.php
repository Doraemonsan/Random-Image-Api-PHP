<?php /*PHP判断是否是移动端*/
redirect();

function redirect() {

if ( empty($_SERVER['HTTP_USER_AGENT']) )
{
    $img=glob('img/*mpic/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
    header("Content-Type: image/webp");
    echo(file_get_contents($img[array_rand($img)]));
}
elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false )
{
    $img=glob('img/*mpic/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
    header("Content-Type:image/webp");
    echo(file_get_contents($img[array_rand($img)]));
}
else
{
    $img=glob('img/*ppic/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
    header("Content-Type:image/webp");
    echo(file_get_contents($img[array_rand($img)]));
}

}
?>