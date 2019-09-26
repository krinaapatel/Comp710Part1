<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
     protected $table = 'discount_mst';
    protected $primaryKey = 'id';
    protected $fillable=['title','percentage','condition','age','from','to','deleteData','createdBy','updatedBy'];
}
