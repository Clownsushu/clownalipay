<?php
namespace clown\alipay;

use Alipay\OpenAPISDK\Api\AlipayTradeApi;
use Alipay\OpenAPISDK\Util\AlipayConfigUtil;
use Alipay\OpenAPISDK\Util\Model\AlipayConfig;
use GuzzleHttp;

class AliPay
{
    protected $apiInstance;

    protected $alipayConfig;

    public function __construct()
    {
        $this->apiInstance = new AlipayTradeApi(new GuzzleHttp\Client());

        $this->alipayConfig = new AlipayConfig();
        $this->alipayConfig->setAppId('9021000137654936');
        $alipayConfig->setPrivateKey('MIIEpAIBAAKCAQEA1IyDInqhkLPH3Cz3+oBiVoOMzl7qg1blLi9oqYEtaXBDOlQA
UXr6gq0EYoqF3ZRsBY/JJewtvpv2vTlLs/Yg645I+rMwp6YXqm5qm9qcgrIywCC0
71+HJQbIq340rrk5IYYGIgOKO81JqL1e2qHNZpkjxed3SZhtO1VazAj7/6kUaiCk
lyPiu1sdqmhoPKVLV8Heyorvu3wzsBrdAHOoCss84KNmZ4Cn/dDimcBbbjjbTx7m
+Nb8yhGGCH+10sSgkhwCGrJZ/6hjnLfCf8CA+Yqez4lITSnqUqpGO5gqAKjN3K5N
Xe4+u6jkcTeRGHQtmTBYbuYmurt9CyOaHpp+wQIDAQABAoIBAEdUqKWnlhUj4Izp
ooc1EsuJ9nVDsVxGiz9Gtc89BOp/vHAUxM6TgQLd4bzYVDiamO385TqO2oM/gDzc
v6UzkrS62Y8ZF9kLiqGt0KVhZmkOOK31zAMRgh9Q+YNkJXYFv0Ca4/ACVB/hszin
5O9mobIu7qx6E7RlLTNeX8xdr4SKssueSiPYmM3FR35Dhy2Ystx5TvAG4OW6btt2
YIAp6yEweIyOpQgqq3hy2XpfAxuAGBJvne0YFII+bTDCIrWDZ0TBwR5HsubDbYMZ
ehu9MyLUXiFMFivThGQ5FU6n5oN4b5Z09bRjlQ/8VLdTmMgeQaJ1IXh1EnjtTm0i
QSG3p8kCgYEA+wnVRNLfGSQ0adrDz6FfL4kb/lpH5cs6VwyIFNZcCwFYrQUooluq
iZWBVBXdSUZnrUGRIkyPOnuFv77szMwAtHS+2fwsJ1426e0Z3qL+5Z7cOR72CuCQ
oMtUS25/h/MWPyf0YIvDS9rzVO+n4A4ryyVrlwY7m5USjZPVSVWpl2sCgYEA2L/v
fpA1RqolXFtgF6CbMDWWB8+pYtuF/i9xZm68w286cGsq2oBIJNe+dYXEU0jQFzu4
RYmkFqSk+BdAmgV128VbaYh1MLdkP+a08hJaTrIlgU15Pk9RPGb76x01cFwJAykp
bhLwPsu96NrtEAue8GZT4Egdn92RMsK+1/GNyYMCgYBes3frzazx3BGVuTxTEGpL
EWspCb/DtWXdvtF7It54HFrqcl7A2Nm9q1Otd84RvWiRGIH6sWz6v+xVyF2maHL/
oGb67sFtXIJUvugab9y+nK4xMjfZJJwKvImhJx8fFxnWW2k6Hp9e90sCSKJIyK/G
o+gxgd1stNDZ7eHxF0qx3wKBgQDFlzNczVnD8Zfdee8/msneSPtcY5Km7DhaYCWg
m5K5FszPbuLCDe+2pnaZ7DftNJN+mpKB0dgkTDOXdpsNzayDjIaozh0HLCfXmRmb
E9//nadTGK1OgEAuMDO3QglVRJFysDN0hQ8+L74QaINz/SQHQ0FzVEqtUe7rt10C
vtHiwQKBgQC7rnh6tK1OpAHxnZiUH2Go9tPK905vSFEAccbvPKMAETIkUkQ6stLJ
CT+gcsz1wRgDeURmyW/KeSgFq3qEqAX3pzpefMxkqS8byA2t4OrYQ1MoF1fDn1ID
kzT8e5U3fa+1aBa9j0pnRaCtAiNavj6RqmWm4CdhB74dvfXfJOsZzg==');
        // 密钥模式
        $alipayConfig->setAlipayPublicKey('MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1IyDInqhkLPH3Cz3+oBi
VoOMzl7qg1blLi9oqYEtaXBDOlQAUXr6gq0EYoqF3ZRsBY/JJewtvpv2vTlLs/Yg
645I+rMwp6YXqm5qm9qcgrIywCC071+HJQbIq340rrk5IYYGIgOKO81JqL1e2qHN
Zpkjxed3SZhtO1VazAj7/6kUaiCklyPiu1sdqmhoPKVLV8Heyorvu3wzsBrdAHOo
Css84KNmZ4Cn/dDimcBbbjjbTx7m+Nb8yhGGCH+10sSgkhwCGrJZ/6hjnLfCf8CA
+Yqez4lITSnqUqpGO5gqAKjN3K5NXe4+u6jkcTeRGHQtmTBYbuYmurt9CyOaHpp+
wQIDAQAB');
        $alipayConfigUtil = new AlipayConfigUtil($alipayConfig);
        $this->apiInstance->setAlipayConfigUtil($alipayConfigUtil);
        $model = new AlipayTradePayModel();
        $model->setOutTradeNo('20210817010101001');
        $model->setTotalAmount('0.011');
        $model->setSubject('测试商品');
        $model->setScene('bar_code');
        $model->setAuthCode('28763443825664394');

        try {
            $result = $this->apiInstance->pay($model);
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AlipayTradeApi->pay: ', $e->getMessage(), PHP_EOL;
            echo 'body: ', $e->getResponseBody(), PHP_EOL;
            echo 'header: ', $e->getResponseHeaders(), PHP_EOL;
        }
    }
}