<?php
namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TestType1060 extends GraphQLType
{
    protected $attributes = [
        'name' => 'TestType1060',
        'description' => 'A test type'
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user'
            ]
        ];
    }
}
