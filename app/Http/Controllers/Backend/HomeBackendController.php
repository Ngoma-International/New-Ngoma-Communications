<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeBackendController extends Controller
{
    public function __invoke(): Renderable
    {
        return  view('backend.index');
    }
}
