<?php

namespace App\Models\v1;

use LaravelSimpleBases\Models\ModelBase;

/**
 * @property string $uuid
 * @property integer $id
 * @property string $name
 * @property string $license_plate
 * @property int $motor_power
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Car extends ModelBase
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['uuid', 'name', 'license_plate', 'motor_power', 'created_at', 'updated_at', 'deleted_at'];

}