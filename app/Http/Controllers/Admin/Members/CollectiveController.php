<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Models\Collective;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CollectiveController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('admin.domain.collectif.index');
    }

    public function show(Collective $collective): Factory|View|Application
    {
        return view('admin.domain.collectif.show', compact('collective'));
    }


    public function destroy(Collective $collective)
    {
        //
    }
}
