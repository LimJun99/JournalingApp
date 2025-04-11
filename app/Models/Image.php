<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     use HasFactory;

     protected $guarded = [
          'id',
          'created_at',
          'updated_at'
     ];

     // Polymorphic one-to-many relationship (inverse)
     public function imageable()
     {
          return $this->morphTo(); // Updated to use polymorphic relationship
     }
}