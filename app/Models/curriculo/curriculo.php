<?php

namespace App\Models\curriculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class curriculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'curriculos';

    protected $fillable = [
        'first_name',
        'lasta_name',
        'email',
        'confirmado'
    ];
}
