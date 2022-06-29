<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaterialSeriesContent;
use Illuminate\Http\Request;

use App\Http\Requests;

class MaterialContentController extends Controller
{
    public function get(){
        $data = MaterialSeriesContent::first();

        return view('admin.materials.contents.index', compact('data'));
    }

    public function update(Request $request){
        $input = $request->except('_token');

        $target = MaterialSeriesContent::first();

        if($target){
            $target->update($input);

            return redirect()->back();
        }

        return 'Material Content not found';

    }
}
