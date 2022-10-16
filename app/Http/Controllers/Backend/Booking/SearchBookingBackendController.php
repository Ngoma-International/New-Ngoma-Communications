<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class SearchBookingBackendController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('backend.domain.search.index');
    }
}
