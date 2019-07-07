<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery472 extends Query
{
    protected $attributes = [
        'name' => 'test472'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test472');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

