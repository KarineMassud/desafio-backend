<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['id', 'name', 'father', 'mother', 'created_at', 'updated_at', 'deleted_at'];

    public function subjects(): HasOne {
        return $this->hasOne(Subjects::class);


}
}
