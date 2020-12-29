<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    const IMAGE_PATH = 'uploads/news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'short_description',
        'description',
        'published_at',
        'image'
    ];

//    protected $with = [
//        'users'
//    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function getPublishedAtFormatted(): string
    {
        return Carbon::parse($this->published_at)->setTimezone(env('TIMEZONE'))->format('d.m.Y H:i');
    }

}
