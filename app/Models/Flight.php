<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // protected $table = "table_name";
    // protected $primaryKey = "Column_name";
    protected $fillable = [
        'name','description', 'company', 'address', 'mobile',
    ];
}
