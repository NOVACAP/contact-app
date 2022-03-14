<?php

namespace App\Models;

use App\Scopes\FilterScope;
use App\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }

    // public function scopeMyCustomFilter($query)
    // {
    //     if($companyId = request()->query('company_id'))
    //     {
    //         $query->where('company_id', $companyId);
    //     }

    //     if($search = request()->query('search'))
    //     {
    //         $query->where('first_name', 'LIKE', "%{$search}%");
    //     }

    //     return $query;
    // }

    public static function booted()
    {
        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new SearchScope);
    }
}
