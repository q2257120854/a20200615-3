<?php
function tcn($longurl) {
    $url = 'http://49.235.156.66/t.cn.php?url=' . urlencode($longurl);
    $result = curl_get($url);
    $data = get_curl($url, $result);
    if (!$result) {
        return '瓦特了';
    } else {
        return ($result);
    }
}
function urlcn($longurl) {
    $url = 'http://49.235.156.66/url.cn.php?url=' . urlencode($longurl);
    $result = curl_get($url);
    $data = get_curl($url, $result);
    if (!$result) {
        return '瓦特了';
    } else {
        return ($result);
    }
}
function suoim($longurl) {
    $url = 'http://49.235.156.66/suo.im.php?url=' . urlencode($longurl);
    $result = curl_get($url);
    $data = get_curl($url, $result);
    if (!$result) {
        return '瓦特了';
    } else {
        return ($result);
    }
}

function mrwso($longurl) {
    $url = 'http://49.235.156.66/mrw.so.php?url=' . urlencode($longurl);
    $result = curl_get($url);
    $data = get_curl($url, $result);
    if (!$result) {
        return '瓦特了';
    } else {
        return ($result);
    }
}
function dwzcn($longurl) {
    $url = 'http://49.235.156.66/dwz.cn.php?url=' . urlencode($longurl);
    $result = curl_get($url);
    $data = get_curl($url, $result);
    if (!$result) {
        return '瓦特了';
    } else {
        return ($result);
    }
}
?>