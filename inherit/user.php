<?php
require_once(MUD_LIB.'/inherit/userskill.php');
Class User extends UserSkill {
	var $socket;
	function is_user() {return 1;}
        function __construct($socket) {
                $this->socket = $socket;
        }
        function onCommand($buf) {
                //socket_write($this->socket,$buf,strlen($buf));
                $GLOBALS['app']->COMMAND_D->doCommand($this,$buf);
        }
        function message($msg) {
                socket_write($this->socket,$msg,strlen($msg));
        }
        function shortname() {
                return HIY.$this->get('name')."(".$this->get('id').")".NOR;
        }
        function quit() {
                $this->save();
                $GLOBALS['app']->HEARTBEAT_D->stop_heartbeat($this);
                $GLOBALS['app']->SERVER_D->quit($this);
        }
        function heart_beat() {
                //$this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
        }
        function setup() {
                $GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
        }
	function save() {
                $str  = "";
		$str .= "dbase = ".json_encode($this->dbase)."\n";
		$str .= "skills = ".json_encode($this->skills)."\n";
		$str .= "skillenabled = ".json_encode($this->skillenabled)."\n";
                $this->asure_file($this->query_save_file());
                $this->save_file($this->query_save_file(),$str);
        
	}
	function restore() {
                if(file_exists($this->query_save_file())) {
                        $f = file_get_contents($this->query_save_file());
			$ff = explode("\n",$f);
			forEach($ff as $k=>$v) {
				$temp = explode(" = ",$v);
				if(count($temp)<=1) 
					continue;
				if(count($temp) == 2) {
					$key = $temp[0];
					$str = $temp[1];
				} else {
					$key = $temp[0];
					array_shift($temp);
					$str = join(" = ",$temp); //处理特殊情况，存档里有" = "的。。。
				}
				switch($key) {
				case "dbase":
                        		$data = json_decode($str,true);
                  	      		$this->dbase = $data;
					break;
				case "skills":
					$data = json_decode($str,true);
                                        $this->skills = $data;
					break;
				case "skillenabled":
                                        $data = json_decode($str,true);
                                        $this->skillenabled = $data;
                                        break;
				default :
					break;
				}
			}
                        return 1;
                } else {
                        return 0;
                }

        }
}
?>
