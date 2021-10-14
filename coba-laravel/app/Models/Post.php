<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; //yang ada dalam array harus diisi
    protected $guarded = ['id']; //yang tidak boleh diisi tapi sisanya harus dijaga

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
