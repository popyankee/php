﻿【使用中如果有什么问题可以反馈给我，或者你要是有什么想法也可以直接issues】。

#微信支付组件（服务商模式）
<h3>包含以下组件</h3>
<ul>
    <li>刷卡支付</li>
    <li>公众号支付（jsapi）</li>
    <li>扫码支付</li>
    <li>H5支付</li>
</ul>
<p>注：支付功能开通请参照微信支付相关文档，在测试以上功能时，请务必开通相关功能</p>
<h3>配置参数位置：ThinkPHP/Library/Vendor/weixin/WxPay.Config.php，请填写以下参数。</h3>
<pre>
<code>
	const APPID = '';
	const MCHID = '';
	const SUBMCHID = '';
	const KEY = '';
	const APPSECRET = '';
</code>
</pre>
<h3>更新信息</h3>
<ol>
    <li>公众号jsapi支付新增回调处理函数  <time>2017-09-15</time></li>
</ol>

=====================================================================
<br/>
#支付宝支付组件
<h3>包含以下组件</h3>
<ul>
    <li>创建订单+JSAPI唤起收银台支付（需开通当面付）</li>
    <li>手机网站支付（wap支付2.0接口）</li>
    <li>电脑网站支付</li>
</ul>

