<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_goldlion extends Room {
	function __construct() {
		$this->set("name","金狮镖局大院");
		$this->set("long",<<<LONG
    这里几十年来几乎没有什么变化，黑石铺地，大院右边零乱的放着一些大小不
一的石锁，想必是镖局中的趟子手用来练臂力的。左侧则是碗口粗细一人多高的梅
花桩。总镖头查猛是少林俗家弟子出身，虽然教出的徒弟不怎么样，但是他的轻功
和掌法都已经炉火纯青了。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/gkitchen";
		$exits["north"] = "/d/fengyun/gcang";
		$exits["east"] = "/d/fengyun/ghall";
		$exits["west"] = "/d/fengyun/nwind4";
		$this->set("exits",$exits);
	}
}
?>
