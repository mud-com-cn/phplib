<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fysf extends Room {
	function __construct() {
		$this->set("name","风云书房");
		$this->set("long",<<<LONG
    这间书房是李探花偶而回来小憩时读书之处。屋子布置的精致富丽，正中一张
青玉案，案上两只白玉瓶，瓶里插着几十枝茶花。玉瓶旁铺着几张信筏，放着些笔
墨砚石，还有个斗大的玉钵，想是用来洗笔的。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/fyyage";
		$this->set("exits",$exits);
	}
}
?>
