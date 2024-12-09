<?php
namespace App\Traits\StringeeApi;

use App\Traits\StringeeApi\StringeeCurlClient;

class StringeeRestClient
{

    protected $_keySid;
    protected $_keySecret;
    protected $_baseUrl = 'https://test3.stringee.com:6883/';
    //	protected $_baseUrl = 'https://local.stringee.com:8000/';
    protected $_curlClient;

    public function __construct($keySid, $keySecret)
    {
        $this->_keySid = $keySid;
        $this->_keySecret = $keySecret;

        $this->_curlClient = new StringeeCurlClient($keySid, $keySecret);
    }

}