<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetsType extends Model
{
    use HasFactory;
    protected $fillable = [
        'assets_type_name',
        'assets_type_description',
    ];
}
