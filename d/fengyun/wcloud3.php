<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wcloud3 extends Room {
	function __construct() {
		$this->set("name","西云大路");
		$this->set("long",<<<LONG
    宽宽的黄土路向东西方向伸展，路边的茅屋矮小而破旧，街边的垃圾散发着令
人作呕的腐臭，路上的行人面黄肌瘦，被贫困的生活拖得疲惫不堪。偶而有一两个
面色红润之人，都掩鼻匆匆而过，生怕沾上一点晦气。南首有一扇木门，上面写道：
每夜五十文，北首则是相面大师乙成仙的招牌：生死已卜。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/cheaph";
		$exits["north"] = "/d/fengyun/futhur";
		$exits["east"] = "/d/fengyun/wcloud2";
		$exits["west"] = "/d/fengyun/wcloud4";
		$this->set("exits",$exits);
	}
}
?>
