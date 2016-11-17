<?php

namespace App;

use File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = 'slider';
  public $imgPath = 'images/slider/';
  protected $fillable = ['name', 'title','desc','image'];
  public $timestamps = false;

    public function getImageAttribute($value)
    {
        //add full path to image
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
                $way = $this->imgPath.$imageName;
                //
                $a = Image::make($way)->encode('png');
                //->resize(900,400);
                $a->save($way);
            }
        }
    }







}
