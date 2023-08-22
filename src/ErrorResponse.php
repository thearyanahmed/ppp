<?php

namespace Thearyanahmed\Ppp;

class ErrorResponse
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function message()
    {
        return $this->data['message'];
    }
}
