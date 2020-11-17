<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fysouth extends Room {
	function __construct() {
		$this->set("name","风云南");
		$this->set("long",<<<LONG
    这是风云城南边的市集。南北大道由此横贯。上穿白山黑水，直达松
花江。下接风云京都，再通江南海口。干线上商旅不绝。一条车痕向南方
和北方伸展。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/road0";
		$exits["north"] = "/d/fengyun/sgate";
		$exits["east"] = "/d/fengyun/sroad4";
		$exits["west"] = "/d/fengyun/sroad3";
		$this->set("exits",$exits);
	}
}
?>
