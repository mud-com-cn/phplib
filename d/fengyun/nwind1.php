<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nwind1 extends Room {
	function __construct() {
		$this->set("name","广场北");
		$this->set("long",<<<LONG
    风街是风云城里最热闹的两条街道之一，连着广场的一头更是人来人往，络绎
不绝。街道两旁店铺众多，生意兴隆。叫卖声、喝采声、女人们的娇笑声，此起彼
伏。糕点的甜味儿，酒菜的香味儿，女人身上的花粉味儿，令人目眩头晕。大街东
侧是城里最贵的酒楼—风云阁，西侧则是警世书局。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/nwind2";
		$exits["south"] = "/d/fengyun/fysquare";
		$exits["east"] = "/d/fengyun/fyge";
		$exits["west"] = "/d/fengyun/jssju";
		$this->set("exits",$exits);
	}
}
?>
