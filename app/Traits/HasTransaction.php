<?php

declare(strict_types=1);

namespace App\Traits;

trait HasTransaction
{
    public function generateTransaction(int $values): string
    {
        $characters = '0123456789';
        $randomString = '';
        for ($i = 0; $i < $values; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
