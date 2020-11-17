<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hiretem extends Room {
	function __construct() {
		$this->set("name","城隍古庙");
		$this->set("long",<<<LONG
    这庙少说也有几百年的历史了。阴暗潮湿，破旧不堪，每当狂风吹过，整座庙
都在摇晃，似乎马上就会倒塌下来。这里香火很是惨淡，只有一支残烛在风中摇曳，
忽明忽暗，鬼气森森。整个庙里灰尘满布，角落里的一个暗红色的神龛却是一尘不
染。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/nwind5";
		$this->set("exits",$exits);
	}
}
?>
