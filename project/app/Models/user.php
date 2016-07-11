<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'student';
 
    protected $fillable = array('name', 'email', 'contact', 'address','state','country','pincode');
    public $timestamps = false;

} 
?>