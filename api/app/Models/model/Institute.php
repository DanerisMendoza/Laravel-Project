<?php

namespace App\Models\model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    // use HasFactory;
    //alway false this if you don't have time stamp collumn in your db 
    // public $timestamps = false;
    protected $table = 'institute';
    protected $fillable = ['name','location'];
}
