<?php

namespace PhonePe\SDK\payments\v1\models\request\builders;

use PhonePe\SDK\payments\v1\models\request\paymentInstrument\UpiIntentPaymentInstrument;

class UpiIntentInstrumentBuilder
{

    private $targetApp;

    public function targetApp($targetApp): UpiIntentInstrumentBuilder
    {
        $this->targetApp = $targetApp;
        return $this;
    }

    public function build(): UpiIntentPaymentInstrument
    {
        return new UpiIntentPaymentInstrument($this->targetApp);
    }
}