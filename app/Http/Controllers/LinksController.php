<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\linkRequest;
use App\Services\LinksServices;

class LinksController extends Controller
{
    public function store(linkRequest $linkRequest , LinksServices $linksServices) {
        $data = [
            'title' => $linkRequest->link_title,
            'url' => $linkRequest->link_url,
            'categorie_id' => $linkRequest->category_id,
            'user_id' => auth()->user()->id
        ];

        $link = $linksServices->createLink($data);

        if ($linkRequest->filled('link_tag')) {
            $link->tags()->attach($linkRequest->link_tag);
        }

        return redirect()->back();
    }
}
