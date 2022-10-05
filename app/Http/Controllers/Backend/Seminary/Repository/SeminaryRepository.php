<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Seminary\Repository;

use App\Models\Seminary;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

final class SeminaryRepository
{
    public function getElements(): Collection|array
    {
        return Seminary::query()
            ->orderByDesc('created_at')
            ->get();
    }

    public function store($attributes)
    {
        // TODO: Implement store() method.
    }

    public function show(Model $model)
    {
        // TODO: Implement show() method.
    }

    public function update(Model $model, $attributes)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
    }
}
