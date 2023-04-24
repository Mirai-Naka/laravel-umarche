<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\SecondaryCategory;
use App\Models\Image;
use App\Models\Stock;

class Product extends Model
{
    use HasFactory;

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    //Secindary Categoryとのリレーション関係　第二引数でカラム名を指定
    public function category()
    {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    //カラム名と全く同じ名前はつけれない
    public function imageFirst()
    {
        return $this->belongsTo(Image::class, 'image1', 'id');
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
