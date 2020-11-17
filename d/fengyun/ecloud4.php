<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ecloud4 extends Room {
	function __construct() {
		$this->set("name","东云路东");
		$this->set("long",<<<LONG
    这里又是乱哄哄的，有弹棉花的嗡嗡声也有小贩的叫卖声。大家似乎都忙忙碌
碌的，但好像又不知道忙些什么。南部有一个大水池，水色墨绿，散发着淡淡的青
烟。烟色迷离，这里的一切都笼罩在似乎不存在的烟中。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ponder";
		$exits["north"] = "/d/fengyun/mianhua";
		$exits["east"] = "/d/fengyun/ecloud5";
		$exits["west"] = "/d/fengyun/ecloud3";
		$this->set("exits",$exits);
	}
}
?>
