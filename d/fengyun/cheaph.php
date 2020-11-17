<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_cheaph extends Room {
	function __construct() {
		$this->set("name","土嫖馆");
		$this->set("long",<<<LONG
    一间简陋的，用泥坯砌起来的低矮小房。东面的墙上有条裂缝，从右上角一直
裂到左边的墙角里。西边有一张和泥屋连为一体的土炕。炕下有灶，炕头挂着厚布
蚊帐，帐上贴纸一张：价格最平，男女老少皆宜，恕不找钱。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud3";
		$this->set("exits",$exits);
	}
}
?>
