<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp extends Room {
	function __construct() {
		$this->set("name","探花诗台");
		$this->set("long",<<<LONG
    风云中的老老少少大都有吟诗对词的雅好。只要稍有灵感，就会带着笔墨到这
里来酝酿，等到灵光乍现那霎那，奋笔急书，以求千古名句。诗台正中朱笔入木狂
草：[33m  
                       今日有酒今朝醉，
                       哪管它日剑割头！
                                       阿铁狂舞于酒后失意时。
[2;37;0m
LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/wcloud1";
		$exits["up"] = "/d/fengyun/poemp2";
		$this->set("exits",$exits);
	}
}
?>
