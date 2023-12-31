<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

final class Posts
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $procedure = "call get_posts(?)";
        $params = [
            $args['id']
        ];
        $data = DB::select($procedure, $params);
        foreach($data as $value){
            $user = DB::table('users')->where('id', $value->author_id)->first();
            $value->user = $user;
        }
        return $data;
    }
}
