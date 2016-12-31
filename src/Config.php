<?php
/**
 * @author: helei
 * @createTime: 2016-07-14 17:47
 * @description: 支付相关的基础配置  无法被继承
 * @link      https://github.com/helei112g/payment/tree/paymentv2
 * @link      https://helei112g.github.io/
 *
 * @version 2.6.1
 */

namespace Payment;


final class Config
{
    const VERSION = 'dev-alipay';// 2.7.0

    //========================= ali相关接口 =======================//
    const ALI = 'ali';

    // 支付宝 PC 网页支付
    const ALI_CHANNEL_WEB = 'ali_pc_direct';

    // 支付宝 手机网页 支付
    const ALI_CHANNEL_WAP = 'ali_wap';

    /// 支付宝 手机app 支付
    const ALI_CHANNEL_APP = 'ali_app';

    // 支付宝 扫码支付  主要用于pc站点
    const ALI_CHANNEL_QR = 'ali_web';

    //========================= 微信相关接口 ======================//
    const WEIXIN = 'wx';

    // 微信退款单查询
    const WEIXIN_REFUND = 'refund';

    // 微信企业付款查询
    const WEIXIN_TRANS = 'transfer';

    // 微信公众账号 扫码支付  主要用于pc站点
    const WX_CHANNEL_QR = 'wx_web';

    // 微信 公众账号 支付
    const WX_CHANNEL_PUB = 'wx_pub';

    // 微信 APP 支付
    const WX_CHANNEL_APP = 'wx_app';

    // 支付的最小金额
    const PAY_MIN_FEE = '0.01';

    // 支付的最大金额
    const PAY_MAX_FEE = '100000.00';

    // 交易状态常量定义
    // 交易成功
    const TRADE_STATUS_SUCC = 'success';

    // 交易未完成
    const TRADE_STATUS_FAILD  = 'not_pay';

    // 交易退款成功
    const TRADE_STATUS_REFUND_SUCC = 'refund_succ';

    // 通知类型
    // 支付的交易通知
    const TRADE_NOTIFY = 'trade';

    // 退款的通知
    const REFUND_NOTIFY = 'refund';

    // 转账的通知
    const TRANSFER_NOTIFY = 'transfer';

    // =================== 2016.12.26 支付宝新版本信息 =====================//
    const ALI_API_VERSION = '1.0';// 支付宝新版本号

    // 支付宝的新版接口名称常量定义
    // app 支付
    const ALI_TRADE_APP = 'alipay.trade.app.pay';

    // wap 支付
    const ALI_TRADE_WAP = 'alipay.trade.wap.pay';

    // 扫码支付
    const ALI_TRADE_QR = 'alipay.trade.precreate';

    // 统一收单线下交易查询
    const ALI_TRADE_QUERY = 'alipay.trade.query';

    // 统一收单交易退款接口
    const ALI_TRADE_REFUDN = 'alipay.trade.refund';

    // 统一收单交易退款查询  未完成
    const ALI_REFUND_QUERY = 'alipay.trade.fastpay.refund.query';
}