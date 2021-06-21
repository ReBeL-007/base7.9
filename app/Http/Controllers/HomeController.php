<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('categories.parentCategory.parentCategory.parentCategory')
            ->inRandomOrder()
            ->take(9)
            ->get();
        // dd($products);
        return view('index', compact('products'));
    }

    public function category(ProductCategory $category, ProductCategory $childCategory = null, $childCategory2 = null, $childCategory3 = null)
    {
        $products = null;
        $ids = collect();
        $selectedCategories = [];
        // dd($childCategory);
        if ($childCategory3) {
            $cat = $childCategory->childCategories()->where('slug', $childCategory2)->firstOrFail();
            $subCategory = $cat->childCategories()->where('slug', $childCategory3)->firstOrFail();
            $ids = collect($subCategory->id);
            $selectedCategories = [$category->id, $childCategory->id, $cat->id, $subCategory->id];
        } elseif ($childCategory2) {
            $subCategory = $childCategory->childCategories()->where('slug', $childCategory2)->firstOrFail();
            $ids = $subCategory->childCategories->pluck('id');
            $selectedCategories = [$category->id, $childCategory->id, $subCategory->id];
        } elseif ($childCategory) {
            $childCategory->load('childCategories.childCategories');
            $ids = collect();
            $selectedCategories = [$category->id, $childCategory->id];

            if ($childCategory->childcategories->count()) {
                foreach ($childCategory->childCategories as $subCategory) {
                    if ($subCategory->childcategories->count()) {
                        $ids = $ids->merge($subCategory->childCategories->pluck('id'));
                    } else {
                        $ids = $ids->merge($childCategory->childCategories->pluck('id'));
                    }
                }
            } else {
                $ids = collect($childCategory->id);
            }
        } elseif ($category) {
            $category->load('childCategories.childCategories.childCategories');
            $ids = collect();
            $selectedCategories[] = $category->id;

            if ($category->childCategories->count()) {
                foreach ($category->childCategories as $subCategory) {
                    if ($subCategory->childCategories->count()) {
                        foreach ($subCategory->childCategories as $cat) {
                            if ($cat->childCategories->count()) {
                                $ids = $ids->merge($cat->childCategories->pluck('id'));
                            } else {
                                $ids = $ids->merge($subCategory->childCategories->pluck('id'));
                            }
                        }
                    } else {
                        $ids = $ids->merge($category->childCategories->pluck('id'));
                    }
                }
            } else {
                $ids = collect($category->id);
            }
        }

        $products = Product::whereHas('categories', function ($query) use ($ids) {
                $query->whereIn('id', $ids);
            })
            ->with('categories.parentCategory.parentCategory.parentCategory')
            ->paginate(9);
        
        return view('index', compact('products', 'selectedCategories'));
    }

    public function product($category, $childCategory, $childCategory2, $productSlug, Product $product)
    {
        $product->load('categories.parentCategory.parentCategory');
        $childCategory2 = $product->categories->where('slug', $childCategory2)->first();
        $selectedCategories = [];

        if ($childCategory2 &&
            $childCategory2->parentCategory &&
            $childCategory2->parentCategory->parentCategory
        ) {
            $selectedCategories = [
                $childCategory2->parentCategory->parentCategory->id ?? null,
                $childCategory2->parentCategory->id ?? null,
                $childCategory2->id
            ];
        }

        return view('product', compact('product', 'selectedCategories'));
    }
}
