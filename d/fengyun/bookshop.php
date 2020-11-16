<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_bookshop extends Room {
	function __construct() {
		$this->set("name","书店");
		$this->set("long",<<<LONG
    测试一下使用长文本标签的效果。
我看看这样是否可以。
LONG
);
		$exits = array();
		$exits["southeast"] = "/d/fengyun/wroad";
		$this->set("exits",$exits);
	}
}
?>
