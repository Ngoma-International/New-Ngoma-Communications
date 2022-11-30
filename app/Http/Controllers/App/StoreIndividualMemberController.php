<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class StoreIndividualMemberController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('app.domain.membre.create');
    }
}
