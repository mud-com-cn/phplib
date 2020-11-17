<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp2a extends Room {
	function __construct() {
		$this->set("name","[1;32m探花阁侧楼[2;37;0m");
		$this->set("long",<<<LONG
    ——————————————————————————————————
        荷叶自碧水自柔，晓阴无赖是穷秋，残杯险把醉兰舟。
        漫想重来千万事，临波一笑忍凝眸，浮槎江海寄余愁。
        
        水自柔来天自空，长天孤雁落霞中，竟何相思几万重。
        残装浅笑沉醉后，新词赋就绿荫浓，淡山凉月水从容。
        
[2;37;0m
LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/poemp2";
		$this->set("exits",$exits);
	}
}
?>
