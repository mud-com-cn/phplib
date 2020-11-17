<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_qcyzdian extends Room {
	function __construct() {
		$this->set("name","倾城胭脂店");
		$this->set("long",<<<LONG
    这里陈列着各式各样的胭脂，有从京都运来的，也有本地产的。胭脂鲜红似血,
香气扑鼻。每当朝阳初升，阳光照入店内，映在胭脂上，给人一种耀眼的亮红。除
了胭脂这里还卖刨花油，花粉袋。店老板听说就是五十年来江湖中有名的易容高手。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/nwind2";
		$this->set("exits",$exits);
	}
}
?>
