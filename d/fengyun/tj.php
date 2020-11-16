<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_tj extends Room {
	function __construct() {
		$this->set("name","天机楼");
		$this->set("long","主要是测试指令chain里的out/in这种非标准出口。");
		$exits = array();
		$exits["down"] = "/d/fengyun/center";
		$exits["in"] = "/d/fengyun/tjin";
		$this->set("exits",$exits);
	}
}
?>
