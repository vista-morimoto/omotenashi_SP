<?php

//滋慶おもてなし＆ブライダル・観光専門学校 @jikei_omotenashi
//User ID: 1670802229

//POSTリクエストの場合のみ受付
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
    $access_token = "1670802229.3806cf6.56449d06637246a988a009dde7828fee";
	//ユーザーID
	$user_id ="1670802229";
   //表示件数
	$count ="9";

    //JSONデータを取得して出力
    //echo @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}");
    echo @file_get_contents("https://api.instagram.com/v1/users/{$user_id}/media/recent/?access_token={$access_token}&count={$count}");
    //終了
    exit;
}
?>
