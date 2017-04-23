# 119Drive in BNU
## 一、 前端

没时间做前端了，有缘者将就用吧

## 二、 后端

已经搭在路由器上了

* Frp
* Aria2
* Padavan
* VPS（Windows XP，有校内ip）

## 三、配置

* 下载一个Aria的前端放到本地
* JSON-RPC Path设置为

```
http://rudolf:lTz961122@aria2.leettt.com:8080/jsonrpc
```

* 添加DNS地址172.22.109.8（首选）

## 四、取回文件

#### `password => ltz961122`

1. 方法一（不推荐）

	```
	scp -P 6000 rudolf@/media/AiCard_01/aria/downloads/[下载的文件名] [本地路径]
	```

2. 方法二（简单易用，推荐）

* 执行以下命令

	```
	echo source = ~/.bashrc ~/.bash_profile && echo alias rscp='r_scp(){ scp -P 6000 rudolf@ssh.leettt.com:/media/AiCard_01/aria/downloads/$@ ~/Downloads/;}; r_scp $1' >> ~/.bashrc && source ~/.bashrc
	```

* 使用以下命令即可取回

	```
	rscp [文件名]
	```

## 五、其他

* 看情况再说