<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

final class Client
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $data = DB::table('clients')->get();
        foreach($data as $value){
            $user = DB::table('users')->where('id', $value->created_by)->first();
            $value->user = $user;
        }
        return $data;
    }
}
