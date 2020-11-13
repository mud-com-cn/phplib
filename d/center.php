<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class Room_d_center extends Environment {
	function __construct() {
		$this->set("name","中央广场");
		$this->set("long","这里是中央广场，这里谢谢谢谢\n啊撒旦解放了是否。");
		$exits = array();
		$exits["east"] = "/d/eroad";
		$this->set("exits",$exits);
	}
	function desc() {
		return $this->get("name")."\n".$this->get("long")."\n";
	}
}
?>
