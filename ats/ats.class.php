<?php
namespace ats;

require_once __DIR__ . "/types.class.php";

class ATS
{
    public $apiUrl;
    public $operatorToken;
    public $secretKey;
    public $param;

    /**
     * ATS constructor.
     * 
     * @param $apiUrl
     * @param $operatorToken
     * @param $secretKey
     */
    public function __construct($apiUrl, $operatorToken, $secretKey)
    {
        $this->apiUrl = $apiUrl;
        $this->operatorToken = $operatorToken;
        $this->secretKey = $secretKey;
        $this->param = '';
        $this->apiUrl = $apiUrl;
    }
    
    public function submit($urlPath, $requestJson)
    {
        $requestBody = json_encode($requestJson, true);
        $url = $this->apiUrl.$urlPath;

        $headers = array(
            'operator-token: '.$this->operatorToken,
            'secret-key: ' .$this->secretKey,
            'Content-Type: application/json',
            'Content-Length: '.strlen($requestBody)
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($ch);
        curl_close ($ch);

        return $result;
    }

    public function submit2($urlPath)
    {
        $url = $this->apiUrl.$urlPath;

        $headers = array(
            'operator-token: '.$this->operatorToken,
            'secret-key: ' .$this->secretKey,
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($ch);
        curl_close ($ch);

        return $result;
    }
}