<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fynorth extends Room {
	function __construct() {
		$this->set("name","风云城北");
		$this->set("long",<<<LONG
    这是风云城北的一个市集。南北大道横穿市集。北穿白山黑水，直达松花江。
南接风云京都，再通江南海口。干线上商旅不绝，一条车痕向南方和北方伸展。东
西方向是一条小路，向东通向山区，向西通向大漠。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ngate";
		$exits["north"] = "/d/laowu/road0";
		$exits["east"] = "/d/fengyun/road4";
		$exits["west"] = "/d/fengyun/road3";
		$this->set("exits",$exits);
	}
}
?>
