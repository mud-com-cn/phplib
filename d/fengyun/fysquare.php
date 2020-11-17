<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fysquare extends Room {
	function __construct() {
		$this->set("name","风云天下");
		$this->set("long",<<<LONG
    风风雨雨，风云城的中心广场依旧鲜亮如新。风街和云路在这里交会，宽阔的
街道围成一个巨大的广场。广场中央的水池已经干涸，当年碧绿的池水和尾尾金鱼
不复存在，留下的是个几丈方圆，深不见底的大洞。水池旁的蟠龙摩天石柱饱经岁
月沧桑，依然不屈不挠地耸立，石柱上九条飞龙张牙舞爪，直欲冲天而去。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/swind1";
		$exits["north"] = "/d/fengyun/nwind1";
		$exits["east"] = "/d/fengyun/ecloud1";
		$exits["west"] = "/d/fengyun/wcloud1";
		$this->set("exits",$exits);

		$npcs = array();
		$npcs["/n/fengyun/testnpc"] = 1;
		$npcs["/n/fengyun/testnpc2"] = 1;
		$npcs['/n/fengyun/guard'] = 1;
		$this->set("npcs",$npcs);

	}
}
?>
