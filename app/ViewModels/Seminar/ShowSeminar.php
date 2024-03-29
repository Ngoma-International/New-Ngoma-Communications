<?php

declare(strict_types=1);

namespace App\ViewModels\Seminar;

use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

/**
 * @template T
 *
 * @class ShowSeminar
 *
 * @author scotttresor <scotttresor@gmail.com>
 */
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

    public function type(): Model|Type|Builder|\Illuminate\Database\Query\Builder|null
    {
        return Type::query()
            ->where('id', '=', $this->seminar->type_id)
            ->first();
    }

    /**
     * @return User|null
     */
    public function getAuthor(): User|null
    {
        return User::query()
            ->where('id', '=', $this->seminar->facilitator_id)
            ->first();
    }

    /**
     * @return SeminaryType|null
     */
    public function getSeminarType(): SeminaryType|null
    {
        return SeminaryType::query()
            ->where('id', '=', $this->seminar->seminary_type_id)
            ->first();
    }
}
