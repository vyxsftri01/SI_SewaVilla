<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
     protected $table = 'image';

    // public $fillable = ['foto'];
    public $timestamps = true;


    // public function image()
    // {
    //     if ($this->foto && file_exists(public_path('images/image/' . $this->foto))) {
    //         return asset('images/image/' . $this->foto);
    //     } else {
    //         return asset('images/no_image.jpg');
    //     }
    // }
    // // mengahupus image(foto) di storage(penyimpanan) public
    // public function deleteImage()
    // {
    //     if ($this->foto && file_exists(public_path('images/image/' . $this->foto))) {
    //         return unlink(public_path('images/image/' . $this->foto));
    //     }
    // }
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/foto/' . $this->foto))) {
            return asset('images/foto/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }

       // mengahupus image(image) di storage(penyimpanan) public
       public function deleteImage()
       {
           if ($this->foto && file_exists(public_path('images/foto/' . $this->foto))) {
               return unlink(public_path('images/foto/' . $this->foto));
           }
       }
}
