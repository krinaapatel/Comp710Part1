<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $table = 'appointment_mst';
    protected $primaryKey = 'id';
    protected $fillable=['name','contact','address1','address2','city','state','country','pincode','date','time','services','age','price','discount','totalPrice','deleteData','createdBy','updatedBy'];
}
