<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function categoria() {
        return $this->belongsTo('App\Categoria',"categorias_id");
    }
    public static function PostOfBanner(){
        return Producto::where("estado","1")->where('publication_date', '<', date("Y-m-d H:i:s"))->limit(6)->orderBy('publication_date', 'desc')->get();
    }
    public static function PostOfHot(){
        return Producto::where("estado","1")->where('publication_date', '<', date("Y-m-d H:i:s"))->limit(3)->get();
    }
    public static function PostOfPopular(){
        return Producto::where("estado","1")->where('publication_date', '<', date("Y-m-d H:i:s"))->limit(3)->get();
    }
    public static function PostOfPacks(){
        return Producto::where("estado","1")->where('publication_date', '<', date("Y-m-d H:i:s"))->limit(10)->get();
    }

    public function ConvertNameNormalToUrl(){
        return str_replace(" ", "-", $this->nombre);
    }
    public function Visitas(){
        return $this->hasOne(VisitPost::class);
    }
    public function LogVisitas(){
        return $this->hasOne(LogVisit::class);
    }
}
