<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp3 extends Room {
	function __construct() {
		$this->set("name","[1;35m探花阁三楼[2;37;0m");
		$this->set("long",<<<LONG
    醉里挑灯看剑，梦回吹角连营。八百里分麾下灸，五十弦翻塞外声。沙场秋
点兵。马作的卢飞快，弓如霹雳弦惊。了却君王天下事，嬴得生前身后名。可怜
白发生！
[2;37;0m
LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/poemp2";
		$exits["up"] = "/d/fengyun/poemp4";
		$this->set("exits",$exits);
	}
}
?>
