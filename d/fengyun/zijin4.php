<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_zijin4 extends Room {
	function __construct() {
		$this->set("name","[1;35m紫禁之巅[2;37;0m");
		$this->set("long",<<<LONG
    月圆之夜，紫禁之巅！！据说当世两大绝世剑客，『白云城主』叶孤城与『剑神』
西门吹雪便要在此处决出这天下第一剑客！但问当世天下的武林高手何人不以在此决
战为毕生荣耀？！

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/zijin2";
		$exits["southeast"] = "/d/fengyun/zijin_s";
		$exits["west"] = "/d/fengyun/zijin3";
		$exits["northwest"] = "/d/fengyun/zijin1";
		$this->set("exits",$exits);
	}
}
?>
