<?php
class Calloutd {
	var $callouts = array();
	var $lastcallout = 0;
	function start_call_out($ob,$foo,$t) {
		$time = time() + $t;
		$this->callouts[$time][] = array($ob,$foo);
	}
	function init() {}

	function doCallout() {
		$time = time();
		if($this->lastcallout < $time) {
			$this->lastcallout = $time; 
			forEach($this->callouts as $k => $v) {
				if($k<=$time) {
					forEach($v as $k2 => $v2) {
						$foo = $v2[1];
						if($v2[0])
							$v2[0]->$foo();
					}
					unset($this->callouts[$k]);
				}
			}
		}
	}
}
?>
