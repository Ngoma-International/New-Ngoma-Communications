<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Type\Repository;

use Illuminate\Database\Eloquent\Model;

interface TypeRepositoryInterface
{
    public function getElements();

    public function store($attributes);

    public function show(Model $model);

    public function update(Model $model, $attributes);

    public function delete(Model $model);
}
