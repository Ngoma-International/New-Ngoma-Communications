<?php

declare(strict_types=1);

namespace App\Castable;

use JessArcher\CastableDataTransferObject\CastableDataTransferObject;

class AddressCastable extends  CastableDataTransferObject
{
    public string $street;
    public string $venue;
    public string $state;

    public function fromString(): string
    {
        return implode(', ', [
            $this->street,
            $this->venue,
            $this->state
        ]);
    }
}
