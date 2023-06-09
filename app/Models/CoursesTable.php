<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesTable extends Model
{
    protected $table = 'courses_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
