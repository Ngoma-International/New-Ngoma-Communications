<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class MemberFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('frontend.domain.membre.index');
    }
}
