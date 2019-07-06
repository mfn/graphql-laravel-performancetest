<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery2339 extends Query
{
    protected $attributes = [
        'name' => 'test2339'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test2339');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

