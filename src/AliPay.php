<?php
namespace clown\alipay;


use Yansongda\Pay\Pay;

class AliPay
{
    public function __construct()
    {
        $config = [
            'alipay' => [
                'default' => [
                    // 必填-支付宝分配的 app_id
                    'app_id' => '9021000137654936',
                    // 必填-应用私钥 字符串或路径
                    // 在 https://open.alipay.com/develop/manage 《应用详情->开发设置->接口加签方式》中设置
                    'app_secret_cert' => 'MIIEpQIBAAKCAQEAlgVxx2giS4KGrhrbgjpmn/2VQ5OnSoN27lLRzI3mxGXeII/NW4x/+gMBtlfQRBrvomfKPdFHycn0wGh86qiz1q5U5o6/PSTFGC7Tpt9/yRqaWXlfVsxkilZ7i8QhGyj6entA5CpALMpics15km4mO1vaZ1qP8IVQ0LkCAJs8anVPDRHKENYOyRwE4nL4Sl27KATXPJsLIUSQF+8sIARW/Yzttn07K4aybux2KIuvFgbxSdJg+NKvMHAN+U6vY8GqBC+KcYJTE/EYDf8bWOiT3NEMJupHofsZPQbOtUON553VR/bqLIjoJ++3mzBHCL4BFw/QrLdepxgHI0p7ttOTYQIDAQABAoIBAAgxVexY4H6VKzu41cH/5HjaRVuCZcFo+oa7WR+9pBuXoJDQqZtVSeviXCaUFxiRDAMnfeDwW+ZGNCqJykCaY+/WZ2aL5x+0sVrHu+FCFV1rKYC3YyB/WwI/BNI2LMSp8TvdHUcYk5aems/ALuJzR304X+4DARdWgHpVkCluUNdTaSFTqxN1wcOmiDujLQ9a8DzmNTzDryOigMLKSY6KLJhf6jMzAEhBDelqpuxot2zwbzXXoKeae6UvWei9yJqnQ0rQ5iiGRt/g5PXUpbXAotYBZhSsQlW8b+2aDquS1UVmyYcCK68ZJBuuk/FJb9/o61rBOWlgRGgwcKOTmhVvswECgYEA3mGOjGsMC+jKP7lFLwkeXsJ1RaMVGhqAKgAAck21MlQ9nX/dCy91QalJSCqsXN5e/+SwMdqkuM6eUi5Zkm33e55XPe+vg/OYqgbNY6JapcjRgyzq7Mz3yvpZw2PgcIim2jr8N6yK0XMgrZN817KrA08m8MaGD2Vq8wEPksp4FrECgYEArLN3ezlvgwajLYIz0PEix1fd9D1B2njhaThCiEPFukJqYah8B/tmedKLMX4BYWfym5zdn9R+19z9yc5FDp+JPMT2xZMH2sY8eUcY285rjeXqySHi0H8fp6sJcHxEp55VsHYTd9PWFu7718FchDKcYN740ENYc30giadTwSaY07ECgYEA17FsIApcPtjmAnTjA8ImcObP9GE/wHffw90IkdWJYG2Q7cjtT0ISy0M1TwgE8nbFUhIwS8q0ZoQRz8ghHQQIPSDRocNvS97kPlYmtPLuVUq43DCfFFuiJIA6vGeNc9k3bQg1RpLWelzeXz1ko5oqgSUuse78bMaDu3tV7ZzwaaECgYEAgRIP9hRS9wX65oQs3beaWomc5HDzyqgVL2JQty6PlEkW4K3fJMgLKnjkdrTJq1bYxtxR9qYFtqb/NdfnXKp3EufR1o+wix0lDS7JsV1wnLh85J1iupiHu/PkNiFp3ixDtoJIwoGbu8AYkIN+9X4tyWhbZKswa//UVYys1+pUxcECgYEA1tizZccVNR6ExAJSdSV0ii14zI701dxA85vA5/lCOxGqOq1GSIByuNlVYT+lVz+hqYxsjmOKYicu1hCLMtyKL0mXoMrCW7/m0x21K1oPj0v2iY134l79hBe6KSjfxje1/QrnN8hWAbhOFCqUsPnx9T7oNZmxpGk3WT9JLwRM/Y4=',
                    // 必填-应用公钥证书 路径
                    // 设置应用私钥后，即可下载得到以下3个证书
                    'app_public_cert_path' => '',
                    // 必填-支付宝公钥证书 路径
                    'alipay_public_cert_path' => '',
                    // 必填-支付宝根证书 路径
                    'alipay_root_cert_path' => '',
                    'return_url' => 'http://composer.ksum.cn/alipay/return',
                    'notify_url' => 'http://composer.ksum.cn/alipay/notify',
                    // 选填-第三方应用授权token
                    'app_auth_token' => '',
                    // 选填-服务商模式下的服务商 id，当 mode 为 Pay::MODE_SERVICE 时使用该参数
                    'service_provider_id' => '',
                    // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
                    'mode' => Pay::MODE_NORMAL,
                ]
            ]
        ];

        Pay::config($config);

        return Pay::alipay()->web([
            'out_trade_no' => ''.time(),
            'total_amount' => '0.01',
            'subject' => 'yansongda 测试 - 1',
            ]);
    }
}