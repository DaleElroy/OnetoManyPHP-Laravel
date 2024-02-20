<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ["code","title", "author_id"];
    use HasFactory;

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
