<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Seminar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Seminar\SeminarStatusRequest;
use App\Repository\Seminar\SeminarStatusRepository;
use Illuminate\Http\JsonResponse;

class SeminarStatusBackendController extends Controller
{
    public function __invoke(
        SeminarStatusRequest $request,
        SeminarStatusRepository $repository
    ): JsonResponse {
        $seminar = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'seminar' => $seminar
        ]);
    }
}
