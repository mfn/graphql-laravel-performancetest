<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery558 extends Query
{
    protected $attributes = [
        'name' => 'test558'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test558');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

