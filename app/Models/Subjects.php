<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $table = 'Subjects';
    protected $fillable = ['id', 'title', 'created_at', 'updated_at', 'deleted_at'];


}
