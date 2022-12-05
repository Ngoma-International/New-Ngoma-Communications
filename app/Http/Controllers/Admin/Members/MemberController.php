<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Services\FlashMessagesServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    public function __construct(
        protected FlashMessagesServices $flashMessagesServices
    ){}

    public function __invoke(): Renderable
    {
        $members = Member::query()->orderByDesc('created_at')->get();

        return view('admin.domain.individual.index', compact('members'));
    }

    public function show(Member $member): Factory|View|Application
    {
        return view('admin.domain.individual.show', compact('member'));
    }

    public function destroy(Member $member): RedirectResponse
    {
        $member->delete();
        $this->flashMessagesServices->success('success', "Member supprimer avec success");
        return redirect()->route('admins.member.index');
    }
}
