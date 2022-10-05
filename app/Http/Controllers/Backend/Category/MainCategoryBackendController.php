<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Backend\Category\Repository\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class MainCategoryBackendController extends Controller
{
    public function __construct(
        protected readonly CategoryRepositoryInterface $categoryRepository
    ){}

    public function __invoke(): Renderable
    {
        $categories = $this->categoryRepository->getElements();

        return view('', compact('categories'));
    }
}
