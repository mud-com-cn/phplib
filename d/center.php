<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_center extends Room {
	function __construct() {
		$this->set("name","中央广场");
		$this->set("long","我摔，php不能使用同名的class名实在是太烦躁了\n导致我根本没办法在代码层面像lpc那样自由的写房间，因为class name必须不同\n这样一来，daemon创建房间的时候就更糟心了，难道有一个房间就写一个new XXX?\n最后的解决方法是，启动的时候读/d/目录，把所有房间的php文件都抓取出来，\n然后生成/temp/roomcontrol.php这个文件\n，通过规范房间文件名和房间class名的关系，自动生成new XXX，然后被roomd来extends\n勉强算解决问题。。。累死我了。。");
		$exits = array();
		$exits["east"] = "/d/eroad";
		$exits["west"] = "/d/wroad";
		$exits["up"] = "/d/tj";
		$this->set("exits",$exits);
	}
}
?>
