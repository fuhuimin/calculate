<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
    .button {
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid rgb(179.179.179);
        background-color: white;
    }
    </style>
</head>

<body>
    <form method="POST">
            <table>
                <tr>
                    <td>电话：</td>
                    <td>
                        <input type="text" name="tel" >
                    </td>
                </tr>
                <tr>
                    <td>手机：</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>地址：</td>
                    <td>
                        <input type="text" name="address" >
                    </td>
                </tr>
            </table>
            <input type="submit" value="保存" class="button" />
    </form>
</body>

</html>