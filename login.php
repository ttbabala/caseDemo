<?php
	require_once('class.php');
	$hashpw = '$2a$08$CrbbnS2PN1Vu.ODt8JnZBOOFpUMVyPmo9yPhE7c0wdnq2AzwNvDLK';
	$rowpw = 'zs888';
	$ob = new base();
	if(!($ob -> bcryptVerfy($rowpw,$hashpw))){
		echo '密码核对不正确！';
	}
	else{
		echo '恭喜，密码核对无误！';
	}
?>