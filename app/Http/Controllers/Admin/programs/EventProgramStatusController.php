<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventProgramStatusRequest;
use App\Repository\Programs\EventProgramRepository;
use Illuminate\Http\JsonResponse;

class EventProgramStatusController extends Controller
{
    public function __invoke(
        EventProgramStatusRequest $request,
        EventProgramRepository $repository
    ): JsonResponse {
        $program = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'program' => $program
        ]);
    }
}
