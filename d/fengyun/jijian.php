<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jijian extends Room {
	function __construct() {
		$this->set("name","祭剑亭");
		$this->set("long",<<<LONG
    祭剑是每个习武之人必做之事。每逢一年一度的风云城比武大赛，凡是参赛的
人都会到这儿来祭一次兵刃，以求好运。亭子间不大，四面通风，一道长长的木柜
把房间隔成了两部分，里面石板地正当中是一个冶剑炉，通红的炉火把亭内一切都
染上一层红色。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/ecloud2";
		$this->set("exits",$exits);
	}
}
?>
