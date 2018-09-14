<?php
declare(strict_types=1);

class Email
{
    public function ensureIsValidEmail(string $email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}
