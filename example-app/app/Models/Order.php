<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['phone', 'name', 'delivery', 'isCompleted'];

    public function goods()
    {
        return $this->belongsToMany(Good::class, 'order_goods')->withPivot('quantity');
    }
}
