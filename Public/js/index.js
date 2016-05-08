//商业贷款等额本息
function commerceDebx() {
    var a = $(".commerceDis").val(), //利率折扣
        b = $(".commerceRate").val() * a / 100 / 12, //月利率
        c = $(".commerceYear").val() * 12, //月数
        d = Math.pow(1 + b, c),
        e = d - 1, //分子
        f = $(".commerceMoney").val() * 10000, //本金
        g = (f * b * d) / e,//等额本息每期月供
        h = g * c,
        i = h - f;
    $(".commerceEvery").attr("value", g.toFixed(2)); //每月还款
    $(".commerceTotal").attr("value", h.toFixed(2)); //还款总额
    $(".commerceTotalli").attr("value", i.toFixed(2)); //还款利息
    benxiBill();
    function benxiBill() { 
	    var x, y,
	        j = 0;
	    for (var z = 0; z < c; z++) {
	        x = (f - (z * g - j) )* b;//【总贷款 -（（月份 * 月供）-累加的利息）】 * 利率=当月利息
	        y = g - x ;//当月应还本金
	        j = j + y;//累加的利息
	        console.log(x)
	        console.log(y)
	        console.log(j)
	        $("#cobi").append("<tr class=\"commerceBill\"><td>第" + (z + 1) + "期</td><td>" + y.toFixed(2) + "/" + x.toFixed(2) + "</td></tr>");
	    }
	}
}

//商业贷款等额本金
function commerceDebj() {
    var a = $(".commerceDis").val(),
        b = $(".commerceRate").val() * a / 100 / 12, //月利率
        c = $(".commerceYear").val() * 12, //月数
        d = $(".commerceMoney").val() * 10000, //本金
        e = d / c, //月供本金
        f = (d * c - e * c * (c - 1) / 2) * b,//利息
        g = f + d,
        capital2 = e + b * d;
    $(".commerceFirst").attr("value", capital2.toFixed(2));
    $(".commerceTotal4").attr("value", g.toFixed(2)); //还款总额
    $(".commerceTotalli4").attr("value", f.toFixed(2)); //还款利息
    $(".commerceBill").remove();
    benjinBill();
    function benjinBill() {
	    for (var i = 0; i < c; i++) {
	        f = (d - i * e) * b;//（总本金-当月*当月本金）* 月利率=当月利息
	        g = f + e;//当月还款=当月利息+当月本金
	        $("#cobill").append("<tr class=\"commerceBill\"><td>第" + (i + 1) + "期</td><td>" + g.toFixed(2) + "/" + f.toFixed(2) + "</td></tr>");
	    }
	}
}

function change(cl) {
    var cl = cl;
    if (cl == "1") {
        $(".1").show();
        $(".2").hide();
    } else {
        $(".1").hide();
        $(".2").show()
    }
    if (cl == "3") {
        $(".3").show();
        $(".4").hide();
    } else {
        $(".4").show();
        $(".3").hide();
    }
    if (cl == "5") {
        $(".5").show();
        $(".6").hide();
    } else {
        $(".6").show();
        $(".5").hide();
    }
}

//公积金折扣
function discount() {
    var area = $(".area").val(), //面积
        price = $(".price").val(),
        total = area * price,
        dis = $(".dis option:selected").val(),
        discount = dis * price,
        totaldis = discount * area;
    $(".total").attr("value", total.toFixed(2));
    $(".discount").attr("value", discount.toFixed(2));
    $(".totaldis").attr("value", totaldis.toFixed(2));
}

//公积金等额本息
function GongjijinDebx() {
    var a = $(".firstpay option:selected").val(), //首付
        b = $(".rate").val() / 100 / 12, //月利率
        c = $(".year").val() * 12, //月数
        d = Math.pow(1 + b, c),
        e = d - 1, //分子
        f = $(".totaldis").val() * (1 - a), //本金
        g = (f * b * d) / e,
        h = g * c,
        i = h - f;
    $(".capital").attr("value", g.toFixed(2)); //每月还款
    $(".totalin").attr("value", i.toFixed(2)); //还款利息
    $(".totalca").attr("value", h.toFixed(2)); //还款总额
    $(".bill").remove();
    benxiBill();
}
//公积金等额本金
function GongjijinDebj() {
    var a = $(".firstpay option:selected").val(),
        b = $(".rate").val() / 100 / 12, //月利率
        c = $(".year").val() * 12, //月数
        d = $(".totaldis").val() * (1 - a), //本金
        e = d / c, //月供本金
        f = (d * c - e * c * (c - 1) / 2) * b,
        g = f + d,
        capital2 = d / c + b * d;
    $(".capital2").attr("value", capital2.toFixed(2));
    $(".totalin2").attr("value", f.toFixed(2)); //还款利息
    $(".totalca2").attr("value", g.toFixed(2)); //还款总额
    benjinBill();
}

//公积金本金账单
function benjinBill() {
    var a = $(".firstpay option:selected").val(),
        b = $(".totaldis").val() * (1 - a), //总贷款
        c = $(".rate").val() / 100 / 12, //月利率
        d = $(".year").val() * 12, //月数
        e = b / d, //每月本金
        f, g;
    for (var i = 0; i < d; i++) {
        f = (b - i * e) * c;
        g = f + e;
        $("#bill").append("<tr class=\"bill\"><td>第" + (i + 1) + "期</td><td>" + g.toFixed(2) + "/" + f.toFixed(2) + "</td></tr>");
    }
}
//公积金本息账单
function benxiBill() {
    var a = $(".firstpay option:selected").val(),
        b = $(".totaldis").val() * (1 - a), //总贷款
        c = $(".rate").val() / 100 / 12, //月利率
        d = $(".year").val() * 12, //月数
        e = Math.pow(1 + c,d),
        f = (b * c * e) / (e - 1), //月供
        h, g,
        j = 0;
    for (var i = 0; i < d; i++) {
        h = (b - (i * f - j) )* c;//【总贷款 -（（月份 * 月供）-累加的利息）】 * 利率
        g = f - h ;//每期应还本金
        j = j + h;//累加的利息
        $("#bi").append("<tr class=\"bill\"><td>第" + (i + 1) + "期</td><td>" + g.toFixed(2) + "/" + h.toFixed(2)+ "</td></tr>");
    }
}



