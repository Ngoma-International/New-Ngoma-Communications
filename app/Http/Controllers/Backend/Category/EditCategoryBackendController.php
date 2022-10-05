<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Backend\Category\Repository\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class EditCategoryBackendController extends Controller
{
    public function __construct(
        protected readonly CategoryRepositoryInterface $repository
    ){}

    public function __invoke(
        Category $category,
        UpdateCategoryRequest $categoryRequest
    ): RedirectResponse
    {
        $this->repository->update($category, $categoryRequest);

        return redirect()->route('');
    }
}
