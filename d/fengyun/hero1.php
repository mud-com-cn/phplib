<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hero1 extends Room {
	function __construct() {
		$this->set("name","[1;32m黄鹤楼[2;37;0m");
		$this->set("long",<<<LONG
    [1;32m                        昔人已乘黄鹤去，此地空余黄鹤楼。
                        黄鹤一去不复返，白云千载空悠悠。
                        晴川历历汉阳树，芳草萋萋鹦鹉洲，
                        日暮乡关何处是，烟波江上使人愁。
                        
                                        崔颢《黄鹤楼》
[2;37;0m
LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/poemp";
		$this->set("exits",$exits);
	}
}
?>
