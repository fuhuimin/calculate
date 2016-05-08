<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
    body {
        background-color: #000;
        color: white;
        margin: 0 auto;
    }
    .content input{
        border-radius: 3px;
        height: 25px;
        border: 1px solid white;
    }
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 300px;
        margin-left: -250px;
        margin-top: -150px;
        text-align: center;
    }
    .content table {
        margin: 0 auto;
    }
    .button {
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid white;
        background-color: white;
        width: 30%;
    }
    </style>
</head>

<body>
    <div class="content">
        <form method="POST" action="<?php echo U('/Index/alter');?>">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table cellspacing="20px">
                    <tr>
                        <td>名称：</td>
                        <td>
                            <input type="text" name="title" value="<?php echo ($vo["title"]); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>注明：</td>
                        <td>
                            <input type="text" name="ps" value="<?php echo ($vo["ps"]); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>顾问：</td>
                        <td>
                            <input type="text" name="adviser" value="<?php echo ($vo["adviser"]); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>联系电话：</td>
                        <td>
                            <input type="text" name="tel" value="<?php echo ($vo["tel"]); ?>">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="保存" class="button" /><?php endforeach; endif; else: echo "" ;endif; ?>
        </form>
    </div>
</body>

</html>