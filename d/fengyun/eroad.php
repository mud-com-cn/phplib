<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_eroad extends Room {
	function __construct() {
		$this->set("name","东大街");
		$this->set("long","这里是东大街，这阿斯弗是否里谢谢谢谢\n啊撒旦解放了是否。");
		$exits = array();
		$exits["west"] = "/d/fengyun/center";
		$this->set("exits",$exits);
	}
}
?>
