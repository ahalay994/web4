<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamGallery extends Model
{
    use HasFactory;
    protected $table = 'teams_gallery';

    const IMAGE_PATH = 'uploads/teams/gallery';

    protected $fillable = [
        'id',
        'team_id',
        'image'
    ];

    public function team(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
