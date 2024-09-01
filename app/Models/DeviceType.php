<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DeviceType
 *
 * @property $id
 * @property $device_type
 * @property $use
 * @property $user_name
 * @property $device_name
 * @property $monitor
 * @property $monitor_model
 * @property $idconnection
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DeviceType extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'device_type', 'use', 'user_name', 'device_name', 'monitor', 'monitor_model', 'idconnection'];


}
