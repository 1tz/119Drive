# 119Drive in BNU
## 一、 前端

没有计划做前段，能用就行了，有缘者下一个YAAW吧（见配置）

## 二、 后端

已经搭在路由器上了

* Frp
* Aria2
* SSR
* Padavan
* VPS ( Windows XP; DO SFO1 )

## 三、配置

* 添加DNS地址172.22.109.96（首选)
* 访问

		ftp://www.119drive.com/119drive

	下载YAAW.zip（正好测试DNS解析是否正确）
* JSON-RPC Path设置为

		http://rudolf:lTz961122@aria2.119drive.com:8080/jsonrpc
	
* 使用百度云导出下载需要下载插件[BaiduExporter](https://github.com/acgotaku/BaiduExporter)

## 四、取回文件

* 蜜汁Ftp被动模式，现在访问`ftp://www.119drive.com`即可

## 五、其他

* 感谢[Aria2](https://github.com/aria2/aria2)，[Frp](https://github.com/fatedier/frp)，[Padavan](http://www.right.com.cn/forum/thread-161324-1-1.html)的作者以及破娃让我能将学校内所有流量都免掉，感谢网络实验课老师给的有校内IP的云服务器
* Aria2支持大部分链接，少数不支持，如（eD2k）
* 目前路由器挂载的是一个SD卡（4G），等稳定后将移动硬盘挂载上去
* <mark>如果有登不上的情况一般都是晚上在倒腾路由器，如果白天登不上一般第二天就可以了</mark>
* 有校内IP之后通过Frp和local可以建立Socks5代理，配合电脑上使用Proxifier，只不过没有密码验证罢了。亦可开启丝袜之影服务器