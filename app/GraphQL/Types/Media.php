<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class Media extends GraphQLType
{
    protected $attributes = [
        'name' => 'Media',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            "name" => [
                "type" => Type::string()
            ],
            "size" => [
                "type" => Type::int()
            ],
            "order_column" => [
                "type" => Type::int(),
            ],
            "collection_name" => [
                "type" => Type::string()
            ],
            "uuid" => [
                "type" => Type::string(),
            ],
            "path" => [
                "type" => Type::string(),
                "resolve" => function ($data) {
                    return asset("storage/" . $data->id . "/" . $data->file_name);
                }
            ]
        ];
    }
}
