<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wcloud2 extends Room {
	function __construct() {
		$this->set("name","西云路");
		$this->set("long",<<<LONG
    也许是快到风云广场的缘故，这里的气氛渐渐喧闹起来。脚下已不是坎坷不平
的黄土路，大块的黑石砌成的大路可容八马并行，路上的行人脚步轻快，神情开朗，
大路的南侧新开张了家长乐坊，而大路的北首是风云驿站。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/manhome";
		$exits["north"] = "/d/fengyun/mailst";
		$exits["east"] = "/d/fengyun/wcloud1";
		$exits["west"] = "/d/fengyun/wcloud3";
		$this->set("exits",$exits);
	}
}
?>
