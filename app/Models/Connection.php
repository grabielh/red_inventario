<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Connection
 *
 * @property $id
 * @property $connection_type
 * @property $mac_address
 * @property $DHCP
 * @property $ip_connection
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Connection extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['connection_type', 'mac_address', 'DHCP', 'ip_connection'];


}
