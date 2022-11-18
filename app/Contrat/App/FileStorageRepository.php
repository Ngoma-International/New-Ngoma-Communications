<?php

declare(strict_types=1);

namespace App\Contrat\App;

use Illuminate\Http\Request;

interface FileStorageRepository
{
    public function storage($request);

    public function delete(Request $request);
}
