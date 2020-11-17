<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wcloud5 extends Room {
	function __construct() {
		$this->set("name","西门东");
		$this->set("long",<<<LONG
    宽宽的黄土路向东西方向伸展，路边的茅屋矮小而破旧，街边的垃圾散发着令
人作呕的腐臭，路上的行人面黄肌瘦，被贫困的生活拖得疲惫不堪。偶而有一两个
面色红润之人，都掩鼻匆匆而过，生怕沾上一点晦气。一股生猛的肉味从北面的屠
记肉铺散发出来，浑杂着南首醉生小酒馆里劣酒的味道。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/zuisheng";
		$exits["north"] = "/d/fengyun/tuji";
		$exits["east"] = "/d/fengyun/wcloud4";
		$exits["west"] = "/d/fengyun/wgate";
		$this->set("exits",$exits);
	}
}
?>
