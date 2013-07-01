<?php


interface Paysera_WalletApi_Auth_SignerInterface
{

    /**
     * Signs request - adds needed headers, changes content or modifies the request in some other way
     *
     * @param Paysera_WalletApi_Http_Request $request
     */
    public function signRequest(Paysera_WalletApi_Http_Request $request);
}