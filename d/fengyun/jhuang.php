<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jhuang extends Room {
	function __construct() {
		$this->set("name","黄衣室");
		$this->set("long",<<<LONG
    黄衣警卫专门负责金钱帮总舵的安全。来往的人都要经过他们的仔细盘查。这
里是他们轮班休息的所在。屋中有几张小床，几张小几。每张床头都有小钩，警卫
们都把兵器挂在钩上，一伸手就可以以最快的速度拔出自己的兵刃。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/tang3";
		$exits["south"] = "/d/fengyun/jting";
		$exits["east"] = "/d/fengyun/tang1";
		$exits["west"] = "/d/fengyun/tang2";
		$this->set("exits",$exits);
	}
}
?>
