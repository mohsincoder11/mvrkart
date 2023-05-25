<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageVideo extends Model
{
    use HasFactory;
    protected $fillable = ['videoURL'];

    protected $table = 'manage_video';
}
