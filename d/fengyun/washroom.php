<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_washroom extends Room {
	function __construct() {
		$this->set("name","私塾学堂");
		$this->set("long",<<<LONG
    这里以前是一家洗衣店，是有钱人将衣服拿来浆洗的地方。自从这里的老板娘
去世了以后，有一个老人住了进来，把它改成一间私塾，但因为地区太乱，并没有
几个学生。门口有一个大木牌（ｓｉｇｎ）。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/ecloud3";
		$this->set("exits",$exits);
	}
}
?>
