<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\Seminar;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

class ShowSeminarFrontend extends ViewModel
{
    public function __construct(public Seminar $seminar)
    {}

    public function type(): Model|Type|Builder|\Illuminate\Database\Query\Builder|null
    {
        return Type::query()
            ->where('id', '=', $this->seminar->type_id)
            ->first();
    }

    public function seminar(): Seminar
    {
        $seminar = Seminar::query()
            ->where('id', '=', $this->seminar->id)
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->first();
        return $seminar->load(['user', 'seminarType', 'type']);
    }
}
