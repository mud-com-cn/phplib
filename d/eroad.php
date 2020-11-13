<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class Room_d_eroad extends Environment {
	function __construct() {
		$this->set("name","东大街");
		$this->set("long","这里是东大街，这阿斯弗是否里谢谢谢谢\n啊撒旦解放了是否。");
		$exits = array();
		$exits["west"] = "/d/center";
		$this->set("exits",$exits);
	}
	function desc() {
		return $this->get("name")."\n".$this->get("long")."\n";
	}
}
?>
