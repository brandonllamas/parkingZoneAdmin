<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value_parameter extends Model
{
    use HasFactory;
    protected  $table = "parameter_values";
    protected $primaryKey = "idValueParameter";


}
