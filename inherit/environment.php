<?php
require_once(MUD_LIB.'/inherit/save.php');
class Environment extends Save {
	var $inv = array();
	var $env = null;
	function find_in_inv($id) {
		$args = explode(" ",$id);
		if(count($args > 1)) {
			if(is_numeric($args[count($args)-1])) {
				$num = intval($args[count($args)-1]);
				array_pop($args);
				$newid = join(" ",$args);
				$c = 0;
				for($i=count($this->inv)-1;$i>=0;$i--) {
					if($this->inv[$i]->get("id") == $newid) {
						$c++;
						if($c==$num) {
							return $this->inv[$i];
						}
					}
				}
				return null;
			} else {
				for($i=count($this->inv)-1;$i>=0;$i--) {
					if($this->inv[$i]->get("id") == $id)
						return $this->inv[$i];
				}
				return null;
			}
		} else {
			for($i=count($this->inv)-1;$i>=0;$i--) {
				if($this->inv[$i]->get("id") == $id)
					return $this->inv[$i];
			}
			return null;
		}
	}

	function onMove($obj) {
		$this->inv[]=$obj;
	}
	function onLeave($obj) {
		$idx = array_search($obj,$this->inv);
		if($idx >= 0)
			array_splice($this->inv,$idx,1);
	}
	function move($obj) {
		if(!$obj)
			return 0;
		$obj->onMove($this);
		if($this->env == null) {
		} else {
			$this->env->onLeave($this);
		}
		$this->env = $obj;
		if($this->is_user())
			$GLOBALS['app']->COMMAND_D->doCommand($this,"look");
		return 1;
	}
	function leave() {
		if($this->env != null) {
			$this->env->onLeave($this);
			$this->env = null;
		}
	}
}
?>
