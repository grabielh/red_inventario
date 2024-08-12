<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Laptop
 *
 * @property $id
 * @property $model
 * @property $dimensions
 * @property $power_supply
 * @property $battery_package
 * @property $processor
 * @property $memory
 * @property $storage
 * @property $monitor
 * @property $keyboard
 * @property $connectors_slots
 * @property $security_features
 * @property $wireless_features
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Laptop extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['model', 'dimensions', 'power_supply', 'battery_package', 'processor', 'memory', 'storage', 'monitor', 'keyboard', 'connectors_slots', 'security_features', 'wireless_features', 'img'];


}
