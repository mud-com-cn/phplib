<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_sroad1 extends Room {
	function __construct() {
		$this->set("name","小山坡西面");
		$this->set("long",<<<LONG
    北面是风云城，天气好时隐隐约约地还可以看到风云城的黑色纶廓。
再向东则是一个光秃秃的小山坡，坡上已被路过的行人踏出了一条黄土
路。路的两边还长了一些半人高的焦黄茅草。

LONG
);
		$exits = array();
		$exits["south"] = "/d/manglin/edge2";
		$exits["north"] = "/d/fengyun/road0";
		$exits["eastup"] = "/d/fengyun/sroad2";
		$this->set("exits",$exits);
	}
}
?>
