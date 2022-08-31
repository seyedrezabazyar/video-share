<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'length', 'url', 'slug', 'thumbnail'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthInHumanAttribute($value)
    {
        return gmdate('i:s', $this->value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference(\verta());
    }

    public function relatedVideos(int $count = 6)
    {
        return Video::all()->random($count);
    }
}
