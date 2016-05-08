<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="/calculator/Public/css/index.css" />
    <script type="text/javascript" src="/calculator/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/calculator/Public/js/index.js"></script>
</head>

<body>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="title"><?php echo ($vo["title"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="methodcon">
        <div class="method">
            <span style="margin:15px 0 0 5px;;display:inline-block">还款方式</span>
            <ul style="margin-right:5px;">
                <li class="li click" style="border-right:1px solid rgb(152,198,255)" onclick="change('1')">等额本息</li>
                <li class="li" onclick="change('2')">等额本金</li>
            </ul>
        </div>
        <div class="method" style="display:none">
            <span style="margin:15px 0 0 5px;;display:inline-block">还款方式</span>
            <ul style="margin-right:5px;">
                <li class="li click" style="border-right:1px solid rgb(152,198,255)" onclick="change('3')">等额本息</li>
                <li class="li" onclick="change('4')">等额本金</li>
            </ul>
        </div>
        <div class="method" style="display:none">
            <span style="margin:15px 0 0 5px;;display:inline-block">还款方式</span>
            <ul style="margin-right:5px;">
                <li class="li click" style="border-right:1px solid rgb(152,198,255)" onclick="change('5')">等额本息</li>
                <li class="li" onclick="change('6')">等额本金</li>
            </ul>
        </div>
    </div>
    <div class="con">
        <!-- 公积金贷款 -->
        <div class="content">
            <div class="basic">
                <table cellspacing="8px">
                    <tr>
                        <td width="80%">房号</td>
                        <td width="20%">
                            <input type="input">
                        </td>
                    </tr>
                    <tr>
                        <td>面积（㎡）</td>
                        <td>
                            <input type="input" class="area" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>原单价（元）</td>
                        <td>
                            <input type="input" class="price" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>原总价（元）</td>
                        <td>
                            <input type="input" class="total" value="" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>折扣</td>
                        <td>
                            <select class="dis">
                                <option value="0.95">95折</option>
                                <option value="0.97">97折</option>
                                <option value="0.98">98折</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>折扣单价（元）</td>
                        <td>
                            <input type="input" style="border:none" class="discount">
                        </td>
                    </tr>
                    <tr>
                        <td>折扣总价（元）</td>
                        <td>
                            <input type="input" style="border:none" class="totaldis">
                        </td>
                    </tr>
                </table>
                <input type="button" value="计算" id="calculate" class="calculate" />
            </div>
            <div class="load">
                <table cellspacing="8px">
                    <tr>
                        <td>首付</td>
                        <td>
                            <select class="firstpay">
                                <option value="0.3">30%</option>
                                <option value="0.4">40%</option>
                                <option value="0.5">50%</option>
                                <option value="0.6">60%</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>贷款年限</td>
                        <td>
                            <input type="text" class="year" pattern="[0-9]*" />
                        </td>
                    </tr>
                    <tr>
                        <td>利率</td>
                        <td>
                            <input type="input" value="3.12" class="rate" pattern="[0-9]*" />
                        </td>
                    </tr>
                    <tr class="1">
                        <td>每期还款（元）</td>
                        <td>
                            <input type="input" class="capital" style="border:none;">
                        </td>
                    </tr>
                    <tr class="2" style="display:none">
                        <td>首期还款（元）</td>
                        <td>
                            <input type="input" class="capital2" style="border:none;">
                        </td>
                    </tr>
                    <tr class="1">
                        <td width="80%">累计支付利息（元）</td>
                        <td>
                            <input type="input" class="totalin" style="border:none">
                        </td>
                    </tr>
                    <tr class="2" style="display:none">
                        <td width="80%">累计支付利息（元）</td>
                        <td>
                            <input type="input" class="totalin2" style="border:none">
                        </td>
                    </tr>
                    <tr class="1">
                        <td>累计还款总额（元）</td>
                        <td width="100px">
                            <input type="input" class="totalca" style="border:none">
                        </td>
                    </tr>
                    <tr class="2" style="display:none">
                        <td>累计还款总额（元）</td>
                        <td width="100px">
                            <input type="input" class="totalca2" style="border:none">
                        </td>
                    </tr>
                </table>
                <input type="button" value="计算" class="cal" id="cal" />
                <table cellspacing="5px" class="1" id="bi">
                    <tr>
                        <td width="60%">期&nbsp;&nbsp;&nbsp;数</td>
                        <td>本金/利息</td>
                    </tr>
                </table>
                <table cellspacing="5px" style="display:none" class="2" id="bill">
                    <tr>
                        <td width="60%">期数</td>
                        <td>还款/利息</td>
                    </tr>
                </table>
            </div>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="title ps">注明：<?php echo ($vo["ps"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 商业贷款 -->
        <div class="content">
            <div class="basic">
                <table cellspacing="8px">
                    <tr>
                        <td width="60%">贷款金额（万元）</td>
                        <td width="40%">
                            <input type="input" class="commerceMoney" />
                        </td>
                    </tr>
                    <tr>
                        <td>贷款期限（年）</td>
                        <td>
                            <input type="input" class="commerceYear" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>贷款利率（%）</td>
                        <td>
                            <input type="input" class="commerceRate" value="4.9" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>贷款利率折扣</td>
                        <td>
                            <input type="input" pattern="[0-9]*" class="commerceDis" value="1" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="load">
                <table cellspacing="8px">
                    <tr>
                        <td>贷款利率（%）</td>
                        <td>
                            <input type="text" value="4.9" />
                        </td>
                    </tr>
                    <tr class="3">
                        <td>每期还款</td>
                        <td>
                            <input type="input" style="border:none;" class="commerceEvery">
                        </td>
                    </tr>
                    <tr class="4" style="display:none">
                        <td>首期还款</td>
                        <td>
                            <input type="input" style="border:none;" class="commerceFirst">
                        </td>
                    </tr>
                    <tr class="3">
                        <td width="60%">累计支付利息（元）</td>
                        <td>
                            <input type="input" class="commerceTotalli">
                        </td>
                    </tr>
                    <tr class="4" style="display:none">
                        <td width="60%">累计支付利息（元）</td>
                        <td>
                            <input type="input" class="commerceTotalli4">
                        </td>
                    </tr>
                    <tr class="3">
                        <td>累计还款总额（元）</td>
                        <td width="100px">
                            <input type="input" class="commerceTotal">
                        </td>
                    </tr>
                    <tr class="4" style="display:none">
                        <td>累计还款总额（元）</td>
                        <td width="100px">
                            <input type="input" class="commerceTotal4">
                        </td>
                    </tr>
                </table>
                <input type="button" value="计算" class="commercecal" id="cal" />
                <table id="cobi" class="3">
                    <tr>
                        <td width="75%">期&nbsp;&nbsp;&nbsp;数</td>
                        <td>本金/利息</td>
                    </tr>
                </table>
                <table id="cobill" class="4" style="display:none">
                    <tr>
                        <td width="75%">期&nbsp;&nbsp;&nbsp;数</td>
                        <td>还款/利息</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 综合贷款 -->
        <div class="content">
            <div class="basic">
                <table cellspacing="5px">
                    <tr>
                        <td width="70%">公积金贷款金额（万元）</td>
                        <td width="30%">
                            <input type="input">
                        </td>
                    </tr>
                    <tr>
                        <td>公积金贷款利率（%）</td>
                        <td>
                            <input type="input" class="area" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>商业贷款金额（万元）</td>
                        <td>
                            <input type="input" class="price" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>商业贷款利率（%）</td>
                        <td>
                            <input type="input" class="total" value="" pattern="[0-9]*">
                        </td>
                    </tr>
                    <tr>
                        <td>商业贷款利率折扣</td>
                        <td>
                            <select class="dis">
                                <option value="0.95">95折</option>
                                <option value="0.97">97折</option>
                                <option value="0.98">98折</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>贷款期限（年）</td>
                        <td>
                            <input type="input" class="total" value="" pattern="[0-9]*">
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>还款日期（年月）</td>
                        <td><input type="date" style="border:none" class="total" value="" pattern="[0-9]*">
                        </td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
    <div class="information">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="left">置业顾问：<?php echo ($vo["adviser"]); ?></p>
            <p class="right">联系电话：<?php echo ($vo["tel"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="footer">
        <ul>
            <li>公积金贷款</li>
            <li>商业贷款</li>
            <li>组合贷款</li>
        </ul>
    </div>
    <script type="text/javascript">
    //还款方式
    $(".method li").click(function() {
        $(this).addClass("click").siblings().removeClass("click");
    });

    //tab切换功能
    $(".footer ul li").click(function() {
        $(this).addClass("fclick").siblings().removeClass("fclick");
        var index = $(".footer li").index(this);
        $(".con > div").eq(index).show().siblings().hide();
        $(".methodcon > div").eq(index).show().siblings().hide();
    });

    $("#calculate").click(function() {
        discount();
    });

    $("#cal").click(function() {
        GongjijinDebx();
        GongjijinDebj();

    });

    $(".commercecal").click(function() {
        /*$(".commerceBill").remove();*/
        commerceDebx()
        commerceDebj();
    });
    //默认设置
    $(function() {
        $(".footer ul li").eq(0).addClass("fclick");
        $(".con > div").eq(0).show().siblings().hide();
    });
    </script>
</body>

</html>