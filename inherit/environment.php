<?php
require_once(MUD_LIB.'/inherit/dbase.php');
class Environment extends Dbase {
	var $inv = array();
	var $env = null;
	function find_in_inv($id) {
		

	}

	function onMove($obj) {
		$this->inv[]=$obj;
	}
	function onLeave($obj) {
		$idx = array_search($obj,$this->inv);
		if($idx >= 0)
			array_splice($this->inv,$idx);
	}
	function move($obj) {
		$obj->onMove($this);
		if($this->env == null) {
		} else {
			$this->env->onLeave($this);
		}
		$this->env = $obj;
		$GLOBALS['app']->COMMAND_D->doCommand($this,"look");
	}
	function leave() {
		if($this->env != null) {
			$this->env->onLeave($this);
			$this->env = null;
		}
	}
}
?>
