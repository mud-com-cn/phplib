<?php
class App {
	var $SERVER_D;
	var $COMMAND_D;
	var $ROOM_D;
	var $LOGIN_D;
	var $HEARTBEAT_D;
	function __construct() {
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
                        if($f != '.' && $f != '..') {
                                $files[] = $f;
                        }
                }
                $str = "";
                $str = "<?php\nclass RoomControl {\n\tvar \$rooms = array();\n\tfunction init(){\n";
                forEach($files as $k => $v) {
                        $t = explode('.',$v);
                        if(count($t) == 2 && $t[1] == 'php') {
                                $str .= "\t\trequire_once(MUD_LIB.'/d/".$t[0].".php');\n";
                                $str .= "\t\t\$this->rooms['"."/d/".$t[0]."'] = new Room_d_".$t[0]."();\n";
                        }
                }
                $str .= "\t}\n}\n?>\n";
                $this->logFile($tempControlFileName,$str);

        }

}
?>
