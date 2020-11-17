<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_shufang extends Room {
	function __construct() {
		$this->set("name","知府书房");
		$this->set("long",<<<LONG
    这书室庭户虚敞，正中挂一幅名人山水。供一个古铜香炉，炉里香烟飘渺。左边
设一张湘妃竹榻，右边架上堆满若干图书。沿窗一只几上，摆列文房四宝。窗外庭中
种植许多花木，铺设得十分清雅，凡朝廷命官都可在这发号令（ａｒｒｅｓｔ）。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/govern";
		$this->set("exits",$exits);
	}
}
?>
