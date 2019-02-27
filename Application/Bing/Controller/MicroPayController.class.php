<?php

namespace Bing\Controller;

use Common\Controller\WxpayBaseController;

class MicroPayController extends WxpayBaseController{


    public  function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
      $this->display("MicroPay/index");
    }

    /**
     * 发起支付请求
     */
    public function pay(){
        if (isset($_REQUEST["auth_code"]) && $_REQUEST["auth_code"] != "") {
            $auth_code =$_REQUEST["auth_code"];
            $input = new \WxPayMicroPay();
            $input->SetAuth_code($auth_code);
            $input->SetBody($_REQUEST['body']);
            $input->SetTotal_fee($_REQUEST['amt']);
            $input->SetOut_trade_no(\WxPayConfig::MCHID . date("YmdHis"));
            $microPay = new \MicroPay();
            $result=$microPay->pay($input);
            $this->tradeResult($result);
        }
    }

    /**
     * 支付结果处理
     * @param $result
     */
    private function tradeResult($result){
        switch($result['trade_state']){
            case 'SUCCESS':
                //交易成功
                break;
            case 'REFUND':
                //转入退款
                break;
            case 'NOTPAY':
                //未支付
                break;
            case 'CLOSED':
                //已关闭
                break;
            case 'REVOKED':
                //已撤销（刷卡支付）
                break;
            case  'USERPAYING':
                //用户支付中
                break;
            case 'PAYERROR':
                //支付失败(其他原因，如银行返回失败)
                break;
            default:
                //其他情况

        }
    }
}