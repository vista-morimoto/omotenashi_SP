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
<ul class="BaseList">
  <li><a href="http://www.jikei-hospitality.ac.jp/event/">�̌����w</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/results.html?type[]=3">�X�y�V�����̌�</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/results.html?type[]=1">�w�Z������E���k��</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/bus.html">�������}�o�X</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/myschool/">My�X�N�[��</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/bus.html">�u�����o�X�v��ʔ�T�|�[�g</a></li>
  <li><a href="<?php print $link_path; ?>school/access.php">�A�N�Z�X</a></li>
</ul>
