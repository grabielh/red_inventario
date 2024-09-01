<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DesktopPc
 *
 * @property $id
 * @property $motherboard_model
 * @property $ram
 * @property $storage
 * @property $processor
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DesktopPc extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'motherboard_model', 'ram', 'storage', 'processor', 'img'];


}
