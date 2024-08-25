<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Responsible
 *
 * @property $id
 * @property $first_name
 * @property $last_name
 * @property $position
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Responsible extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'last_name', 'position'];


}
