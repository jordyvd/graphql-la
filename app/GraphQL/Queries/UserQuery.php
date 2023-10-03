<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

class userQuery
{
    public function getUsers($root, array $args)
    {
        return DB::table('users')->get();
    }

    public function getPostByUser($root, array $args)
    {
        return DB::table('posts')
        ->where('author_id', $args['author_id'])
        ->get();
    }

    public function getUser($root, array $args)
    {
        return DB::table('users')
        ->select('users.*', 'posts.*')
        ->join('posts', 'users.id', '=', 'posts.author_id')
        ->where('users.id', $args['id'])
        ->get();
    }
}