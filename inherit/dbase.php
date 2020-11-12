<?php
class Dbase {
	var $dbase = array();
	var $temp_dbase = array();
	function set($p,$data) {
		return $this->dbase[$p] = $data;
	}
	function get($p) {
		return $this->dbase[$p];
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
                return $this->temp_dbase[$p];
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
