<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameOfGeneralCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_category',
        'number_of_inputs',
    ];

    public function scopeSearch($query, $search)
    {
        if (!$search) {
            return $query;
        }

        return $query->where('name_of_category', 'LIKE', '%' . $search . '%')
            ->orWhere('number_of_inputs', 'LIKE', '%' . $search . '%');
    }

}
