<?php

namespace App\Helpers;

class Validation
{
    public function sanitize($value): string
    {
        return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
    }

    public function required($field, $value)
    {
        if (empty(trim($value))) {
            throw new \Exception("{$field} is required");
        }
    }

    public function email($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Invalid email format");
        }
    }

    public function minLength($field, $value, $length)
    {
        if (strlen($value) < $length) {
            throw new \Exception("{$field} must be at least {$length} characters long");
        }
    }

    public function minAge($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT) || $value < 10 || $value > 120) {
            throw new \Exception("Age must be a valid integer between 10 and 120");
        }
    }

    public function minHeight($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT)) {
            throw new \Exception("Height must be a valid integer");
        }

        if ($value < 50 || $value > 300) {
            throw new \Exception("Height must be between 50 and 300 cm");
        }
    }

    public function minWeight($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT)) {
            throw new \Exception("Weight must be a valid integer");
        }

        if ($value < 30 || $value > 500) {
            throw new \Exception("Weight must be between 30 and 500 kg");
        }
    }
}