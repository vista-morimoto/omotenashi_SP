<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/check/がルート
		$link_path = "/sp_jikei-hospitality2016/";
}
?>


<p class="pageTop"><a href="#wrapper">ページトップへ</a></p>

<p class="textR small">※学園グループの実績をベースに掲載しています。<br />実施予定も含みます。</p>

<nav id="footNav">
    <ul class="clearfix">
        <li><a href="http://www.jikei-hospitality.ac.jp/event/"><img src="<?php print $link_path; ?>common/img/btnFootEvent.png" alt="お仕事体験（オープンキャンパス）" width="306" height="63"></a></li>
        <li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>common/img/btnFootSiryo.png" alt="資料請求" width="306" height="60"></a></li>
        
        <!--<li><a href="http://twitter.com/oca_eco" target="_blank"><img src="<?php print $link_path; ?>common/img/btnTwitter.gif" alt="Twitter" width="150" height="60"></a></li>
        <li><a href="http://www.facebook.com/since1994ocaeco" target="_blank"><img src="<?php print $link_path; ?>common/img/btnFacebook.gif" alt="Facebook" width="150" height="60"></a></li>-->
        
        <li><a href="https://twitter.com/jikeiomotenashi" target="_blank"><img src="<?php print $link_path; ?>common/img/btnTwitter.png" alt="Twitter" width="98" height="79"></a></li>
        <li><a href="https://www.facebook.com/jikeiomotenashi" target="_blank"><img src="<?php print $link_path; ?>common/img/btnFacebook.png" alt="Facebook" width="98" height="79"></a></li>
        <li><a href="http://line.naver.jp/ti/p/@jikei-omotenashi" target="_blank"><img src="<?php print $link_path; ?>common/img/btnLine.png" alt="LINE" width="98" height="79"></a></li>
        <li><a href="https://www.youtube.com/user/jikeihospitality" target="_blank"><img src="<?php print $link_path; ?>common/img/btnYouTube.png" alt="YouTube" width="98" height="79"></a></li>
        <!--<li><a href="https://vine.co/u/1171058184203714560" target="_blank"><img src="<?php print $link_path; ?>common/img/btnVine.png" alt="Vine" width="98" height="79"></a></li>-->
        <li><a href="https://instagram.com/jikei_omotenashi/" target="_blank"><img src="<?php print $link_path; ?>common/img/btnInstagram.png" alt="Instagram" width="98" height="79"></a></li>

    </ul>
</nav>

<div id="targetCat">
    <dl class="accordion">
        <dt>訪問者別ガイド</dt>
        <dd>
            <ul>
                <li><a href="<?php print $link_path; ?>target/">入学をお考えの方へ</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/parent.php">保護者の方へ</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/society.php">大学生・社会人・フリーターの方へ</a></li>
                <!--<li><a href="">留学生の方へ</a></li>-->
                <li><a href="http://www.jikei-hospitality.ac.jp/target/company.php">企業の方へ</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/teacher.php">高等学校の先生方へ</a></li>
            </ul>
        </dd>
    </dl>
<!-- .target // -->
</div>

<!--検索-->
<div id="CustomSearch">
<script>
  (function() {
    var cx = '004617936611482068935:wspvd21i-44';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
</div>
<p class="gray"><small>※検索結果にはPCサイトも含みます</small></p>
<!-- // 検索-->

<footer>
  <ul id="device">
    <li><a href="http://www.jikei-hospitality.ac.jp">PCサイト</a></li>
    <li>スマートフォン</li>
  </ul>
  <div id="contact">
    <ul>
      <li><a href="tel:0120-947-718" onclick="ga('send', 'event', '電話リンク', 'タップ');">0120-947-718</a></li>
      <li><a href="mailto:info@jikei-hospitality.ac.jp" style="line-height:1;">info@<br />jikei-hospitality.ac.jp</a></li>
    </ul>
  </div>
  <address>
  学校法人コミュニケーションアート<br>
  滋慶おもてなし＆ブライダル・観光専門学校<br>
  〒550-0014 大阪市西区北堀江2-4-6
  </address>
  <small>&copy; JIKEI School of HOSPITALITY. All Rights Reserved.</small>
  <p><a href="http://www.jikei-hospitality.ac.jp/privacy/">プライバシーポリシー</a></p>
  <p><a href="http://www.jikei-hospitality.ac.jp/socialpolicy/">ソーシャルメディアポリシー</a></p>
</footer>

<nav id="footerFixNav">
<ul>
<li><a href="<?php print $link_path; ?>"><img src="<?php print $link_path; ?>common/img/fnav_home.png" alt="HOME" width="69" height="14"></a></li>
<li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>common/img/fnav_siryo.png" alt="資料請求" width="71" height="14"></a></li>
<li><a href="http://www.jikei-hospitality.ac.jp/event/"><img src="<?php print $link_path; ?>common/img/fnav_taiken.png" alt="体験入学" width="71" height="14"></a></li>
<li><a href="<?php print $link_path; ?>school/access.php"><img src="<?php print $link_path; ?>common/img/fnav_access.png" alt="アクセス" width="71" height="14"></a></li>
</ul>
</nav>