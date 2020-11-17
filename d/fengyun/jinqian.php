<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jinqian extends Room {
	function __construct() {
		$this->set("name","金钱帮大院");
		$this->set("long",<<<LONG
    大院里冷冷清清，静的出奇。院中的老树在地上拖出长长的影子。偶尔几声鸟
叫，打破死沉沉的寂静。微风吹过，树叶舞动，发出“沙沙”的声音。黄沙的地面
铺满枯黄的落叶。几条黄色的人影在阴暗的角落里忽隐忽现。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/swind2";
		$exits["west"] = "/d/fengyun/jting";
		$this->set("exits",$exits);
	}
}
?>
