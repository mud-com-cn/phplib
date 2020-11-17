<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_mailst extends Room {
	function __construct() {
		$this->set("name","风云驿站");
		$this->set("long",<<<LONG
    每天快马三匹，早午晚各传递书信三次。无论官员衙役还是普通百姓都可以在
这儿免费邮寄书信。不管你的书信要寄到那里，只要交给驿站，三天之内绝对可以
送到。近来朝廷节缩开支，王风也挂起了牌子(Sign)，和关外的吕恭合伙，做起了
出租马车到关外的生意。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/wcloud2";
		$this->set("exits",$exits);
	}
}
?>
