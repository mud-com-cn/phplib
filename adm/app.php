<?php
class App {
	var $SERVER_D;
	var $COMMAND_D;
	var $ROOM_D;
	var $LOGIN_D;
	var $HEARTBEAT_D;
	var $NPC_D;
	var $EMOTE_D;
	var $CALLOUT_D;
	var $SKILL_D;
	function __construct() {
	}

	function setup() {
		$this->makeSkillTempControl();
                require_once(MUD_LIB.'/daemons/skilld.php');
                $this->SKILL_D = new Skilld();
                $this->SKILL_D->init();

		require_once(MUD_LIB.'/daemons/calloutd.php');
                $this->CALLOUT_D = new Calloutd();
                $this->CALLOUT_D->init();

		require_once(MUD_LIB.'/daemons/emoted.php');		
		$this->EMOTE_D = new Emoted();
		$this->EMOTE_D->init();


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

		$str = "";
		$str = "<?php\nclass CommandControl {\n\tvar \$cmdsStd = array();\n\tvar \$cmdsUsr = array();\n\tvar \$cmdsWiz = array();\n\tfunction init(){\n";

		$dirname = MUD_LIB."/cmds/std";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..') {
                                $files[] = $f;
                        }
                }
		forEach($files as $k => $v) {
			$t = explode('.',$v);
			if(count($t) == 2 && $t[1] == 'php') {
				$str .= "\t\trequire_once(MUD_LIB.'/cmds/std/".$t[0].".php');\n";
				$str .= "\t\t\$cmdOb = new Cmd_".$t[0]."();\n";
				$str .= "\t\t\$this->cmdsStd['".$t[0]."'] = \$cmdOb;\n";
				$str .= "\t\t\$this->cmdsUsr['".$t[0]."'] = \$cmdOb;\n";
				$str .= "\t\t\$this->cmdsWiz['".$t[0]."'] = \$cmdOb;\n";
			}
		}

		$dirname = MUD_LIB."/cmds/usr";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..') {
                                $files[] = $f;
                        }
                }
                forEach($files as $k => $v) {
                        $t = explode('.',$v);
                        if(count($t) == 2 && $t[1] == 'php') {
                                $str .= "\t\trequire_once(MUD_LIB.'/cmds/usr/".$t[0].".php');\n";
                                $str .= "\t\t\$cmdOb = new Cmd_".$t[0]."();\n";
                                $str .= "\t\t\$this->cmdsUsr['".$t[0]."'] = \$cmdOb;\n";
                                $str .= "\t\t\$this->cmdsWiz['".$t[0]."'] = \$cmdOb;\n";
                        }
                }
		$dirname = MUD_LIB."/cmds/wiz";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..') {
                                $files[] = $f;
                        }
                }
                forEach($files as $k => $v) {
                        $t = explode('.',$v);
                        if(count($t) == 2 && $t[1] == 'php') {
                                $str .= "\t\trequire_once(MUD_LIB.'/cmds/wiz/".$t[0].".php');\n";
                                $str .= "\t\t\$cmdOb = new Cmd_".$t[0]."();\n";
                                $str .= "\t\t\$this->cmdsWiz['".$t[0]."'] = \$cmdOb;\n";
                        }
                }

		$str .= "\t}\n}\n?>\n";
		$this->logFile($tempControlFileName,$str);

	}
	function makeSkillTempControl() {
                $tempControlFileName = MUD_LIB.'/temp/skillcontrol.php';

                $dirname = MUD_LIB."/skills/";
                $files = array();
                $d = dir($dirname);
                while($f = $d->read()) {
                        if($f != '.' && $f != '..' && is_dir($dirname.$f)) {
                                $files[] = $f;
                        }
                }
                $str = "";
                $str = "<?php\nclass SkillControl {\n\tvar \$skills = array();\n\tfunction init(){\n";
                forEach($files as $k => $v) {
                        $d2 = dir($dirname.$v."/");
                        while($f2 = $d2->read()) {
                                if($f2 != '.' && $f2 != '..' && !is_dir($f2)) {
                                        $t = explode('.',$f2);
                                        if(count($t) == 2 && $t[1] == 'php') {
                                                $str .= "\t\trequire_once(MUD_LIB.'/skills/".$v."/".$t[0].".php');\n";
                                                $str .= "\t\t\$this->skills['".$t[0]."'] = new Skill_".$v."_".str_replace("-","_",$t[0])."();\n";
                                        }
                                }
                }       }
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
                                                $str .= "\t\t\$this->npcs['"."/n/".$v."/".$t[0]."'] = new Npc_n_".$v."_".$t[0]."();\n";
                                        }
                                }
                }       }
                $str .= "\t}\n}\n?>\n";
                $this->logFile($tempControlFileName,$str);

        }
}
?>
