<?php

namespace omnipay\paypalstandard\Message;

/**
 * Purchase Request
 */
class PurchaseRequest extends AuthorizeRequest
{
    public function getTransactionType()
    {
        return 'sale';
    }
}
