<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventProgramStatusRequest;
use App\Repository\Programs\EventProgramStatusRepository;
use Illuminate\Http\JsonResponse;

class EventProgramStatusController extends Controller
{
    public function __invoke(
        EventProgramStatusRequest $request,
        EventProgramStatusRepository $repository
    ): JsonResponse {
        $program = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'program' => $program
        ]);
    }
}
