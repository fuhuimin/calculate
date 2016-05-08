<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Public/css/Login.css" />
    <title>Microblog Admin</title>
</head>

<body>
    <div class="wrapper">
        <form class="form" action="<?php echo U('/Index/login');?>" method="POST">
            <div class="container">
                <p class="a">管理后台</p>
                <p>
                    <input type="text" placeholder="请输入管理用户名" name="name" onfocus="this.placeholder=''" onblur="this.placeholder='请输入用户名'" required="required" />
                </p>
                <p>
                    <input type="text" placeholder="请输入管理密码" name="password" onfocus="this.placeholder=''" onblur="this.placeholder='请输入密码'" />
                </p>
                <input type="submit" value="CheckIn" id="button" />
            </div>
        </form>
    </div>
</body>

</html>