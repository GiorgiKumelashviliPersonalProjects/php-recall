<?php

namespace App\Model;

class GeneralErrorMessage
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function __toString(): string
    {
        return json_encode([
            "error" => $this->message
        ], JSON_PRETTY_PRINT);
    }
}