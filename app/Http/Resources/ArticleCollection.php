<?php

namespace App\Http\Resources;

use App\Models\Article;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public $collects = ArticleResource::class;

    public function toArray($request)
    {
        // 'data' => ArticleResource::collection($this->collection),
        return [
            'data' => $this->collection,
            // 'links' => [
            //     'self' => route('api.v1.articles.index')
            // ],
            // 'meta' => [
            //     'articles_count' => $this->collection->count()
            // ]
        ];
    }
}
