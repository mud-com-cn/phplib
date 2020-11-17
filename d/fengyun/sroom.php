<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_sroom extends Room {
	function __construct() {
		$this->set("name","堂屋");
		$this->set("long",<<<LONG
    走过窄们，前面是一件破旧的堂屋，屋子里潮湿而阴暗，并不十分窄小，但只
有一桌，一床，一凳．更显得四壁箫然，空洞寂寞，也衬得那一盏孤灯更昏黄暗淡。
壁上的积尘未除，墙角上还结着蛛网．

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/stone2";
		$this->set("exits",$exits);
	}
}
?>
