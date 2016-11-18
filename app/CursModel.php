<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursModel extends Model
{
    protected $table = 'Curs';
    public $imgPath = 'images/curs/';
    protected $fillable = ['name', 'title','name_org','post','post2','start','end','age','image','public','type'];

    public function getImageAttribute($value)
    {
        return $this->imgPath . $value;
    }


    public function setImageAttribute($value)
    {
        //remove file
        if (is_null($value)) {

            $image = $this->imgPath . $this->attributes['image'];
            if (File::exists($image)) {
                File::delete($image);
            }
            //clean field
            $this->attributes['image'] = null;
        } else { //add file
            //get name from path
            $imageName = last(explode('/', $value));
            //save in field only image name (without upload directory)

            $this->attributes['image'] = $imageName;
            //move image to a new directory
            //изменяем размер изображения
            if (File::exists($value)) {
                File::move($value, $this->imgPath . $imageName);
                // путь к нашей категоррии
                $way = $this->imgPath . $imageName;
                //
                $a = Image::make($way)->encode('png');
                //->resize(900,400);
                $a->save($way);
            }
        }
    }


}
