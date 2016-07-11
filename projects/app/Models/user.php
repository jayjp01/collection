<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'user';
 
    protected $fillable = array('name', 'email', 'contact', 'image','state','country','pincode','city');
    public $timestamps = false;

} 
?>