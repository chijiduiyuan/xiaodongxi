<?php
	// 请选择签名类型，默认为md5商户根据自己要求
    $SIGN_TYPE = "MD5";
    // 支付系统密钥，
	$KEY = "nifaaafewfeejl41654301fsakfjsalK";
	//  支付（正式环境）
	 $GATEWAY_URL = "http://gate.starspay.com/cooperate/gateway.cgi";
	// 商户在支付平台的平台号
	$MERCHANT_ID = "1503745631";
	// 商户通知地址（请根据自己的部署情况设置下面的路径）

	 $MERCHANT_NOTIFY_URL = "http://172.247.193.210/poker/xhpayNotify.php";

     $COMMIT_URL = "http://172.247.193.210/";

     //支付版本的api的版本号
     $API_VERSION = "1.0.0.0";

     //网银支付
     $APINAME_PAY = "TRADE.B2C";
     //扫码支付
     $APINAME_SCANPAY = "TRADE.SCANPAY";
     //支付订单查询
     $APINAME_QUERY = "TRADE.QUERY";
     //退款申请
     $APINAME_REFUND = "TRADE.REFUND";
     //单笔委托结算
     $APINAME_SETTLE = "TRADE.SETTLE";
     //单笔委托结算查询
     $APINAME_SETTLE_QUERY = "TRADE.SETTLE.QUERY";
     //支付通知
     $APINAME_NOTIFY = "TRADE.NOTIFY";
     // H5支付
      $APINAME_H5PAY = "TRADE.H5PAY";
     //快捷支付
      $APINAME_QUICKPAY_APPLY="TRADE.QUICKPAY.APPLY";
      //快捷确认
      $APINAME_QUICKPAY_CONFIRM = "TRADE.QUICKPAY.CONFIRM";
?>