<?php
namespace Src\Article\Repositories\EloquentBuilder;

use Illuminate\Database\Eloquent\Builder;

class ArticleBuilder extends Builder
{

    public function search(array $filters): self
    {
        $this->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%'.$search.'%')
                    ->orWhere('body', 'like', '%'.$search.'%');
            });
        });
        return $this;
    }

}
