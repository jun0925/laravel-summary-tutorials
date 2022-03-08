<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // updated_at, created_at 컬럼을 사용하지 않도록 함
    public $timestamps = false;

    protected $fillable = ['title', 'body'];

    use HasFactory;
}
