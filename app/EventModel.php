<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'Event';
    protected $fillable = ['name', 'title','name_org','post','post2','start','end','age','image','public','type'];


    public function getImageAttribute($value)
    {
        $value = $this->attributes['image'];
        $str1= json_decode($value);
        return $str1;
    }

    public function setImageAttribute($value){
        $this->attributes['image'] = json_encode($value);
    }

}
