<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/sp_jikei-hospitality/がルート
		$link_path = "/sp_jikei-hospitality2016/";
}
?>

<!--event_course_bridal_beauty-->
<section class="taiken">
    <h3 class="mb15"><span>体験入学へ行ってみよう！</span></h3>
    <ul class="Pickup">
      <li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-hairmake.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_bridal_hairmake.jpg" alt="ブライダルヘア＆メイク体験">
            <h3>ブライダルヘア＆メイク体験</h3>
            <p>
            ブライダルメイクに必要なことをメイクアップアーティストから学びます。<br>
            知識だけじゃなく本当に必要なのは…？
            </p>
        </a>
      </li>
    </ul> 
</section>
<!-- / event_course_bridal_beauty--> 