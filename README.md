# 119Drive in BNU

### 前端

没有计划做前段，能用就行了，有缘者下一个 YAAW 吧

### 后端

* frp
* ssr
* aria2
* vsftpd
* Padavan
* VPS ( Windows XP; DO SFO1 )

![Network](./res/network.png)

### 配置

* 添加DNS地址172.22.109.96（首选)
* 访问 `ftp://www.119drive.com` 下载YAAW.zip并解压到本地任意路径（正好测试DNS解析是否正确）
* 浏览器打开index.html（ 推荐保存为书签 ），点击右上角小扳手 JSON-RPC Path 设置为 `http://aria2.119drive.com/jsonrpc`
* 下载文件点击添加，再输入链接即可
* 使用百度云导出下载需要下载插件 [BaiduExporter](https://github.com/acgotaku/BaiduExporter)

### 取回文件

* 蜜汁 Ftp 被动模式，现在访问 `ftp://www.119drive.com` 或 `ftp://172.22.109.96` 即可，后者不用加DNS

### 提供校内内网穿透

* 目前使用 0.13.0 版本，token 详见 frpc.ini，参数设置见 [frp](https://github.com/fatedier/frp)

### 其他

* 感谢 [aria2](https://github.com/aria2/aria2) ，[frp](https://github.com/fatedier/frp) ，[ssr](https://github.com/breakwa11/shadowsocks-rss) 以及 [Padavan](http://www.right.com.cn/forum/thread-161324-1-1.html) 的作者以及让我能将学校内所有流量都免掉，感谢实验课老师给的服务器
* aria2支持大部分链接，少数不支持，如 eD2k
* 移动硬盘已挂载（容量为1T），当私人云还是绰绰有余的
* 目前路由器 ftp 仅开放了3个端口，即仅能保证三个用户或应用占用ftp，建议下载下来使用，避免长时间占用端口以至他人不便
* 有校内 IP 之后，使用丝袜 local 可以建立 Socks5 代理，再将该端口以内网穿透的方式转到 WIN XP 的某个端口上，配合电脑上使用 Proxifier 即可免除校内所有无线的流量（只要连着BNU就可以上网）。IOS完全免流需要下载 Patatso 2、Shadowrocket 或其他 Socks5 代理软件，Android 则需要 Root 之后安装Proxydroid
* 宿舍拔掉 BNU-Mobile 的网线，TB 上买一个 POE 分线器即可。加上电源分线器 USB 硬盘带不起来
* 本项目有效期至2018年毕业，有问题可以开 Issue

 ![](./res/free.png)