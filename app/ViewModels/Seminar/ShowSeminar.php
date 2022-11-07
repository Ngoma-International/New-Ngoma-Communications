<?php

declare(strict_types=1);

namespace App\ViewModels\Seminar;

use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Models\Category;
use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

class ShowSeminar extends ViewModel
{
    public string $indexUrl;
    public string $editUrl;
    public string $deleteUrl;

    public function __construct(public Seminar $seminar)
    {
        $this->indexUrl = action([SeminarBackendController::class, 'index']);
        $this->editUrl = action([SeminarBackendController::class, 'edit'], $this->seminar);
        $this->deleteUrl = action([SeminarBackendController::class, 'destroy'], $this->seminar);
    }

    public function seminar(): Seminar
    {
        return $this->seminar;
    }

    public function getCategory(): Builder|Category|null
    {
        return Category::query()
            ->where('id', '=', $this->seminar->category_id)
            ->first();
    }

    public function getAuthor(): Model|Builder|null
    {
        return User::query()
            ->where('id', '=', $this->seminar->user_id)
            ->first();
    }

    public function getSeminarType(): Model|Builder|null
    {
        return SeminaryType::query()
            ->where('id', '=', $this->seminar->seminary_type_id)
            ->first();
    }
}
