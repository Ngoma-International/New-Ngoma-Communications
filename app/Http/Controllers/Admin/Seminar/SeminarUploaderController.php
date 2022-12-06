<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Seminar;

use App\Contrat\App\FileStorageRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreSeminarUploaderRequest;
use Illuminate\Http\Request;

class SeminarUploaderController extends Controller
{
    public function __invoke(
        StoreSeminarUploaderRequest $request,
        FileStorageRepository $repository
    ) {
        return $repository->storage(request: $request);
    }

    public function delete(
        Request $request,
        FileStorageRepository $repository
    ) {
        return $repository->delete($request);
    }
}
