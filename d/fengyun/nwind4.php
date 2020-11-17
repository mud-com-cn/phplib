<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nwind4 extends Room {
	function __construct() {
		$this->set("name","北风街北");
		$this->set("long",<<<LONG
    北城区是武林人物会聚的地方。西首的镇风兵器店自诸葛雷创业以来，打造的
兵器在江湖上小有名气，东首的金狮镖局从来没有丢过一支镖，声誉传遍大江南北。
在这里进进出出的大部分都是腰带兵刃，虎背熊腰的江湖人物。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/nwind5";
		$exits["south"] = "/d/fengyun/nwind3";
		$exits["east"] = "/d/fengyun/goldlion";
		$exits["west"] = "/d/fengyun/stopwin";
		$this->set("exits",$exits);
	}
}
?>
