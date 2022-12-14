<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use App\Scopes\ZoneScope;

class Zone extends Model
{
    use HasFactory;
    use SpatialTrait;

    protected $spatialFields = [
        'coordinates'
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

    // public function deliverymen()
    // {
    //     return $this->hasMany(DeliveryMan::class);
    // }

    // public function orders()
    // {
    //     return $this->hasManyThrough(Order::class, Restaurant::class);
    // }


    // public function campaigns()
    // {
    //     return $this->hasManyThrough(Campaigns::class, Restaurant::class);
    // }

    public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }

    protected static function booted()
    {
        static::addGlobalScope(new ZoneScope);
    }
}
