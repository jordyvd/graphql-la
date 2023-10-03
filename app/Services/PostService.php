<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class PostService
{
    public function getPosts()
    {
        return DB::table('posts')->get();
    }

    public function getPost($id)
    {
        return DB::table('posts')->where('id', $id)->first();
    }

    public function createPost($data)
    {
        return DB::table('posts')->insert($data);
    }
}