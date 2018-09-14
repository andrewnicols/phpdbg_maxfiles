<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function validProvider()
    {
        $addresses = [];
        for ($i = 0; $i < 25000; $i++)
        {
            $addresses[] = [$i];
        }

        return $addresses;
    }

    /**
     * @dataProvider    validProvider
     */
    public function testCanBeUsedAsStringFromProvider($addressid): void
    {
        $email = require("src/TestEmail.php");
        $this->assertTrue($email->ensureIsValidEmail("user-{$addressid}@example.com"));
    }
}
