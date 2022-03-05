<?php

namespace App\Models;

use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'img',
        'medium',
        'year',
        'description1',
        'description2',
        'url_mapped',
        'series_id'
    ];

    public function series() {
        return $this->belongsTo(Series::class);
    }

}
