<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp5 extends Room {
	function __construct() {
		$this->set("name","[1;31m探花阁顶楼[2;37;0m");
		$this->set("long",<<<LONG
    明月几时有，把酒问青天。不知天上宫阙，今夕是何年。我欲乘风归去，
惟恐琼楼玉宇，高处不胜寒。起舞弄清影，何似在人间。
转朱阁，低绮户，照无眠。不应有恨，何事长向别时圆。人有悲欢离合，
月有阴晴圆缺，此事古难全。但愿人长久，千里共婵娟。。
[2;37;0m
LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/poemp4";
		$this->set("exits",$exits);
	}
}
?>
