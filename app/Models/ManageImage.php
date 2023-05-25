<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageImage extends Model
{
    use HasFactory;
    protected $fillable = ['Gallery_Image', 'Status'];

    protected $table = 'manage_image';
}
