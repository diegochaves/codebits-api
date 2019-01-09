<?php

namespace App\GraphQL\Mutation;

use App\Bit;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;

class NewBitMutation extends Mutation
{
    protected $attributes = [
        'name' => 'newBit'
    ];

    public function type()
    {
        return GraphQL::type('Bit');
    }

    public function args()
    {
        return [
            'snippet' => [
                'name' => 'snippet',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required'],
            ],
        ];
    }

    public function authenticated($root, $args, $currentUser)
    {
        return !!$currentUser;
    }

    public function resolve($root, $args)
    {
        $bit = new Bit();

        $bit->user_id = auth()->user()->id;
        $bit->snippet = $args['snippet'];
        $bit->save();

        return $bit;
    }
}
