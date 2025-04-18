<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'admin_id';

    public $incrementing = false;

    public $fillable=[
        'first_name',
        'last_name',
        'gender',
        'phone',
        'address',
        'image',
      
    ];


    public function user()
    {
        return $this->belongsTo(Admin::class);
    }
}
