<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['naming', 'price', 'img_path', 'type'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_goods')->withPivot('quantity');
    }
}
