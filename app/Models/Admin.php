<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = ['nome', 'senha'];

 
    protected $hidden = ['senha'];
<<<<<<< HEAD
}
=======
}
>>>>>>> 3b20195 (Clinica)