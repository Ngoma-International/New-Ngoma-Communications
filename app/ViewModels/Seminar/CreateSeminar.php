<?php

declare(strict_types=1);

namespace App\ViewModels\Seminar;

use App\Enums\RoleEnum;
use App\Http\Controllers\Backend\Seminar\SeminarBackendController;
use App\Models\Category;
use App\Models\SeminaryType;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class CreateSeminar extends ViewModel
{
    public string $indexUrl;

    public function __construct()
    {
        $this->indexUrl = action([SeminarBackendController::class, 'index']);
    }

    public function categories(): array|Collection|\Illuminate\Support\Collection
    {
        return Category::query()
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
        return User::query()
            ->select(['id', 'name', 'firstname'])
            ->where('role_id', '=', RoleEnum::Role_Facilitators)
            ->get();
    }
}
