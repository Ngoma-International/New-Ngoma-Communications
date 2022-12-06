<?php

declare(strict_types=1);

namespace App\Castable;

use JessArcher\CastableDataTransferObject\CastableDataTransferObject;

class AddressCastable extends CastableDataTransferObject
{
    public string $country;
    public string $city;

    public function fromString(): string
    {
        return implode(', ', [
            $this->country,
            $this->city,
        ]);
    }
}
