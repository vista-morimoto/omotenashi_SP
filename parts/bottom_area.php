<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// �{�Ԏ���/�����[�g
		$link_path = "/";
}else{
	// �e�X�g�A�b�v����/check/�����[�g
		$link_path = "/sp_jikei-hospitality2016/";
}
?>


<p class="pageTop"><a href="#wrapper">�y�[�W�g�b�v��</a></p>

<p class="textR small">���w���O���[�v�̎��т��x�[�X�Ɍf�ڂ��Ă��܂��B<br />���{�\����܂݂܂��B</p>

<nav id="footNav">
    <ul class="clearfix">
        <li><a href="http://www.jikei-hospitality.ac.jp/event/"><img src="<?php print $link_path; ?>common/img/btnFootEvent.png" alt="���d���̌��i�I�[�v���L�����p�X�j" width="306" height="63"></a></li>
        <li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>common/img/btnFootSiryo.png" alt="��������" width="306" height="60"></a></li>
        
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
        <dt>�K��ҕʃK�C�h</dt>
        <dd>
            <ul>
                <li><a href="<?php print $link_path; ?>target/">���w�����l���̕���</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/parent.php">�ی�҂̕���</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/society.php">��w���E�Љ�l�E�t���[�^�[�̕���</a></li>
                <!--<li><a href="">���w���̕���</a></li>-->
                <li><a href="http://www.jikei-hospitality.ac.jp/target/company.php">��Ƃ̕���</a></li>
                <li><a href="http://www.jikei-hospitality.ac.jp/target/teacher.php">�����w�Z�̐搶����</a></li>
            </ul>
        </dd>
    </dl>
<!-- .target // -->
</div>

<!--����-->
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
<p class="gray"><small>���������ʂɂ�PC�T�C�g���܂݂܂�</small></p>
<!-- // ����-->

<footer>
  <ul id="device">
    <li><a href="http://www.jikei-hospitality.ac.jp">PC�T�C�g</a></li>
    <li>�X�}�[�g�t�H��</li>
  </ul>
  <div id="contact">
    <ul>
      <li><a href="tel:0120-947-718" onclick="ga('send', 'event', '�d�b�����N', '�^�b�v');">0120-947-718</a></li>
      <li><a href="mailto:info@jikei-hospitality.ac.jp" style="line-height:1;">info@<br />jikei-hospitality.ac.jp</a></li>
    </ul>
  </div>
  <address>
  �w�Z�@�l�R�~���j�P�[�V�����A�[�g<br>
  ���c�����ĂȂ����u���C�_���E�ό����w�Z<br>
  ��550-0014 ���s����k�x�]2-4-6
  </address>
  <small>&copy; JIKEI School of HOSPITALITY. All Rights Reserved.</small>
  <p><a href="http://www.jikei-hospitality.ac.jp/privacy/">�v���C�o�V�[�|���V�[</a></p>
  <p><a href="http://www.jikei-hospitality.ac.jp/socialpolicy/">�\�[�V�������f�B�A�|���V�[</a></p>
</footer>

<nav id="footerFixNav">
<ul>
<li><a href="<?php print $link_path; ?>"><img src="<?php print $link_path; ?>common/img/fnav_home.png" alt="HOME" width="69" height="14"></a></li>
<li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>common/img/fnav_siryo.png" alt="��������" width="71" height="14"></a></li>
<li><a href="http://www.jikei-hospitality.ac.jp/event/"><img src="<?php print $link_path; ?>common/img/fnav_taiken.png" alt="�̌����w" width="71" height="14"></a></li>
<li><a href="<?php print $link_path; ?>school/access.php"><img src="<?php print $link_path; ?>common/img/fnav_access.png" alt="�A�N�Z�X" width="71" height="14"></a></li>
</ul>
</nav>