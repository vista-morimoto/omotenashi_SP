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
<header>
  <div id="hd_inner">
    <h1 id="hd_logo"><a href="<?php print $link_path; ?>"><img src="<?php print $link_path; ?>common/img/logo.png" alt="滋慶（ジケイ）おもてなし＆ブライダル・観光専門学校学校法人コミュニケーションアート" style="width:100%;"></a></h1>
    
    <p id="hd_links"><a href="#modal" class="second open"><img src="<?php print $link_path; ?>common/img/header_menu.png" width="33" height="28"  alt="メニュー"></a></p>
    
    <!-- /hd_inner -->
    </div>
</header>


<div id="modal">
  <p class="Close"><a href="javascript:$.pageslide.close()">Close</a></p>
  <p class="textC"><img src="<?php print $link_path; ?>common/img/imgIcoFace.gif" width="154" height="15" alt="このアイコンははPCサイトへのリンクです"></p>
  <!--<h2>体験入学</h2>
  <nav>
    <ul>
      <li><a href="../event/trial">体験入学（オープンキャンパス）</a></li>
      <li><a href="../event/special">スペシャルイベント</a></li>
      <li><a href="../event/myschool">Myスクールプログラム</a></li>
      <li><a href="../event/bus">無料送迎バス</a></li>
      <li><a href="../event/explanation">学校説明会・相談会</a></li>
    </ul>
  </nav>-->
  <h2>学校紹介</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>school/index.php">学校紹介トップ</a></li>
        <li><a href="<?php print $link_path; ?>school/access.php">所在地・地図</a></li>
        <li><a href="<?php print $link_path; ?>school/equipment.php">設備・施設</a></li>
        <li><a href="<?php print $link_path; ?>school/faq.php">よくある質問</a></li>
        <li><a href="<?php print $link_path; ?>school/link.php">リンク集</a></li>
      <br>
    </ul>
  </nav>
  <h2>コース紹介</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>course/index.php">コース紹介トップ</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal.php">ブライダル総合コース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_planner.php">ブライダルプランナーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_beauty.php">ブライダルスタイリスト＆ビューティーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_flower.php">ブライダルフラワー＆コーディネートコース</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_management.php">ホテルコース</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_bridal.php">ホテル＆ブライダルコース</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">ホテル＆旅館リゾートコース</a></li>
        <li><a href="<?php print $link_path; ?>course/sommelier.php">レストラン＆バーテンダーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_abroad.php">ホテル留学コース</a></li>
        <li><a href="<?php print $link_path; ?>course/travel.php">トラベル総合コース</a></li>
        <li><a href="<?php print $link_path; ?>course/travel_management.php">トラベルカウンター＆プランナーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/tour_conductor.php">ツアーコンダクターコース</a></li>
        <li><a href="<?php print $link_path; ?>course/railroad.php">鉄道サービスコース</a></li>
        <li><a href="<?php print $link_path; ?>course/airline.php">エアライン総合コース</a></li>
        <li><a href="<?php print $link_path; ?>course/cabin_attendant.php">キャビンアテンダントコース</a></li>
        <li><a href="<?php print $link_path; ?>course/ground_staff.php">グランドスタッフコース</a></li>
        <li><a href="<?php print $link_path; ?>course/ceremony_director.php">葬祭ディレクターコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">セレモニー＆ブライダルコース</a></li>
	</ul>
  </nav>
  <h2>教育システム</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>education/index.php">教育システムトップ</a></li>
        <li><a href="<?php print $link_path; ?>education/s-curriculum.php">日本の伝統と文化</a></li>
        <li><a href="<?php print $link_path; ?>education/system.php">産学協同教育システム</a></li>
        <li><a href="<?php print $link_path; ?>education/w-curriculum.php">Wメジャーカリキュラム</a></li>
        <li><a href="<?php print $link_path; ?>education/overseas-training.php">国際教育システム</a></li>
        <li><a href="<?php print $link_path; ?>education/qualification.php">関連資格・検定一覧</a></li>
    </ul>
  </nav>
  <h2>就職・資格</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>job/index.php">就職サポートトップ</a></li>
        <li><a href="<?php print $link_path; ?>job/career.php">キャリアセンター</a></li>
        <li><a href="<?php print $link_path; ?>job/internship.php">インターンシップ</a></li>
        <li><a href="<?php print $link_path; ?>job/explanation.php">合同企業説明会</a></li>
        <li><a href="<?php print $link_path; ?>job/support.php">卒業後サポート</a></li>
        <li><a href="<?php print $link_path; ?>job/actualresults.php">就職実績</a></li>
    </ul>
  </nav>
  <h2>学園生活サポート</h2>
  <nav>
    <ul>
      <li><a href="<?php print $link_path; ?>schoollife/">学園生活サポートトップ</a></li>
      <li><a href="<?php print $link_path; ?>schoollife/campusmap.php">キャンパス周辺MAP</a></li>
    </ul>
  </nav>
  <h2>入学案内</h2>
  <nav>
    <ul>
      <li><a href="<?php print $link_path; ?>invitation/">入学資格・選考方法</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/entry.php">出願について</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/ao.php">AO入学について</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/flow.php">出願から合格までの流れ</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/scholarship.php">学費サポート</a></li>
    </ul>
  </nav>
  <h2>訪問者別ガイド</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>target/">入学をお考えの方へ</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/parent.php">保護者の方へ</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/society.php">大学生・社会人・フリーターの方へ</a></li>
        <!--<li><a href="">留学生の方へ</a></li>-->
        <li><a href="http://www.jikei-hospitality.ac.jp/target/company.php">企業の方へ</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/teacher.php">高等学校の先生方へ</a></li>
    </ul>
  </nav>
  <p class="Close"><a href="javascript:$.pageslide.close()">Close</a></p>
</div>
<script type="text/javascript" src="<?php print $link_path; ?>common/js/jquery.pageslide.min.js"></script> 
<script>
	$(".first").pageslide();
	$(".second").pageslide({direction: "left", modal: true});
</script>