<?php
	require_once('class.php');
	$hashpw = '$2a$08$CrbbnS2PN1Vu.ODt8JnZBOOFpUMVyPmo9yPhE7c0wdnq2AzwNvDLK';
	$rowpw = 'zs888';
	$ob = new base();
	if(!($ob -> bcryptVerfy($rowpw,$hashpw))){
		echo '����˶Բ���ȷ��';
	}
	else{
		echo '��ϲ������˶�����';
	}
?>