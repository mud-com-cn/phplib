<?php
require_once(MUD_LIB.'/inherit/dbase.php');
Class Save extends Dbase {
        function save_file($f,$s)
        {
                $fd = fopen($f,'w');
                fwrite($fd,$s);
                fclose($fd);
        }
        function save() {
                $str = json_encode($this->dbase);
                $this->asure_file($this->query_save_file());
                $this->save_file($this->query_save_file(),$str);
        }
        function asure_file($file) {
                $dirs = explode("/",$file);
                $dirname = "/";
                for($i=1;$i<count($dirs)-1;$i++) {
                        $dirname .= $dirs[$i]."/";
                        if(file_exists($dirname)){
                        } else {
                                mkdir($dirname);
                        }
                }
        }
        function restore() {
                if(file_exists($this->query_save_file())) {
                        $f = file_get_contents($this->query_save_file());
                        $data = json_decode($f,true);
                        $this->dbase = $data;
                        return 1;
                } else {
                        return 0;
                }

        }
        function query_save_file() {
		if($this->is_user()) {
                	return MUD_LIB."/data/".$this->get('id')[0]."/".$this->get('id').".o";
		} else {
			return MUD_LIB."/data/wrongsave.o";
		}
        }

}

