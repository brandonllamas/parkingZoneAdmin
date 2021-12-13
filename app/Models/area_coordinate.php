<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area_coordinate extends Model
{
    use HasFactory;
    protected $table = "coordinate";
    protected $primaryKey = "id";
}
