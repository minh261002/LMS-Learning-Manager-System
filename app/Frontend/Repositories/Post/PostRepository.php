<?php

namespace App\Frontend\Repositories\Post;

use App\Models\Post;
use App\Frontend\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }
}