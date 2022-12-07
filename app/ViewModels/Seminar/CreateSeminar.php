<?php

declare(strict_types=1);

namespace App\ViewModels\Seminar;

use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Models\Facilitator;
use App\Models\SeminaryType;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class CreateSeminar extends ViewModel
{
    public string $indexUrl;

    public function __construct()
    {
        $this->indexUrl = action([SeminarBackendController::class, 'index']);
    }

    public function types(): array|Collection|\Illuminate\Support\Collection
    {
        return Type::query()
            ->select(['id', 'name'])
            ->get();
    }

    public function seminaries(): Collection|array
    {
        return SeminaryType::query()
            ->select(['id', 'name'])
            ->get();
    }

    public function facilitators(): Collection|array
    {
        return Facilitator::query()
            ->orderByDesc('created_at')
            ->get([
                'id',
                'username',
                'firstname'
            ]);
    }
}
