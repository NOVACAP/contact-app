<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SearchScope implements Scope
{
    protected $searchColumns = ['first_name', 'last_name', 'email', 'company.name'];

    public function apply(Builder $builder, Model $model)
    {
        if ($search = request()->query('search')) {
            foreach ($this->searchColumns as $column) {
                $arr = explode('.', $column);
                if(count($arr) == 2)
                {
                    list($relationship, $col) = $arr;
                    $builder->orWhereHas('company', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                });
                }
                else
                {
                   $builder->orWhere('last_name', 'LIKE', "%{$search}%");
                }

            }
            // $builder->where('first_name', 'LIKE', "%{$search}%");
            // $builder->orWhere('last_name', 'LIKE', "%{$search}%");
            // $builder->orWhere('email', 'LIKE', "%{$search}%");

        }
    }
}
