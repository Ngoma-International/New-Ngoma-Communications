<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\ClassRoom;

use App\Http\Controllers\Controller;

class ClassRoomBackendController extends Controller
{
    public function index()
    {
        return view('backend.domain.rooms.index');
    }
}
