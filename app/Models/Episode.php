<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property int $season_id
 * @property string $img
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Episode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'episode';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'season_id', 'img', 'description','link', 'created_at', 'updated_at'];

}
