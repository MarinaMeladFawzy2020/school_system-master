<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students" ;
    protected $fillable=['id' ,'name','email','rooms_id' , 'created_at' , 'updated_at'];
    protected $hidden =['created_at' , 'updated_at'];
    public $timestamps = true ;
}
