<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

class PostQuery
{
    public function getPosts($root, array $args)
    {
        $procedure = "call get_posts(?)";
        $params = [
            $args['id']
        ];
        return DB::select($procedure, $params);
    }
}