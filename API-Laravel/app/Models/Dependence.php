<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    use HasFactory;

    protected $table='dependences';
    protected  $primaryKey='id';

    protected  $fillable =
        [
            'code','description','position','state'
        ];
}
