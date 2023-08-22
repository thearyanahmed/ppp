<?php

namespace Thearyanahmed\Ppp;

class ErrorResponse
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getMessage() : string
    {
        return $this->data['message'];
    }
}
