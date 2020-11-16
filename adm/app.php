<?php
class App {
	var $SERVER_D;
	var $COMMAND_D;
	var $ROOM_D;
	var $LOGIN_D;
	var $HEARTBEAT_D;
	var $NPC_D;
	function __construct() {
	}

	function setup() {
		$this->makeNpcTempControl();
		require_once(MUD_LIB.'/daemons/npcd.php');
		$this->NPC_D = new Npcd();
		$this->NPC_D->init();	
	
		$this->makeCommandTempControl();
		require_once(MUD_LIB.'/daemons/commandd.php');
		$this->COMMAND_D = new Commandd();
		$this->COMMAND_D->init();

		$this->makeRoomTempControl();
		require_once(MUD_LIB.'/daemons/roomd.php');
                $this->ROOM_D = new Roomd();
                $this->ROOM_D->init();

		require_once(MUD_LIB.'/daemons/serverd.php');
		$this->SERVER_D = new Serverd(); 
		$this->SERVER_D->init();

		require_once(MUD_LIB.'/daemons/logind.php');
		$this->LOGIN_D = new Logind();
		$this->LOGIN_D->init();

		require_once(MUD_LIB.'/daemons/heartbeatd.php');
                $this->HEARTBEAT_D = new Heartbeatd();
                $this->HEARTBEAT_D->init();

		
	}
	function logFile($file,$s) {
		$fd = fopen($file,'w');
		fwrite($fd,$s);
		fclose($fd);
	}

	function makeCommandTempControl() {
		$tempControlFileName = MUD_LIB.'/temp/commandcontrol.php';

		$dirname = MUD_LIB."/cmds/";
		$files = array();
		$d = dir($dirname);
		while($f = $d->read()) {
			if($f != '.' && $f != '..') {
				$files[] = $f;
                	}
		}
		$str = "";
		$str = "<?php\nclass CommandControl {\n\tvar \$cmds = array();\n\tfunction init(){\n";
		forEach($files as $k => $v) {
			$t = explode('.',$v);
			if(count($t) == 2 && $t[1] == 'php') {
				$str .= "\t\trequire_once(MUD_LIB.'/cmds/".$t[0].".php');\n";
				$str .= "\t\t\$this->cmds['".$t[0]."'] = new Cmd_".$t[0]."();\n";
			}
		}
		$str .= "\t}\n}\n?>\n";
		$this->logFile($tempControlFileName,$str);

	}
	function makeRoomTempControl() {
                $tempControlFileName = MUD_LIB.'/temp/roomcontrol.php';

                $dirname = MUD_LIB."/d/";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..' && is_dir($dirname.$f)) {
                                $files[] = $f;
                        }
                }
                $str = "";
                $str = "<?php\nclass RoomControl {\n\tvar \$rooms = array();\n\tfunction init(){\n";
                forEach($files as $k => $v) {
			$d2 = dir($dirname.$v."/");
			while($f2 = $d2->read()) {
				if($f2 != '.' && $f2 != '..' && !is_dir($f2)) {
                        		$t = explode('.',$f2);
		                        if(count($t) == 2 && $t[1] == 'php') {
        		                        $str .= "\t\trequire_once(MUD_LIB.'/d/".$v."/".$t[0].".php');\n";
                		                $str .= "\t\t\$this->rooms['"."/d/".$v."/".$t[0]."'] = new Room_d_".$v."_".$t[0]."();\n";
						$str .= "\t\t\$this->rooms['"."/d/".$v."/".$t[0]."']->reset();\n";
                        		}
				}
                }	}
                $str .= "\t}\n}\n?>\n";
                $this->logFile($tempControlFileName,$str);

        }

	function makeNpcTempControl() {
                $tempControlFileName = MUD_LIB.'/temp/npccontrol.php';

                $dirname = MUD_LIB."/n/";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..' && is_dir($dirname.$f)) {
                                $files[] = $f;
                        }
                }
                $str = "";
                $str = "<?php\nclass NpcControl {\n\tvar \$npcs = array();\n\tfunction init(){\n";
                forEach($files as $k => $v) {
                        $d2 = dir($dirname.$v."/");
                        while($f2 = $d2->read()) {
                                if($f2 != '.' && $f2 != '..' && !is_dir($f2)) {
                                        $t = explode('.',$f2);
                                        if(count($t) == 2 && $t[1] == 'php') {
                                                $str .= "\t\trequire_once(MUD_LIB.'/n/".$v."/".$t[0].".php');\n";
                                                $str .= "\t\t\$this->rooms['"."/d/".$v."/".$t[0]."'] = new Npc_d_".$v."_".$t[0]."();\n";
                                        }
                                }
                }       }
                $str .= "\t}\n}\n?>\n";
                $this->logFile($tempControlFileName,$str);

        }
}
?>
