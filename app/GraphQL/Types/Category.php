<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class Category extends GraphQLType
{
    protected $attributes = [
        'name' => 'Category',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            "name" => [
                "type" => Type::string()
            ],
            "is_visible" => [
                "type" => Type::boolean(),
            ],
            "shortInfo" => [
                "type" => Type::string()
            ],
            "cover" => [
                "type" => Type::string(),
                "resolve" => function ($data) {
                    return asset("/storage/" . $data->cover);
                }
            ]
        ];
    }
}
