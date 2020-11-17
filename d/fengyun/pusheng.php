<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_pusheng extends Room {
	function __construct() {
		$this->set("name","普生堂");
		$this->set("long",<<<LONG
    普生堂本是一云游高僧路经风云城逗留时所设，高僧童心未泯，有感此地风土
人情，一留就是三年。亲授一弟子。高僧慧眼识珠，此弟子乃人中之龙，不到三年
已尽学僧人医术。堂中悬匾一块： 
                            妙手回春

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/yangsheng";
		$exits["east"] = "/d/fengyun/swind5";
		$this->set("exits",$exits);
	}
}
?>
