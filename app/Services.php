<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
	 protected $table = 'services_mst';
    protected $primaryKey = 'servicesId';
    protected $fillable=['services','price','deleteData','createdBy','updatedBy'];
}
