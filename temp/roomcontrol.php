<?php
class RoomControl {
	var $rooms = array();
	function init(){
		require_once(MUD_LIB.'/d/center.php');
		$this->rooms['/d/center'] = new Room_d_center();
		require_once(MUD_LIB.'/d/eroad.php');
		$this->rooms['/d/eroad'] = new Room_d_eroad();
	}
}
?>
