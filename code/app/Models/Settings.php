<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'id',
        'key',
        'name',
        'value'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function getOption(): array
    {
        $data = self::orderBy('id', 'asc')->get()->toArray();
        $output = [];
        foreach ($data as $item) {
            $output[$item['key']] = $item;
        }

        return $output;
    }
}
