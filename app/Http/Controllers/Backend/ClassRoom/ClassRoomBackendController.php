<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\ClassRoom;

use App\Http\Controllers\Backend\ClassRoom\Repository\ClassRoomRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StorePodcastRequest;
use App\Models\ClassRoom;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ClassRoomBackendController extends Controller
{
    public function __construct(
        protected readonly ClassRoomRepository $repository
    )
    {
    }

    public function index(): Renderable
    {
        $rooms = [];

        return view('backend.domain.classroom.index', compact('rooms'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.classroom.create');
    }

    public function store(StorePodcastRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        return redirect()->route('admins.class-room.index');
    }

    public function destroy(ClassRoom $user): RedirectResponse
    {
        $this->repository->delete($user);

        return back();
    }
}
