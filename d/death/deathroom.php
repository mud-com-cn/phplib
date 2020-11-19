<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_death_deathroom extends Room {
	function __construct() {
		$this->set("name","黄泉路");
		$this->set("long",<<<LONG
    这里就是黄泉路了。黑乎乎的一片你什么也看不清楚。
LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/wcloud4";
		$this->set("exits",$exits);
	}
}
?>
