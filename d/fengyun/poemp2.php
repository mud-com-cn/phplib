<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp2 extends Room {
	function __construct() {
		$this->set("name","[1;32m探花阁二楼[2;37;0m");
		$this->set("long",<<<LONG
    当年万里觅封候，匹马戍梁州。关河梦断何处？尘暗旧貂裘。胡未灭，鬓先
秋，泪空流。此生谁料，心在天山，身老沧洲！

LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/poemp";
		$exits["west"] = "/d/fengyun/poemp2a";
		$exits["up"] = "/d/fengyun/poemp3";
		$this->set("exits",$exits);
	}
}
?>
