<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'born_at',
    ];

    
    /**
     * Scope a query to only include breed of a given filter.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilters($query, $filters)
    {
        if($filters->input('name')){
            $query->where('actors.name', 'LIKE', '%' . $filters->input('name') . '%');
        }

        return $query;

    }
}