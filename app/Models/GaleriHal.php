<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriHal extends Model
{
    protected $table = 'galeri_hal';

    // public $fillable = ['foto'];
    public $timestamps = true;


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
