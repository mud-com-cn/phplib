<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_baozipu extends Room {
	function __construct() {
		$this->set("name","薛记老号");
		$this->set("long",<<<LONG
    这包子铺已经在这里几十年了，自开张后就没换过门面，布置还是那么简陋，
屋子里面仅有的几张方桌和长凳都已经看不出原来的颜色。肮脏而残破的碗筷零乱
地散落在桌面上，墙角里随便扔着几支脏稀稀的筷子，上面已结满蜘蛛网。几只苍
蝇盲目地飞来飞去，为这死气沉沉的店堂添了几分生气。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/nwind5";
		$this->set("exits",$exits);
	}
}
?>
