<?php

declare(strict_types=1);

namespace App\Repository\Members;

use App\Http\Requests\MemberStatusRequest;
use App\Models\Member;
use App\Traits\HasTransaction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MemberStatusRepository
{
    use HasTransaction;
    public function handle(MemberStatusRequest $request): Model|Builder|Member|null
    {
        $member = Member::query()
            ->where('id', '=', $request->input('member'))
            ->first();
        if ($request->input('status') === true) {
            if (!$member->matricule) {
                $member->update([
                    'status' => $request->input('status')
                ]);
            }
            $member->update([
                'status' => $request->input('status'),
                'matricule' => $this->generateTransaction(8)
            ]);
        } else {
            $member->update([
                'status' => $request->input('status')
            ]);
        }

        return $member;
    }
}
