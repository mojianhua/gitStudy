<?php
/*
1、添加git用户
sudo adduser git
2、添加用户名为git的密码
sudo passwd git
3、创建用户组名为git的用户组
sudo groupadd git
4、将用户名为git的用户添加到git用户组
sudo usermod -G git git
5、选择目录（略）
6、创建git目录
mkdir test_docs.git
7、进入目录(略)
8、初始化仓库—bare裸仓库
git init —bare
9、修改仓库权限为git用户
sudo chown -R git:git /srv/test_docs.git
10、禁止git用户通过shell登录
	10.1:设置git的git shell
		chsh git
	10.2:路径
		/usr/bin/git-shell
11、免密拉去
	11.1：生成ssh
	ssh-keygen -t rsa
	11.2：生成authorized_keys
	touch 700 authorized_keys
	13.3：将自己的id_rsa.pub存入authorized_keys，一个key一行