<?php

namespace PhonePe\SDK\payments\v1\models\response;

class PgExternalCards extends PaymentOption
{
    public function __construct($enabled)
    {
        parent::__construct($enabled);
    }
    

    public function jsonSerialize(): array
    {
        return get_object_vars($this) + parent::jsonSerialize();
    }

}