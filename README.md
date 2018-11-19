## 119Drive in BNU

#### 简介

* 网络拓扑是这样的：
  ![Network](./res/network.png)

* 使用校内内网穿透实现，目前使用 0.16.1 版本。师弟的虚拟机，恕不提供端口。

* 网络拓扑IPv6的部分参考 [蛋蛋网的帖子](https://www.oiegg.com/viewthread.php?tid=2049043)

* 本项目不再维护，但是方法依然可用，目前需要连接BNU-Mobile才能使用免流，配合Proxifier（Mac / Win都有）、小火箭或者土豆丝（手机端）使用。

  ![](./res/free.png)


* 实际上不能使用某方法达到完全混淆的效果，但是可以实现部分（如：浏览网页文字、部分图片）的免流。不妨是最后的挣扎策略

#### 内网穿透

- 配置文件可参考本项目 [示例](./example)

- IPv6两端搭建好之后，等着 网络实验 / Linux 课程分配虚拟机

- 进入 [frp](https://github.com/fatedier/frp/releases) 下载对应操作系统版本以及路由器版本，分别放到虚拟机和路由器上

- 虚拟机做服务器，用到 `frps` 和 `frps_full.ini` ，路由器做客户端，用到 `frpc` 和 `frpc_full.ini`

- 0.10.0 版本以后的 frp 都默认使用特权模式（ privilege mode ），对照 [Example](https://github.com/fatedier/frp#example-usage) 修改配置文件。虚拟机修改特权模式的密钥、绑定端口、控制台端口、控制台用户名、控制台密码、端口复用等信息。客户端输入服务器IP、绑定端口、特权密钥等信息。

- Windows系统在 frps.exe 的文件夹中创建 `.bat` 文件，内容如下

  ```
  @echo off 
  if "%1" == "h" goto begin 
  mshta vbscript:createobject("wscript.shell").run("%~nx0 h",0)(window.close)&&exit 
  :begin

  start /b frps.exe -c frps_full.ini
  ```

- Linux在同上路径创建 `.sh` 文件，内容如下

  ```
  ./frps -c ./frps_full.ini &
  ```

- 分别点击 / 执行脚本即可，也可分别放到开机启动的地方

- 路由器使用 Padavan 或者 Lede 之类的，解压后修改 `frpc.ini` ，执行以下即可

  ```bash
  cd /path/to/frpc
  ./frpc -c ./frpc_full.ini &
  ```

- 如果想要使用 Ftp ，请打开路由器 Ftp 服务器（被动模式），防火墙开放 Ftp 的端口，最好限制一下权限

- 通过控制台 IP + 端口方式查看连接状态、流量、连接数等信息

- 使用 Proxifier Socks代理即可，校内 Wifi 限速1MB/s
