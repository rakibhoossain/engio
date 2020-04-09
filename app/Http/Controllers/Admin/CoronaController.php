<?php

namespace App\Http\Controllers\Admin;

use App\Corona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class CoronaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coronas = Corona::all();

        return view('admin.corona.index', compact('coronas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.corona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:170'
        ]);

        try {
            $input = $request->only('title');
            //Description
            if($request->description){
                $input['description'] = $this->caronaDetail($request->input('description'));
            }
            if($request->image){
                $input['image'] = $this->uploadPostImage($request->image);
            }
            $corona = auth()->user()->coronas()->create($input);


            if(!$corona) throw new \Exception('Invalid action!');
            return redirect()->back()->with('success', 'Post success!');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corona  $corona
     * @return \Illuminate\Http\Response
     */
    public function show(Corona $corona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corona  $corona
     * @return \Illuminate\Http\Response
     */
    public function edit(Corona $corona)
    {
        return view('admin.corona.edit', compact('corona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corona  $corona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corona $corona)
    {
        $request->validate([
            'title' => 'required|max:170'
        ]);

        try {
            $input = $request->only('title');
            //Description
            if($request->description){
                $input['description'] = $this->caronaDetail($request->input('description'));
            }
            if($request->image){
                $input['image'] = $this->uploadPostImage($request->image);
            }
            $corona->update($input);


            if(!$corona) throw new \Exception('Invalid action!');
            return redirect()->back()->with('success', 'Post update success!');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corona  $corona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corona $corona)
    {
        $corona->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {

return '$request->ids';

        // Corona::whereIn('id', $request->ids)->delete();
        // return response(null, 204);
    }


        private function caronaDetail($detail){
        $dom = new \DOMDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $image = $img->getAttribute('src');
            // if a base64 was sent, store it in the db
            if (!is_null($image) && preg_match('/data:image/', $image)){
                list($type, $image) = explode(';', $image);
                list(, $image)      = explode(',', $image);
                $data = base64_decode($image);

                // $post_image = Image::make($data)->resize(1000, 1200)->encode('jpg', 95);
                $post_image_location = 'posts/'.md5(microtime().$k).'.jpg';
                Storage::disk('public')->put($post_image_location, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', asset('storage/'.$post_image_location) );
            }
        }
        return $dom->saveHTML();
    }
    private function uploadPostImage($image){
        // if a base64 was sent, store it in the db
        if (!is_null($image) && preg_match('/data:image/', $image)){
            list($type, $image) = explode(';', $image);
            list(, $image)      = explode(',', $image);
            $data = base64_decode($image);
            $location = 'post/'.md5(microtime()).'.jpg';
            Storage::disk('public')->put($location, $data);
            return 'storage/'.$location;
        }
       return $image;
    }
}
