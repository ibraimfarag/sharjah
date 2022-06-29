<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchType extends Model
{
    //
    protected $fillable = ['title','title_ar','content','content_ar','slug','color', 'pre-1960', '1960-1980', '1981-2000', '2001-2020', 'post-2020', 'pre-1960_ar', '1960-1980_ar', '1981-2000_ar', '2001-2020_ar', 'post-2020_ar'];

    public function buildings(){
        return $this->hasMany('App\Models\ResearchBuilding','research_type_id');
    }
}
