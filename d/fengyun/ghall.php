<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ghall extends Room {
	function __construct() {
		$this->set("name","金狮镖局大厅");
		$this->set("long",<<<LONG
    大红地毯依旧，珍奇古玩，高悬字画，表明这里的主人不但性情豪爽，广交朋
友，且非大字不识，目中无人之辈。上首一狮皮交椅，左右各明烛闪烁。一深色古
木书案横于椅前，上面整齐的堆着一卷卷镖局押镖的货票。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/gmoney";
		$exits["east"] = "/d/fengyun/ginhall";
		$exits["west"] = "/d/fengyun/goldlion";
		$this->set("exits",$exits);
	}
}
?>
