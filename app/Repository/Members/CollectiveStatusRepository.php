<?php

declare(strict_types=1);

namespace App\Repository\Members;

use App\Http\Requests\Backend\CollectiveStatusRequest;
use App\Models\Collective;
use App\Traits\HasTransaction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CollectiveStatusRepository
{
    use HasTransaction;

    public function handle(CollectiveStatusRequest $request): Model|Builder|Collective|null
    {
        $collective = Collective::query()
            ->where('id', '=', $request->input('collective'))
            ->first();
        if ($request->input('status') === true) {
            $collective->update([
                'status' => $request->input('status'),
                'matricule' => $this->generateTransaction(8)
            ]);
        } else {
            $collective->update([
                'status' => $request->input('status')
            ]);
        }
        return $collective;
    }
}
