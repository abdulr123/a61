<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'idstudents';

    // mematikan autoincrement
    public $incrementing = false;
    public $timestamps = true;
}
