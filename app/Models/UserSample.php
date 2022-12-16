<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSample extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'lastname',
    ];

    public $timestamps = false;
}
