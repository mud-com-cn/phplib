<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_qianyin extends Room {
	function __construct() {
		$this->set("name","千银当铺");
		$this->set("long",<<<LONG
    此当铺是南风大街对面的千金楼所设。以方便手头不宽的嫖客。千金楼的姑娘
们也经常光顾这里，典当或是卖掉客人们高兴之余所赏赐的小玩意儿。此当铺虽然
是千金楼所属，但却童叟无欺。当铺挂有牌（ｓｉｇｎ）一块。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/swind4";
		$this->set("exits",$exits);
	}
}
?>
