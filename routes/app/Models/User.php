<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'is_banned'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // ইউজার এর বিভিন্ন রোল: admin, publisher, advertiser
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isPublisher()
    {
        return $this->role === 'publisher';
    }

    public function isAdvertiser()
    {
        return $this->role === 'advertiser';
    }

    // সম্পর্ক: Publisher এর আর্নিংস
    public function earnings()
    {
        return $this->hasMany(Earning::class, 'publisher_id');
    }

    // সম্পর্ক: Advertiser এর Ads
    public function ads()
    {
        return $this->hasMany(Ad::class, 'advertiser_id');
    }
}
