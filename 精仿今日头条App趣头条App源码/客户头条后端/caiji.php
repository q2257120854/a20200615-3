<?php
$host = 'http://192.168.1.105:8002/index.php/api';

//文章
$posts =  array("__all__","news_hot","news_society","news_entertainment","news_tech","news_finance","news_game","news_sports","news_car","news_world","news_health","news_house","news_politics","news_psychology","news_culture","news_military","news_law","news_fashion","news_story","news_media","news_astrology","news_edu","news_baby","news_regimen","news_pet","news_home","news_comic","news_geomantic","news_design","news_collect","news_travel","news_food","news_history","news_photography","news_local","news_essay","news_novel","news_agriculture","news_career","news","video_world","video_finance","video_life","video_game","video_sports","video_funny","video_edu","video_health","video_car","video_science","video_culture","video_digital","video_military","video_food","video_lottery","video_fashion","video_travel","video_psychology","video_career","video_comic","video_emotion","video_entertainment","video_pet","video_others","video_music","video_agriculture","video_baby","video_history","video_voice");
$key = array_rand($posts,1); 
file_get_contents($host.'/index/toutiao/type/'.$key);

//小视频
$svideo = array('hotsoon_video','ugc_video_beauty','ugc_video_casual','ugc_video_food','ugc_video_life');
$key = array_rand($svideo,1);
file_get_contents($host.'/caiji/svideo/category/'.$key);

//微头条
file_get_contents($host.'/index/weitoutiao/');

echo '采集成功';

?>

