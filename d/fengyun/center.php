<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_center extends Room {
	function __construct() {
		$this->set("name","中央广场");
		$this->set("long",<<<LONG
    我摔，php不能使用同名的class名实在是太烦躁了。
导致我根本没办法在代码层面像lpc那样自由的写房间，因为class name必须不同。
这样一来，daemon创建房间的时候就更糟心了，难道有一个房间就写一个new XXX？
最后的解决方法是，启动的时候读/d/，把所有房间的php文件都抓取出来，然后生
成/temp/roomcontrol.php这个文件，通过规范房间文件名和房间class名的关系，
自动生成new XXX，然后被roomd来extends。勉强算解决问题。。。累死我了。。
    注意，我这段文字使用的是长文本模式，就是<<<LONG LONG这样。。。。。
LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/eroad";
		$exits["west"] = "/d/fengyun/wroad";
		$exits["up"] = "/d/fengyun/tj";
		$this->set("exits",$exits);
		$npcs = array();
		$npcs["/n/fengyun/testnpc"] = 1;
		$npcs["/n/fengyun/testnpc2"] = 1;
		$npcs['/n/fengyun/guard'] = 4;
		$this->set("npcs",$npcs);
	}
}
?>
