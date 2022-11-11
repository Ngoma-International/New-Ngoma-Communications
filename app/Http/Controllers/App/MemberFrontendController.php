<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\ViewModels\Frontend\MemberViewModel;
use Illuminate\Contracts\Support\Renderable;

class MemberFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new MemberViewModel();

        return view('frontend.domain.membre.index', compact('viewModel'));
    }
}
