<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery661 extends Query
{
    protected $attributes = [
        'name' => 'test661'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test661');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

