<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Models\Collective;
use App\Services\FlashMessagesServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CollectiveController extends Controller
{
    public function __construct(
        protected FlashMessagesServices $flashMessagesServices
    ) {
    }

    public function __invoke(): Renderable
    {
        $collectives = Collective::query()
            ->orderByDesc('created_at')
            ->get();

        return view('admin.domain.collectif.index', compact('collectives'));
    }

    public function show(Collective $collective): Factory|View|Application
    {
        return view('admin.domain.collectif.show', compact('collective'));
    }

    public function destroy(Collective $collective): RedirectResponse
    {
        $collective->delete();
        $this->flashMessagesServices->success('success', "Member supprimer avec success");
        return redirect()->route('admins.collective.index');
    }
}
