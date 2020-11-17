<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_marry_room extends Room {
	function __construct() {
		$this->set("name","鸳鸯亭");
		$this->set("long",<<<LONG
    你现在正站在鸳鸯亭里，这里是专门替人缔结婚约和解除婚约的地方，城里所
有的夫妇都是在这里喜结良缘的，就连附近镇子也有许多慕名而来的年青人．靠近
门口的地方有一块乌木雕成的招牌（ｓｉｇｎ）。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/ecloud1";
		$this->set("exits",$exits);
	}
}
?>
