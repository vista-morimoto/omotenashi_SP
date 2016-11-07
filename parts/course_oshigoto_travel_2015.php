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
<!--voiceArea-->
<div id="voiceArea">
<h3>Student’s Voice</h3>
    <section>
        <div>
        <img src="<?php print $link_path; ?>images/course2015/voice_travel.png" alt="今本さん" />
        <dl>
            <dt>第一線で活躍している先生から直接教えてもらえる！</dt>
            <dd class="voiceName"><small>[姉妹校福岡HB]</small>ホテル＆旅行科 トラベルマネジメントコース<br>今本さん</dd>
            <dd>私は空港のカウンタースタッフになりたくて、旅行・航空業界で必要な資格取得の為、日々勉学に励んでいます。今はAXESS検定２級合格に向けて頑張っていますが、少人数で教えてもらえるので、分からなければすぐに聞くことが出来ます。業界で活躍している先生方から直接教えてもらえるので、旅行・航空業界の今を学ぶことが出来ます。</dd>
        </dl>
        </div>
    </section>
</div>
<!--voiceArea-->

<!--oshigotoArea-->
<div id="oshigotoArea" class="fixHeight">
    <h3><span>トラベル＆テーマパークに係わるお仕事に係わるお仕事</span></h3>
    <dl>
        <dt class="fixHeightChildTitle">トラベルカウンター<br /><small>（旅行カウンター）</small></dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_01.jpg" alt="トラベルカウンター（旅行カウンター）" /></dd>
        <dd class="fixHeightChildtext">旅行会社の対面カウンターで、旅の提案・予約手配を行います。既存のツアー手配のみならず、お客様お一人おひとりの旅の目的を聞き出し、オリジナルの企画をする事も。自身の提案によって、目の前のお客様がワクワクしていく様子は嬉しいものです。</dd>
    </dl>
    <dl>
        <dt class="fixHeightChildTitle">ツアープランナー<br /><small>（企画）</small></dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_02.jpg" alt="ツアープランナー" /></dd>
        <dd class="fixHeightChildtext">旅行の企画には、新しい旅先や滞在中の過ごし方を開拓する為の日々の情報収集と研究は欠かせません。世の中には、様々な価値観が存在する事の認識も大切。あなたの考えたツアーが世の中の大ヒットになったり、新たなブームを巻き起こす事もあります。</dd>
    </dl>
    <dl>
        <dt class="fixHeightChildTitle">現地ガイド</dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_03.jpg" alt="現地ガイド" /></dd>
        <dd class="fixHeightChildtext">旅先でお客様に観光地の案内を行います。より楽しく、興味を持って頂けるよう、その土地の習わし、宗教、歴史に精通し、ガイドブックだけでは得られない豆知識を提供する事も大切。同時にお客様の安全にも気を配り、安心の旅を提供します。</dd>
    </dl>
    <dl>
        <dt class="fixHeightChildTitle">インバウンド<br /><small>（訪日外国人旅行）</small></dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_04.jpg" alt="インバウンド（訪日外国人旅行）" /></dd>
        <dd class="fixHeightChildtext">外国人客を対象とした、日本の旅行の企画・手配・斡旋の仕事。学会やスポーツの大会等、様々なイベントのお手伝いや、外国人の一般旅行のサポートを行います。世界に通用する日本のおもてなしで、世界に日本の良さを発信していこう。</dd>
    </dl>
    <dl>
        <dt class="fixHeightChildTitle">ランドオペレーター<br /><small>（現地手配）</small></dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_05.jpg" alt="ランドオペレーター（現地手配）" /></dd>
        <dd class="fixHeightChildtext">日本と海外の架け橋的存在。主に海外旅行において、宿泊先や観光地、現地での移動手段などを専門的に行う仕事。現地に詳しいランドオペレーターは、海外旅行において必要不可欠な存在。添乗員付きのコースの場合、添乗員との打ち合わせも行います。</dd>
    </dl>
    <dl>
        <dt class="fixHeightChildTitle">テーマパークスタッフ</dt>
        <dd class="oshigotoImg"><img src="<?php print $link_path; ?>images/course2015/oshigoto/travel/oshigoto_06.jpg" alt="テーマパークスタッフ" /></dd>
        <dd class="fixHeightChildtext">お客様に夢を与え、楽しいひと時をご提供する仕事。周りをしっかり見て、お客様一人ひとりへの心配りや、トラブル回避の為の注意力の他、お客様に喜んでもらえる為の企画力も必要。楽しそうなお客様の顔を見る時が、一番のやりがいを感じる瞬間です。</dd>
    </dl>
</div>
<!-- / oshigotoArea-->
