<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberStatusRequest;
use App\Repository\Members\MemberStatusRepository;
use Illuminate\Http\JsonResponse;

class MemberStatusController extends Controller
{
    public function __invoke(
        MemberStatusRequest $request,
        MemberStatusRepository $repository
    ): JsonResponse {
        $individual = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'individual' => $individual
        ]);
    }
}
