<?php
require_once(MUD_LIB.'/inherit/user.php');
class User_object extends User {
	function user_level() {return $this->get("IS_WIZARD")?2:1;}
}
?>

