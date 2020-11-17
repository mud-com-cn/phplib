<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wroad extends Room {
	function __construct() {
		$this->set("name","西大街");
		$this->set("long",<<<LONG
这里是西大街，盎司附近盎司附近这阿斯弗是否里谢谢谢谢。啊撒旦解放了是否。
LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/center";
		$exits["northwest"] = "/d/fengyun/bookshop";
		$this->set("exits",$exits);
	}
}
?>
