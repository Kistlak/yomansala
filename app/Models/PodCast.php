<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $logo
 * @property string $description
 * @property string $applePodcastLink
 * @property string $spotifyLink
 * @property string $created_at
 * @property string $updated_at
 */
class PodCast extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'podcast';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'img', 'logo', 'description', 'applePodcastLink', 'spotifyLink', 'created_at', 'updated_at'];

}
