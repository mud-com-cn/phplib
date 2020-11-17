<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_swind3 extends Room {
	function __construct() {
		$this->set("name","南风大街");
		$this->set("long",<<<LONG
    一个闪亮的银钩挂在大街西面一座巨宅的飞檐下，将日光折射开来，洒向整条
街，就象在汉白玉的路面上铺上了一层银粉，闪闪发光，这就是风云城中最豪华的
银钩赌坊。银钩赌坊的对面是一品居茶座。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/swind2";
		$exits["south"] = "/d/fengyun/swind4";
		$exits["east"] = "/d/fengyun/yitea";
		$exits["west"] = "/d/yingou/yingou";
		$this->set("exits",$exits);
	}
}
?>
