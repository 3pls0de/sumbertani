<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = false;


    // // bedanya fill dan guard
    // // yang boleh diisi secara massal
    // protected $fillable = [
    //     'id_admin',
    //     'nama',
    //     'email',
    //     'password'
    // ];

    //  // yang tidak boleh diisi secara massal
    protected $guarded = ['id_admin'];
}
