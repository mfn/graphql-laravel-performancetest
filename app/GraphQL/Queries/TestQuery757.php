<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery757 extends Query
{
    protected $attributes = [
        'name' => 'test757'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test757');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

