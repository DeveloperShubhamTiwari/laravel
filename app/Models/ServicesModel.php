<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServicesModel extends Model
{
    use HasFactory;

    protected $table = 'services';
    
    protected $fillable = [
        'heading',
        'image',
        'alt',
        'price',
        'short_description',
        'status',
    ];


    public static function insertData($data)
    {
        return self::create($data);
    }

    public static function getAllData()
    {
        return self::all();
    }

    public static function getSingleDataById($id)
    {
        return self::find($id);
    }

    public static function updateData($id, $data)
    {
        $skill = self::find($id);
        if ($skill) {
            $skill->update($data);
            return $skill;
        }
        return null;
    }

    public static function deleteData($id)
    {
        $skill = self::find($id);
        if ($skill) {
            $skill->delete();
            return true;
        }
        return false;
    }
}
