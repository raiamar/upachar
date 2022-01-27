<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bredcrum;

class BredcrumController extends Controller
{
    public function bredcrum_settings(Request $request)
    {
        return view('Bredcrum_setting.index');
    }


    public function create()
    {
        return view('Bredcrum_setting.create');
    }


    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $banner = new Bredcrum;
            $banner->photo = $request->photo->store('uploads/bredcrum');
            $banner->page = $request->page;
            $banner->save();
            flash(__('Bredcrum has been inserted successfully'))->success();
        }
        return redirect()->route('bredcrum.index');
    }

    public function edit($id)
    {
        $banner = Bredcrum::findOrFail($id);
        return view('Bredcrum_setting.edit', compact('banner'));
    }

    public function update_status(Request $request)
    {
        $banner = Bredcrum::find($request->id);
        $banner->published = $request->status;
        if($request->status == 1){
            if(count(Bredcrum::where('published', 1)->get()) < 24)
            {
                if($banner->save()){
                    return '1';
                }
                else {
                    return '0';
                }
            }
        }
        else{
            if($banner->save()){
                return '1';
            }
            else {
                return '0';
            }
        }

        return '0';
    }

    public function update(Request $request, $id)
    {
        dd($id);
        $banner = Bredcrum::find($id);
        $banner->photo = $request->previous_photo;
        if($request->hasFile('photo')){
            $banner->photo = $request->photo->store('uploads/banners');
        }
        $banner->page = $request->page;
        $banner->save();
        flash(__('Bredcrum has been updated successfully'))->success();
        return redirect()->route('bredcrum.index');
    }


    public function destroy($id)
    {
        $banner = Bredcrum::findOrFail($id);
        if(Bredcrum::destroy($id)){
            //unlink($banner->photo);
            flash(__('Bredcrum has been deleted successfully'))->success();
        }
        else{
            flash(__('Something went wrong'))->error();
        }
        return redirect()->route('bredcrum.index');
    }
}
