<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $guarded = ['id'];

    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'students_id');
    }
}
