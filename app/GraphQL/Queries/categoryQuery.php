<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Category;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class categoryQuery extends Query
{
    protected $attributes = [
        'name' => 'category',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return GraphQL::type("Category");
    }

    public function args(): array
    {
        return [
            "id" => [
                "type" => Type::nonNull(Type::int())
            ]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        return Category::find($args['id']);
    }
}
