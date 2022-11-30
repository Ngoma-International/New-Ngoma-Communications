<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MemberController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('admin.domain.individual.index');
    }

    public function show(Member $member): Factory|View|Application
    {
        return view('admin.domain.individual.show',compact('member'));
    }

    public function destroy(Member $member)
    {
        //
    }
}
