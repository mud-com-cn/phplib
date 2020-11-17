<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nwind2 extends Room {
	function __construct() {
		$this->set("name","北风街");
		$this->set("long",<<<LONG
    这里是风云广场的北边，再往北眺望可以看到远处高耸的城墙。热闹的街道上
充溢着清新的花香和甜丝丝脂粉的香气。花香是从大街东侧的飘香花店荡漾出来的，
而浓厚的脂粉气息则是西首倾城胭脂店的招牌。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/nwind3";
		$exits["south"] = "/d/fengyun/nwind1";
		$exits["east"] = "/d/fengyun/pxhdian";
		$exits["west"] = "/d/fengyun/qcyzdian";
		$this->set("exits",$exits);
	}
}
?>
