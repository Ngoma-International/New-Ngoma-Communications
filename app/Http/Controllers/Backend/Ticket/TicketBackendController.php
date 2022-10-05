<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Ticket;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TicketBackendController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        return view('backend.domain.ticket.index');
    }
}
