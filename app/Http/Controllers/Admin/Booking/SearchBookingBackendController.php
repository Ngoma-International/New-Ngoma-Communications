<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class SearchBookingBackendController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('admin.domain.search.index');
    }
}
