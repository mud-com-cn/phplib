<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_bookshop extends Room {
	function __construct() {
		$this->set("name","书店");
		$this->set("long","书店书店书店。\n测试nw se这种出口。");
		$exits = array();
		$exits["southeast"] = "/d/wroad";
		$this->set("exits",$exits);
	}
}
?>
