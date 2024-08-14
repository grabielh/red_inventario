<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AllInOne
 *
 * @property $id
 * @property $model
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
class AllInOne extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['model', 'ram', 'storage', 'processor', 'img'];


}
