<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Category\Repository;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

final class CategoryRepository implements CategoryRepositoryInterface
{
    public function getElements(): Collection|array
    {
        return Category::query()
            ->select([
                'id',
                'name'
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function store($attributes): Model|Builder
    {
        $category = Category::query()
            ->create([
                'name' => $attributes->input('name')
            ]);
        session()->flash('success', "Category add with successfully");

        return $category;
    }

    public function show(Model $model): Model|Collection|Builder|array|null
    {
        return Category::query()
            ->find($model);
    }

    public function update(Model $model, $attributes): Model|Collection|Builder|array|null
    {
        $category = $this->show($model);
        $category->update([
            'name' => $attributes->input('name')
        ]);
        session()->flash('success', "Category update with successfully");

        return $category;
    }

    public function delete(Model $model): Model|Collection|Builder|array|null
    {
        $category = $this->show($model);
        $category->delete();
        session()->flash('success', "Category delete with successfully");
        return $category;
    }
}
