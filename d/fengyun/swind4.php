<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_swind4 extends Room {
	function __construct() {
		$this->set("name","南风街南");
		$this->set("long",<<<LONG
    白天这里门可罗雀，但一到夜晚，就车水马龙，热闹得成了不夜之都。西侧的
千金楼名声显赫，方圆千里的有钱人都愿意到这里来一掷千金，就算是没钱的穷小
子也会有事没事来转转，希望一睹楼里姑娘的芳容。千金楼为了方便客人，又在对
面开了一座千银当铺。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/swind3";
		$exits["south"] = "/d/fengyun/swind5";
		$exits["east"] = "/d/fengyun/qianyin";
		$exits["west"] = "/d/qianjin/qianjin";
		$this->set("exits",$exits);
	}
}
?>
