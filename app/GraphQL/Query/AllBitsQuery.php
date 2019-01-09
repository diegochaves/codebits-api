<?php

namespace App\GraphQL\Query;

use App\Bit;
use Folklore\GraphQL\Support\Query;
use GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;

class AllBitsQuery extends Query
{
    protected $attributes = [
        'name' => 'allBits'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Bit'));
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $fields = $info->getFieldSelection();

        $bits = Bit::query();

        foreach ($fields as $field => $keys) {
            if ($field === 'user') {
                $bits->with('user');
            }

            if ($field === 'replies') {
                $bits->with('replies');
            }

            if ($field === 'likes_count') {
                $bits->with('likes');
            }
        }

        return $bits->latest()->get();
    }
}
