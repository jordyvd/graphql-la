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
        return DB::select($procedure, $params);
    }
}
