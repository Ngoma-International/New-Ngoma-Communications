<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserStatusRequest;
use App\Repository\User\UserStatusRepository;
use Illuminate\Http\JsonResponse;

final class StatusUserBackendController extends Controller
{
    public function __invoke(
        UserStatusRequest $request,
        UserStatusRepository $repository
    ): JsonResponse {
        $seminar = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'seminar' => $seminar
        ]);
    }
}
