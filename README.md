# tpmysql
来自thinkphp3.2中的model，数据库驱动只添加了mysql的。

# 代码来源说明：

 代码基本直接复制Thinkphp3.2,只作了少量修改，取消了命名空间，主要为了从ThinkPHP 中分离出来。functions.php删除了几个函数，重写了C 函数。

# 使用方法：

 修改config.php 中的配置信息，
 直接include("./start.php") 文件即可。
 具体使用方法请查看tp官方手册：<a href="http://document.thinkphp.cn/manual_3_2.html#model">ThinkPHP 3.2 官方手册</a>

 
 我的使用场景主要是为了在命令中操作数据库的时候的方便。
