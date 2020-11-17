<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ecloud5 extends Room {
	function __construct() {
		$this->set("name","东门西");
		$this->set("long",<<<LONG
    再往东就是东城门了，东门外是通向山里的一条路。东门和其他的城门没有什
么不同，上面贴满了告示和通缉令。听说当年大盗祈潼就是在东门被人发现，报告
了官府后被抓住的。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/hall";
		$exits["east"] = "/d/fengyun/egate";
		$exits["west"] = "/d/fengyun/ecloud4";
		$this->set("exits",$exits);
	}
}
?>
