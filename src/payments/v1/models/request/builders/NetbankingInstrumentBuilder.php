<?php

namespace PhonePe\SDK\payments\v1\models\request\builders;

use PhonePe\SDK\payments\v1\models\request\paymentInstrument\NetBankingPaymentInstrument;

class NetbankingInstrumentBuilder
{

    private $bankId;

    public function bankId($bankId): NetbankingInstrumentBuilder
    {
        $this->bankId = $bankId;
        return $this;
    }

    public function build(): NetBankingPaymentInstrument
    {
        return new NetBankingPaymentInstrument($this->bankId);
    }
}