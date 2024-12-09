<?php

namespace App\Admin\Repositories\Post;

use App\Models\Post;
use App\Admin\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }
}
