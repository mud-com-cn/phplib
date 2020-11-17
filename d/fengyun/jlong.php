<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jlong extends Room {
	function __construct() {
		$this->set("name","浸龙堂");
		$this->set("long",<<<LONG
    地板是上好的檀香木，光滑而略带潮湿。左手边是一个柜台，后面有个架子，
上面挂满了白毛巾。几个如花似玉的小丫环正在忙碌，望向窗外，一个巨大的青铜
缸架在烈火上，丫环们正在慢慢的加入清泉水。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/nwind3";
		$exits["west"] = "/d/fengyun/jlonglang1";
		$this->set("exits",$exits);
	}
}
?>
