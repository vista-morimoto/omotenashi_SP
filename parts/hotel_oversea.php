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
        <h3><span>海外留学制度 夢への3STEP<br>
業界で必要な英語力と海外で実践力を身につけるための3年制</span></h3>
		<dl>
          <dt><span>1</span>年次<br>英語教育<br>日本伝統文化特別講義</dt>
	      <dd>
            <img src="<?php print $link_path; ?>images/course/oversea/overseas_year1.jpg" alt="" style="width:100%;" />
            <ul>
              <li>留学に向けての英語力アップ授業「留学・サービス英会話」</li>
              <li>ＴＯＥＩＣ&reg;</li>
              <li>ホテルで使用する宿泊・料飲の専門英語</li>
              <li>日常会話・ビジネス会話を学ぶ英会話</li>
              <li>ホテル基礎</li>
              <li>サービス接遇</li>
              <li>料飲・レストラン</li>
              <li>オペレーション</li>
              <li>ホテルビジネス実務検定対策</li>
            </ul>
          </dd>
          <dt class="clearfix">
	      <img src="<?php print $link_path; ?>images/course/oversea/overseas_year2_bg.jpg" alt="" class="Fright"><span>2</span>年次<br>
海外教育提携校にて業界で必要な英語力を学びインターンシップを通して、約６カ月間海外での経験を積みます。</dt>
          <dd><p><span class="pink bold">クイーンズランド大学（THE UNIVERSITY OF QUEENSLAND）</span><br>
          オーストラリア第3の都市、ブリスベンにあるクイーンズランド大学はオーストラリアで最も評価の高い大学の一つ。</p>
          <ul>
            <li>英語授業（レベル別、多国籍学生と同クラスでの授業）</li>
            <li>レベルに応じてホスピタリティ業界の専門英語を学びます。</li>
            <li>海外での業界インターンシップ</li>
          </ul>
          
          <img src="<?php print $link_path; ?>images/course/oversea/overseas_yer2.jpg" alt="" style="width:100%;" /><br>
          <span class="small">※クイーンズランド大学は、滋慶学園グループの教育提携校です。留学受入先は変更になる場合もあります。</span></dd>          
          <dt class="clearfix"><img src="<?php print $link_path; ?>images/course/oversea/overseas_yer3.jpg" alt="" class="Fright"><span>3</span>年次<br>インターンシップ<br>企業プロジェクト</dt>
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