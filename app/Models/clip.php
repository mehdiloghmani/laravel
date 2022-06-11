<?php

namespace App\Models;

use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;


class clip extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'discription', 'length', 'url', 'slug', 'thumbnail'];


    public function getroutekeyname()
    {
       return 'slug';
    }


    public function getlengthinhumanattribute()
{
    return gmdate("i:s" , $this->value);
}


public function getcreatedatattribute($value)
{
   return (new Verta($value))->formatDifference();
}


public function relatedclip(int $count=6)
{
    return clip::all()->random($count);
}
}