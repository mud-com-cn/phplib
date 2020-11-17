<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_govern extends Room {
	function __construct() {
		$this->set("name","风云衙门");
		$this->set("long",<<<LONG
    这里是朝廷所设，风云城里的纠纷都可以在这里上状请求处理。大厅南首一张卷
檐木案，案上有个小竹桶，里面插着几根有知府官印的竹签。木案后的太师椅上铺着
雪绒皮，椅后屏风上红日青云图。上悬金边匾：
                                明察秋毫

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud2";
		$exits["east"] = "/d/fengyun/shufang";
		$this->set("exits",$exits);
	}
}
?>
