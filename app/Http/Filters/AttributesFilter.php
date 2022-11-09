<?Php

namespace App\Http\Filters;

use Closure;

class AttributesFilter
{
    public $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function handle($request, Closure $next)
    {
        if (!$this->attributes) {
            return $next($request);
        }


        return $next($request)->whereHas('attributes', function ($query) {
            $query->whereIn('name', ['رنگ'])->whereIn('value', $this->attributes);
        });
    }
}
