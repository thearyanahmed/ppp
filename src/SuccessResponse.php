<?php

namespace Thearyanahmed\Ppp;

class SuccessResponse
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getCountryCodeAlpha2() : string
    {
        return $this->data['ppp']['countryCodeIsoAlpha2'];
    }

    public function getCountryCodeAlpha3() : string
    {
        return $this->data['ppp']['countryCodeIsoAlpha3'];
    }

    public function getMainCurrencyName() : string
    {
        return $this->data['ppp']['currencyMain']['name'];
    }

    public function getMainCurrencySymbol() : string
    {
        return $this->data['ppp']['currencyMain']['symbol'];
    }

    public function getPppConversionFactor() : float
    {
        return $this->data['ppp']['pppConversionFactor'];
    }

    public function getPPP() : float
    {
        return $this->data['ppp']['ppp'];
    }
}
