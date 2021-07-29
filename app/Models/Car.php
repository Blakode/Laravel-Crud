<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // its possible to write custum db methods here to overide the existing ones 
    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description']; 

    protected $hidden = ['password','name'];
    
    // function associates the car_models to the car model
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }


}
