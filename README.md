phplib....
用php实现的mudlib原型

git是https://github.com/mud-com-cn/phplib

demo在 telnet://mud.com.cn:4001

2020/11/20

版本基本完备，可以战斗和死亡了

about INSTALL
1. php 7
2. 修改adm/config.php的两个配置：
   MUD_LIB phplib的绝对路径（最后包含phplib本身，没有最后一个/)
   MUD_PORT 服务端口

3. 在phplib目录下，使用
php main.php &
或者nohup php main.php 2>&1 &
启动
