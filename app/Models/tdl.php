<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tdl extends Model
{
    use HasFactory;
    protected $table = 'tdl';

    protected $fillable = [
        'name',
        'descr',
        'status'
    ];
}
