<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_road1 extends Room {
	function __construct() {
		$this->set("name","城西小路");
		$this->set("long",<<<LONG
    一条小路弯弯曲曲向北延伸。路的旁边是风云城的护城河，河的另外一边就
是高大的风云城城墙了。从这里可以看到城墙上值勤的士兵在站岗。河堤上长满
了绿草。微风拂来，一股的泥土的气息。自从金钱帮在风云城里兴起以后，这里
的行人渐渐的多了起来，每天清晨都有金狮镖局的车队从此路过。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/fywest";
		$exits["northeast"] = "/d/fengyun/road2";
		$this->set("exits",$exits);
	}
}
?>
