<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_tuji extends Room {
	function __construct() {
		$this->set("name","屠记肉铺");
		$this->set("long",<<<LONG
    脏稀稀的木板上放着几块颜色灰暗，不堪入目的生肉。一堆绿头苍蝇忙忙碌碌
的飞起飞落。几个生了锈的铁勾上挂着半风干了的羊头，猪头，和牛头。柜台的左
角儿放着几个木匣，匣中放着些煮熟了的杂碎和排骨。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/wcloud5";
		$this->set("exits",$exits);
	}
}
?>
