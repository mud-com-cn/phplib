<?php
require_once(MUD_LIB.'/inherit/attack.php');
Class User extends Attack {
	var $socket;
	function user_level() {return $this->get("IS_WIZARD")?USER_LEVEL_WIZ:USER_LEVEL_USER;}
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
	function heal_up() {
		$dbase = $this->dbase;
		$jing_r = floor($dbase['max_jingli']/10)+1;
		$qi_r = floor($dbase['max_neili']/10)+1;
		$shen_r = floor($dbase['max_fali']/10)+1;
		if($dbase['eff_jing'] < $dbase['max_jing']) {
			$dbase['jing'] += $jing_r;
			if($dbase['jing'] > $dbase['eff_jing']) {
				$dbase['eff_jing']++;
				$dbase['jing'] = $dbase['eff_jing'];
			}
		} else {
			$dbase['eff_jing'] = $dbase['max_jing'];
			$dbase['jing'] += $jing_r;
			if($dbase['jing'] > $dbase['max_jing']) {
				$dbase['jing'] = $dbase['max_jing'];
			}
		}
		
		if($dbase['eff_qi'] < $dbase['max_qi']) {
                        $dbase['qi'] += $qi_r;
                        if($dbase['qi'] > $dbase['eff_qi']) {
                                $dbase['eff_qi']++;
                                $dbase['qi'] = $dbase['eff_qi'];
                        }
                } else {
                        $dbase['eff_qi'] = $dbase['max_qi'];
                        $dbase['qi'] += $qi_r;
                        if($dbase['qi'] > $dbase['max_qi']) {
                                $dbase['qi'] = $dbase['max_qi'];
                        }
                }
		if($dbase['eff_shen'] < $dbase['max_shen']) {
                        $dbase['shen'] += $shen_r;
                        if($dbase['shen'] > $dbase['eff_shen']) {
                                $dbase['eff_shen']++;
                                $dbase['shen'] = $dbase['eff_shen'];
                        }
                } else {
                        $dbase['eff_shen'] = $dbase['max_shen'];
                        $dbase['shen'] += $shen_r;
                        if($dbase['shen'] > $dbase['max_shen']) {
                                $dbase['shen'] = $dbase['max_shen'];
                        }
                }
		if($dbase['jingli']< $dbase['max_jingli']) {
			$dbase['jingli'] += $jing_r;
			if($dbase['jingli'] > $dbase['max_jingli'])
				$dbase['jingli'] = $dbase['max_jingli'];
		}
		
		if($dbase['neili']< $dbase['max_neili']) {
                        $dbase['neili'] += $qi_r;
                        if($dbase['neili'] > $dbase['max_neili'])
                                $dbase['neili'] = $dbase['max_neili'];
                }
		if($dbase['fali']< $dbase['max_fali']) {
                        $dbase['fali'] += $shen_r;
                        if($dbase['fali'] > $dbase['max_fali'])
                                $dbase['fali'] = $dbase['max_fali'];
                }

		$this->dbase = $dbase;
	}
        function heart_beat() {
                //$this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
		if($this->get("jing")<0 || $this->get("qi")<0 || $this->get("shen")<0) {
			$this->die();
			return;
		}
		$this->add_temp("heal_up",1);
		if($this->get_temp("heal_up")>= 10+rand(0,5)) { // 
			$this->heal_up();
			$this->set_temp("heal_up",0);
		}
		if(count($this->enemies)) {
			$enemy = $this->enemies[rand(0,count($this->enemies)-1)];
			if($enemy->env == $this->env) {
				$this->do_attack($enemy);
			}
		}
		
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
