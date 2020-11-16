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
