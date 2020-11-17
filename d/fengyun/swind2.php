<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_swind2 extends Room {
	function __construct() {
		$this->set("name","南风街");
		$this->set("long",<<<LONG
    街道就象水洗过那么的干净，汉白玉砌的路面光明如镜，两侧的瓦房高大宏伟，
双人合抱的杨树十步一株，整齐的排在两边。大街西面一对千斤巨鼎，悬挂在朱门
两旁，这里就是金钱帮的总舵。大街东面巨宅上有一高高的十字架，一些金发碧眼，
身披黑袍的人不时的出出入入。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/swind1";
		$exits["south"] = "/d/fengyun/swind3";
		$exits["east"] = "/d/fengyun/church";
		$exits["west"] = "/d/fengyun/jinqian";
		$this->set("exits",$exits);
	}
}
?>
