<?php
namespace clown\alipay;

use Omnipay\Omnipay;

class AliPay
{
    public function __construct()
    {
        $gateway = Omnipay::create('Alipay_AopPage');
        $gateway->setSignType('RSA2'); // RSA/RSA2/MD5. Use certificate mode must set RSA2
        $gateway->setAppId('9021000137654936');
        $gateway->setPrivateKey('MIIEpQIBAAKCAQEAlgVxx2giS4KGrhrbgjpmn/2VQ5OnSoN27lLRzI3mxGXeII/NW4x/+gMBtlfQRBrvomfKPdFHycn0wGh86qiz1q5U5o6/PSTFGC7Tpt9/yRqaWXlfVsxkilZ7i8QhGyj6entA5CpALMpics15km4mO1vaZ1qP8IVQ0LkCAJs8anVPDRHKENYOyRwE4nL4Sl27KATXPJsLIUSQF+8sIARW/Yzttn07K4aybux2KIuvFgbxSdJg+NKvMHAN+U6vY8GqBC+KcYJTE/EYDf8bWOiT3NEMJupHofsZPQbOtUON553VR/bqLIjoJ++3mzBHCL4BFw/QrLdepxgHI0p7ttOTYQIDAQABAoIBAAgxVexY4H6VKzu41cH/5HjaRVuCZcFo+oa7WR+9pBuXoJDQqZtVSeviXCaUFxiRDAMnfeDwW+ZGNCqJykCaY+/WZ2aL5x+0sVrHu+FCFV1rKYC3YyB/WwI/BNI2LMSp8TvdHUcYk5aems/ALuJzR304X+4DARdWgHpVkCluUNdTaSFTqxN1wcOmiDujLQ9a8DzmNTzDryOigMLKSY6KLJhf6jMzAEhBDelqpuxot2zwbzXXoKeae6UvWei9yJqnQ0rQ5iiGRt/g5PXUpbXAotYBZhSsQlW8b+2aDquS1UVmyYcCK68ZJBuuk/FJb9/o61rBOWlgRGgwcKOTmhVvswECgYEA3mGOjGsMC+jKP7lFLwkeXsJ1RaMVGhqAKgAAck21MlQ9nX/dCy91QalJSCqsXN5e/+SwMdqkuM6eUi5Zkm33e55XPe+vg/OYqgbNY6JapcjRgyzq7Mz3yvpZw2PgcIim2jr8N6yK0XMgrZN817KrA08m8MaGD2Vq8wEPksp4FrECgYEArLN3ezlvgwajLYIz0PEix1fd9D1B2njhaThCiEPFukJqYah8B/tmedKLMX4BYWfym5zdn9R+19z9yc5FDp+JPMT2xZMH2sY8eUcY285rjeXqySHi0H8fp6sJcHxEp55VsHYTd9PWFu7718FchDKcYN740ENYc30giadTwSaY07ECgYEA17FsIApcPtjmAnTjA8ImcObP9GE/wHffw90IkdWJYG2Q7cjtT0ISy0M1TwgE8nbFUhIwS8q0ZoQRz8ghHQQIPSDRocNvS97kPlYmtPLuVUq43DCfFFuiJIA6vGeNc9k3bQg1RpLWelzeXz1ko5oqgSUuse78bMaDu3tV7ZzwaaECgYEAgRIP9hRS9wX65oQs3beaWomc5HDzyqgVL2JQty6PlEkW4K3fJMgLKnjkdrTJq1bYxtxR9qYFtqb/NdfnXKp3EufR1o+wix0lDS7JsV1wnLh85J1iupiHu/PkNiFp3ixDtoJIwoGbu8AYkIN+9X4tyWhbZKswa//UVYys1+pUxcECgYEA1tizZccVNR6ExAJSdSV0ii14zI701dxA85vA5/lCOxGqOq1GSIByuNlVYT+lVz+hqYxsjmOKYicu1hCLMtyKL0mXoMrCW7/m0x21K1oPj0v2iY134l79hBe6KSjfxje1/QrnN8hWAbhOFCqUsPnx9T7oNZmxpGk3WT9JLwRM/Y4=');
        $gateway->setAlipayPublicKey('MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlyhlklhRYaWnB7gRIbJrXDN/y1ZZIkR/NlC1rRxwQTsK7T9NHcHvd1/sCyfiHYDL6GrCrz+JM8jjheW6YOqciZRwdGzibwRlQCrTIo4oRy6ZZTh96fkYZkl3Q0q0Jg2RTAG494VIh4kMxABc0h8waHQZfZsvhNrERmNW1owVSICSQCxYe0+66vtcVzuQ4BgMBIf6uUANyp5whxuOD6m5V7yeAzirNYXZiaiqNs56KJT4j++AtU6eV+aETYxdPCXBFDnSRrxMm4TdnRlQaio3nvauQ8bENWBBabrnVz2/FDtI5qDlNsqxENJ3SjHy59iUqh+3sMaTJregP4AO6vKaOQIDAQAB'); // Need not set this when used certificate mode
        $gateway->setReturnUrl('http://erp.wljdzf.cn/return');
        $gateway->setNotifyUrl('http://erp.wljdzf.cn/notify');

        $response = $gateway->purchase()->setBizContent([
            'subject'      => 'test',
            'out_trade_no' => date('YmdHis') . mt_rand(1000, 9999),
            'total_amount' => '0.01',
            'product_code' => 'FAST_INSTANT_TRADE_PAY',
        ])->send();

        $url = $response->getRedirectUrl();

        hash($url);
    }
}