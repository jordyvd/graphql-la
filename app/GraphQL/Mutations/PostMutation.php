<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\DB;

class PostMutation
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        switch ($resolveInfo->fieldName) {
            case 'createPost':
                return $this->createPost($args);
            case 'updatePost':
                return $this->updatePost($args['id'], $args['input']);
            case 'deletePost':
                return $this->deletePost($args['id']);
            default:
                // Manejar otros campos de mutación si es necesario
                return null;
        }
    }

    public function createPost($root, array $args)
    {
        $id = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'title' => $args['title'],
            'content' => 'This is my first post',
            'created_at' => nosw(),
            'updated_at' => now(),
        ]);

       return $id;
    }

    public function updatePost($root, array $args)
    {
        DB::table('posts')
            ->where('id', $args['id'])
            ->update([
                'title' => $args['title'],
                'updated_at' => now(),
            ]);
        return $args['title'];
    }

    public function deletePost($root, array $args)
    {
        DB::table('posts')
            ->where('id', $args['id'])
            ->delete();
        return $args['id'];
    }
}
