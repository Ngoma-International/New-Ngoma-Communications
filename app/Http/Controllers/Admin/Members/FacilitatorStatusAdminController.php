<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilitatorStatusRequest;
use App\Repository\Members\FacilitatorStatusRepository;
use Illuminate\Http\JsonResponse;

class FacilitatorStatusAdminController extends Controller
{
    public function __invoke(
        FacilitatorStatusRequest $request,
        FacilitatorStatusRepository $repository
    ): JsonResponse
    {
        $facilitator = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'facilitator' => $facilitator
        ]);
    }
}
