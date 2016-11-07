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

    <div id="overseaArea">
        <h3><span>海外留学制度 夢への3STEP</span></h3>
		<dl>
          <dt><span>1</span>年次</dt>
	      <dd>
            <img src="<?php print $link_path; ?>images/course_2015/oversea/overseas_year1.jpg" alt="1年次" style="width:100%;" />
            <ul>
	   	      <li>セルフスタイリング講座</li>
	   	      <li>英語教育</li>
	   	      <li>日本伝統文化特別講義</li>
	   	      <li>Wメジャーカリキュラム</li>
	   	      <li>ホスピタイティコミュニケーション</li>
            </ul>
          </dd>
          <dt class="clearfix">
	      <img src="<?php print $link_path; ?>images/course_2015/oversea/overseas_year2_bg.jpg" alt="クイーンズランド大学" class="Fright"><span>2</span>年次<br>
海外教育提携校にて業界で必要な英会話力を約6カ月間オーストラリアで学びます</dt>
          <dd><p><span class="pink bold">クイーンズランド大学（THE UNIVERSITY OF QUEENSLAND）</span><br>
          オーストラリア第3の都市、ブリスベンにあるクイーンズランド大学はオーストラリアで最も評価の高い大学の一つ。</p>
          <ul>
            <li>一般英語授業（レベル別、多国籍学生と同クラスでの授業）</li>
            <li>上記英語授業の機関において食品サービスやバリスタ技術などの練習に加え、エコリゾート、大型ホテル、アトラクション施設などを見学したりスピーカーを招いて講義を聴くなど知識を深めるプログラム</li>
          </ul>
          
          <img src="<?php print $link_path; ?>images/course_2015/oversea/overseas_yer2.jpg" alt="2年次" style="width:100%;" /><br>
          <span class="small">※クイーンズランド大学は、滋慶学園グループの教育提携校です。留学受入先は変更になる場合もあります。</span></dd>          
          <dt class="clearfix"><img src="<?php print $link_path; ?>images/course_2015/oversea/overseas_yer3.jpg" alt="3年次" class="Fright"><span>3</span>年次<br>インターンシップ<br>企業プロジェクト</dt>
	      <dd>
          <ul>
            <li>キャリアセンターによる就職対策講座</li>
            <li>業界特別講義</li>
            <li>卒業進級制作</li>
          </ul>
          </dd>
          <dt><span class="fontLL">卒業</span></dt>
	      <dd><p>ホスピタリティ業界への就職</p></dd>
        </dl>
    </div>