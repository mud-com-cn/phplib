phplib....
用php实现的mudlib原型

git是https://github.com/mud-com-cn/phplib

demo在 telnet://mud.com.cn:4001

目前这个进度低的多，
封装了php的socket，然后从nodelib做了一部分功能的代码翻译工作。
daemon基本还没有，刚有容器，有俩房间，有一个look指令。。。

2020/11/16
房间和指令的问题处理完了
再补几个指令，把apply id()加上，然后save/restore
就完成了。。。

增加了heart_beat，处理方法和mudos类似，在backend的select后边去处理。

增加了save/restore相关函数

/d /n都做成分目录了
支持了房间包含npc

.
├── adm
│   ├── app.php
│   └── config.php
├── cmds
│   ├── go.php
│   ├── look.php
│   ├── quit.php
│   ├── save.php
│   └── say.php
├── d
│   └── fengyun
│       ├── bookshop.php
│       ├── center.php
│       ├── eroad.php
│       ├── tjin.php
│       ├── tj.php
│       └── wroad.php
├── daemons
│   ├── commandd.php
│   ├── heartbeatd.php
│   ├── logind.php
│   ├── npcd.php
│   ├── roomd.php
│   └── serverd.php
├── data
│   ├── \2407205630羨\2407205630羨d.ph0
│   │   └── \2407205630羨\2407205630羨d.ph0
│   └── a
│       └── akuma.o
├── etc
│   └── welcome
├── include
│   └── ansi.php
├── inherit
│   ├── dbase.php
│   ├── environment.php
│   ├── npc.php
│   ├── room.php
│   ├── save.php
│   └── user.php
├── main.php
├── n
│   └── fengyun
│       ├── guard.php
│       ├── testnpc2.php
│       └── testnpc.php
├── obj
│   └── user.php
├── README.md
├── server.log
└── temp
    ├── commandcontrol.php
    ├── npccontrol.php
    ├── objectcontrol.php
    ├── readme.txt
    └── roomcontrol.php

