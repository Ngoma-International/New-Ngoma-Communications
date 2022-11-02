<?php

declare(strict_types=1);

namespace Scott\Scott\FilePont\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'images'
    ];
}
