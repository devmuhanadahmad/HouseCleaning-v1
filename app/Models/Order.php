<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'deadline',
        'number_of_working_hours',
        'number_of_workers_working',
        'notes',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->hasMany(OrderImage::class);
    }

}
