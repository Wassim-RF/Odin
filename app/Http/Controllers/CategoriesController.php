<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategorieServices;
use App\Http\Requests\categorieRequest;

class CategoriesController extends Controller
{
    public function store(categorieRequest $categorieRequest , CategorieServices $categorieServices) {
        $data = [
            'title' => $categorieRequest->categorie_title,
            'description' => $categorieRequest->categorie_description,
            'user_id' => auth()->user()->id
        ];

        $categorieServices->createCategorie($data);

        return redirect()->back()->with('success' , 'La categorie est creer en success');
    }
}
