<?php

declare(strict_types=1);

namespace App\ViewModels\Seminar;

use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Collection;
use Spatie\ViewModels\ViewModel;

class EditSeminar extends ViewModel
{
    public string $indexUrl;

    public function __construct(
        public Seminar $seminar
    ) {
        $this->indexUrl = action([SeminarBackendController::class, 'index']);
    }

    public function seminar(): Seminar
    {
        return $this->seminar ?? new Seminar();
    }

    public function types(): array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
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

    /**
     * @return Collection|array
     */
    public function facilitators(): Collection|array
    {
        return User::query()
            ->select(['id', 'name', 'firstname'])
            ->get();
    }
}
