<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_road0 extends Room {
	function __construct() {
		$this->set("name","南北大道");
		$this->set("long",<<<LONG
    这是风云城的一条主要大道。它上穿白山黑水，直达松花江。下接风云京都，
再通江南海口。这条干线上商旅不绝。一条车痕向南方和北方伸展。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/sroad1";
		$exits["north"] = "/d/fycycle/fysouth";
		$this->set("exits",$exits);
	}
}
?>
