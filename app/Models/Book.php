<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'short_name'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function warehouse()
    {
        return $this->hasOne(Warehouse::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
