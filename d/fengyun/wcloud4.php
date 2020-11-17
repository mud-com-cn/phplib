<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wcloud4 extends Room {
	function __construct() {
		$this->set("name","西云路西");
		$this->set("long",<<<LONG
    宽宽的黄土路向东西方向伸展，路边的茅屋矮小而破旧，街边的垃圾散发着令
人作呕的腐臭，路上的行人面黄肌瘦，被贫困的生活拖得疲惫不堪。偶而有一两个
面色红润之人，都掩鼻匆匆而过，生怕沾上一点晦气。大路南侧的安生棺材店中迎
门放着几口薄皮木棺，大路北面的阿发木器店中黑漆漆一片，看不到里面有什么。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ansheng";
		$exits["north"] = "/d/fengyun/afa";
		$exits["east"] = "/d/fengyun/wcloud3";
		$exits["west"] = "/d/fengyun/wcloud5";
		$this->set("exits",$exits);
	}
}
?>
