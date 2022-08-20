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

class allCategoryQuery extends Query
{
    protected $attributes = [
        'name' => 'allCategory',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::listOf(GraphQL::type("Category")));
        // return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        return Category::all();
        // return Category::all()->pluck("name")->toArray();
        // return [
        //     "lskdjlkjl"
        // ];
    }
}
