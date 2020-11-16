<?php
class RoomControl {
	var $rooms = array();
	function init(){
		require_once(MUD_LIB.'/d/center.php');
		$this->rooms['/d/center'] = new Room_d_center();
		require_once(MUD_LIB.'/d/tjin.php');
		$this->rooms['/d/tjin'] = new Room_d_tjin();
		require_once(MUD_LIB.'/d/eroad.php');
		$this->rooms['/d/eroad'] = new Room_d_eroad();
		require_once(MUD_LIB.'/d/bookshop.php');
		$this->rooms['/d/bookshop'] = new Room_d_bookshop();
		require_once(MUD_LIB.'/d/wroad.php');
		$this->rooms['/d/wroad'] = new Room_d_wroad();
		require_once(MUD_LIB.'/d/tj.php');
		$this->rooms['/d/tj'] = new Room_d_tj();
	}
}
?>
