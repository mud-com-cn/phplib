<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hfengpool extends Room {
	function __construct() {
		$this->set("name","枫叶泉");
		$this->set("long",<<<LONG
    风云城中的枫叶泉是方圆五百里最著名的一口温泉。水温适中，泉水呈淡红,
故而得名枫叶。它不但有去腐生肌的奇效，据说还有延年益寿的妙用。武林第一
美人林仙儿每天都以此泉水浣面（ｗａｓｈ），来保持她如花似玉的容貌。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/hfenglang3";
		$this->set("exits",$exits);
	}
}
?>
