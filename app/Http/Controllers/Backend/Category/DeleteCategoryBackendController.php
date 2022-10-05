<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Backend\Category\Repository\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class DeleteCategoryBackendController extends Controller
{
    public function __construct(protected CategoryRepositoryInterface $repository){}

    public function __invoke(Category $category): RedirectResponse
    {
        $this->repository->delete($category);

        return back();
    }
}
