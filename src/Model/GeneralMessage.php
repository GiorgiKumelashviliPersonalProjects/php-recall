<?php

namespace App\Model;

class GeneralMessage
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function __toString(): string
    {
        return json_encode([
            "message" => $this->message
        ], JSON_PRETTY_PRINT);
    }
}