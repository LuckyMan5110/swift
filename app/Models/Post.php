<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is 'posts')
    protected $table = 'posts';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name', 'email', 'phone_number', 'message',
    ];

    
}
