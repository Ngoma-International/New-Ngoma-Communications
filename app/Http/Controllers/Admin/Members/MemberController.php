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

    public function show($member): Factory|View|Application
    {
        $member = Member::query()->where('id', '=', $member)->first();

        return view('admin.domain.individual.show', compact('member'));
    }

    public function destroy($member): RedirectResponse
    {
        $member = Member::query()->where('id', '=', $member)->first();
        $member->delete();
        $this->flashMessagesServices->success('success', "Member supprimer avec success");
        return redirect()->route('admins.member.index');
    }
}
