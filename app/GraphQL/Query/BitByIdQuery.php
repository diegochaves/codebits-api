<?php

namespace App\GraphQL\Query;

use App\Bit;
use Folklore\GraphQL\Support\Query;
use GraphQL;
use GraphQL\Type\Definition\Type;

class BitByIdQuery extends Query
{
    protected $attributes = [
        'name' => 'bitById'
    ];

    public function type()
    {
        return GraphQL::type('Bit');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        if (!$bit = Bit::find($args['id'])) {
            throw new \Exception('Resource not found');
        }

        return $bit;
    }
}
