# 119Drive in BNU

### 前端

没有计划做前段，能用就行了，有缘者下一个YAAW吧（见配置）

### 后端

* frp
* ssr
* aria2
* vsftpd
* Padavan
* VPS ( Windows XP; DO SFO1 )

已经搭在路由器和两个服务器上了。

##### 一个小想法

XP没办法做丝袜的客户端很伤，实际使用中总觉得一个路由器的性能不够用，下载个东西经常高负载。前几天上了K2的车，初步打算用K2开ssr和Adbyby，用极路由3开aria2，vsftpd和frpc，等电源分线器到了就试试

### 配置

* 添加DNS地址172.22.109.96（首选)
* 访问`ftp://www.119drive.com/119drive`下载YAAW.zip（正好测试DNS解析是否正确）
* JSON-RPC Path设置为`http://rudolf:lTz961122@aria2.119drive.com:8080/jsonrpc`
	
* 使用百度云导出下载需要下载插件[BaiduExporter](https://github.com/acgotaku/BaiduExporter)

### 取回文件

* 蜜汁Ftp被动模式，现在访问`ftp://www.119drive.com`即可

### 其他

* 感谢[aria2](https://github.com/aria2/aria2)，[frp](https://github.com/fatedier/frp)，[ssr](https://github.com/breakwa11/shadowsocks-rss)以及[Padavan](http://www.right.com.cn/forum/thread-161324-1-1.html)的作者以及让我能将学校内所有流量都免掉，感谢网络实验课老师给的有校内IP的云服务器
* aria2支持大部分链接，少数不支持，如（eD2k）
* 目前路由器挂载的是一个SD卡（4G），等稳定后将移动硬盘挂载上去
* 如果有登不上的情况一般都是晚上在倒腾路由器，如果白天登不上一般第二天就可以了
* 有校内IP之后使用丝袜的local可以建立Socks5代理，再将代理端口以frp的方式代理出去，配合电脑上使用Proxifier即可免除校内所有无线的流量（只要连着BNU就可以上网），密码验证可以通过frp设置。IOS完全免流需要下载Patatso 2或其他Socks5代理软件，Android则需要Root之后安装Proxydroid
* 宿舍拔掉BNU-Mobile的网线，TB上买一个POE分线器+一个电源分线器即可解决两个路由器的供电问题
* 本项目有效期至2018年毕业，有问题可以开Issue