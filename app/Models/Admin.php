<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory,
        Notifiable,
        HasApiTokens;
  /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];
    protected $fillable = [
        'name', 'email', 'password','super_admin', 'status',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class,'admin_id','id')
            ->withDefault();
    }

    public function getImageAttribute()
    {
        if (!$this->image) {
            return 'https://www.firstcolonyfoundation.org/wp-content/uploads/2022/01/no-photo-available.jpeg';
        }

        return asset('storage/' . $this->image);
    }
}
