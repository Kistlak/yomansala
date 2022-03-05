<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 */
class Season extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'season';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id','title', 'created_at', 'updated_at'];

}
