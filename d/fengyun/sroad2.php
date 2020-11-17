<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_sroad2 extends Room {
	function __construct() {
		$this->set("name","小山坡顶");
		$this->set("long",<<<LONG
    山坡虽不高，但也可以把西南的沉香镇和北面的风云城尽收眼底。占
地几百顷的风云城一眼望不到边际，整个城都向远方铺展，隐于大地的交
界处。西南的沉香镇相比之下则显得荒漠的可怜。

LONG
);
		$exits = array();
		$exits["westdown"] = "/d/fengyun/sroad1";
		$this->set("exits",$exits);
	}
}
?>
