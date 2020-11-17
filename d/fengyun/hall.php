<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hall extends Room {
	function __construct() {
		$this->set("name","风云天骄门");
		$this->set("long",<<<LONG
    这是一座古老而神圣的大理石门，大约建于百年前。门上斑斑点点，风化不堪。
传说中是玉皇大帝临凡嘉奖天下儿女英雄的地方，凡是被嘉奖的英雄都成为不死之
身，他们的事迹千万年为世人传颂。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/jinshuihe";
		$exits["south"] = "/d/fengyun/ecloud5";
		$this->set("exits",$exits);
	}
}
?>
