<?php
namespace ats;

class Utils
{
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function randomDebitTx()
    {
        $prefix = 'DEBIT'.time().$this->generateRandomString(6);
        return $prefix;
    }

    public function randomCreditTx()
    {
        $prefix = 'CREDIT'.time().$this->generateRandomString(6);
        return $prefix;
    }
}