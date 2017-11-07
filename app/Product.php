<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Http\Request;
Use App\Http\Requests;


class Product extends Model
{
    protected $fillable = ['imagepath', 'title', 'description', 'price'];
}
