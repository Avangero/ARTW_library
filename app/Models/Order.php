<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'librarian_id',
        'book_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'librarian_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
