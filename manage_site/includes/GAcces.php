<?php 

function VerifierLoginPwd($login , $pass)
{
  if ($login == 'sportignite' && $pass == "HASSOUNI1az"){
	    return true;
	}else{
		return false;
	} 
}
?>