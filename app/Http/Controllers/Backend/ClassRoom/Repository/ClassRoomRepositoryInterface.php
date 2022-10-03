<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\ClassRoom\Repository;

use Illuminate\Database\Eloquent\Model;

interface ClassRoomRepositoryInterface
{
    public function getElements();

    public function store($attributes);

    public function show(Model $model);

    public function update(Model $model, $attributes);

    public function delete(Model $model);
}