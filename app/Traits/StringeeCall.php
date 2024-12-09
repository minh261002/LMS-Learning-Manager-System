<?php
namespace App\Traits;

use App\Traits\StringeeApi\StringeeCurlClient;

class StringeeCall
{
    protected $keySid;
    protected $keySecret;
    protected $url;
    protected $fromNumber;

    public function __construct()
    {
        $this->keySid = env('STRINGEE_SID_KEY');
        $this->keySecret = env("STRINGEE_SECRET_KEY");
        $this->url = env("STRINGEE_URL");
        $this->fromNumber = env("STRINGEE_FROM_NUMBER");
    }

    public function callOut($to, $otp)
    {
        $curlClient = new StringeeCurlClient($this->keySid, $this->keySecret);
        $otp = implode('.', str_split($otp));

        $data = '{
            "from": {
                "type": "internal",
                "number": "' . $this->fromNumber . '",
                "alias": "' . $this->fromNumber . '"
            },

            "to": [{
                "type": "external",
                "number": "' . $to . '",
                "alias": "' . $to . '"
            }],

            "actions": [
                {
                    "action": "talk",
                    "text": "Mã xác thực của bạn là ' . $otp . '",
                    "loop": 2,
                    "speed": -1,
                },
            ]
        }';

        return $curlClient->post($this->url, $data, 15);
    }
}
