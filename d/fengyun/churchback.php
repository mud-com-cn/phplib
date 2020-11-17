<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_churchback extends Room {
	function __construct() {
		$this->set("name","教堂内室");
		$this->set("long",<<<LONG
    这是教堂的内室，一些希望得到天主特别照顾的人会来到这里进行寻求主的帮助。
具体的内容可以参考牌子（sign）上的内容。
所以，我们的问题就是：学挖掘机技术到底哪里强？

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/church";
		$this->set("exits",$exits);
	}
}
?>
