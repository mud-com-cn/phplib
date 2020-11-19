<?php
class Dbase {
	var $dbase = array();
	var $temp_dbase = array();
	function is_user() {return 0;}
	function is_npc() {return 0;}
	function is_room() {return 0;}
	function is_obj() {return 0;}
	function user_level() {return USER_LEVEL_NONE;}
	function message($msg) {}
	function shortname() {
		return $this->get("name")."(".$this->get("id").")";
	}
	function reset() {
		return 1;
	}
	
	function set($p,$data) {
		return $this->dbase[$p] = $data;
	}
	function get($p) {
		if(array_key_exists($p,$this->dbase))
			return $this->dbase[$p];
		else
			return 0;
	}
	function add($p,$data) {
		if(array_key_exists($p,$this->dbase)) {
			$this->set($p,$this->get($p)+$data);
		} else {
			$this->set($p,$data);
		}
	}
	function query_entire_dbase() {
		return $this->dbase;
	}
	function set_entire_dbase($d) {
		$this->dbase = $d;
	}
	function set_temp($p,$data) {
                return $this->temp_dbase[$p] = $data;
        }
        function get_temp($p) {
		if(array_key_exists($p,$this->temp_dbase))
	                return $this->temp_dbase[$p];
		else
			return 0;
        }
        function add_temp($p,$data) {
                if(array_key_exists($p,$this->temp_dbase)) {
                        $this->set_temp($p,$this->get_temp($p)+$data);
                } else {
                        $this->set_temp($p,$data);
                }
        }

	
}
?>
