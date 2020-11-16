<?php
class Heartbeatd {
	var $hbs = array();
	var $lastHbTime = 0;
	function start_heartbeat($obj) {
		if(!in_array($obj,$this->hbs))
			$this->hbs[] = $obj;
	}
	function stop_heartbeat($obj) {
		$idx = array_search($obj,$this->hbs);
		if($idx>=0) 
			array_splice($this->hbs,$idx,1);
	}
	function init() {

	}
	function doHeartBeat() {
		$t = time();
		$t = floor($t/HEART_BEAT)*HEART_BEAT;
		if( $t == $this->lastHbTime) {
			// already run hb in this HB time
		} else {
			$this->lastHbTime = $t;
			forEach($this->hbs as $k => $v) {
				$v->heart_beat();
			}
		}
	}
}
?>
