<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    public function index()
    {
        // return response()->json([
        //     'data' => Article::all()->map(function ($article){
        //         return [
        //             'type' => 'articles',
        //             'id' => (string)$article->getRouteKey(),
        //             'attributes' => [
        //                 'title' => $article->title,
        //                 'slug' => $article->slug,
        //                 'content' => $article->content,
        //             ],
        //             'links' => [
        //                 'self' => url('/api/v1/articles/'.$article->getRouteKey())
        //             ]
        //         ];
        //     })
        // ]);


            // dd(request('page.size'));
            $articles = Article::applySorts()->jsonPaginate();   
            return ArticleCollection::make($articles);


    }

    public function show(Article $article)
    {
        return ArticleResource::make($article);
    }

   
}
