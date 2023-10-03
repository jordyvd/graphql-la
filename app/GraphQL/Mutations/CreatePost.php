<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\DB;

final class CreatePost
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $id = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'title' => $args['title'],
            'content' => 'This is my first post',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return DB::table('posts')->where('id', $id)->first();
    }
}
