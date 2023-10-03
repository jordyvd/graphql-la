<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\DB;

final class CreateClient
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $id = DB::table('clients')->insertGetId([
            'name' => $args['name'],
            'email' => 'email@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
        ]);

      //  return $id;

        return DB::table('clients')->where('id', $id)->first();
    }
}
