<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_bupu extends Room {
	function __construct() {
		$this->set("name","风云布铺");
		$this->set("long",<<<LONG
    布铺里摆满了绫罗绸缎，这里专门订作，裁剪，改装各种鞋，帽，衫。老板娘
做的衣服不但款式新颖，而且经久耐穿。风云城里老老少少们穿的大部份都是来自
这儿。门口挂了一个大牌子（ｓｉｇｎ）．

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ecloud2";
		$this->set("exits",$exits);
	}
}
?>
