<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;
use Image;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::latest()->paginate(10);

        $links = $books->links();

        return view('admin.books.index', compact('books', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([

            'nom'=> 'required',
            'img' => 'required|file|mimes:jpeg,jpg,png',
            'avtor'=> 'required',
            'avtor_id'=> 'required',
            'tur'=> 'required',
            'tur_id'=> 'required',
            'qisqacha'=> 'required',
            'narx'=> 'required',
            'nashriyot'=> 'required',
            'nashriyot_id'=> 'required',
            'til'=> 'required',
            'til_id'=> 'required',
            'varaqsoni'=> 'required',
            'yili'=> 'required'
        ]);

        //Upload image to storage
        $img_name=$request->file('img')->store('dunyo', ['disk' => 'public']);
        
        // Create thumbnail
        $full_path=storage_path('app/public/'.$img_name);
        $full_thumb_path=storage_path('app/public/thumbs/'.$img_name);
        $thumb=Image::make($full_path);
        
        // // kvadrat
        // $thumb->fit(350, 350, function($constraint){
        //     $constraint->aspectRatio();
        // })->save($full_thumb_path);

        book::create([
            'nom' => $request->post('nom'),
            'img' => $img_name,
            'thumb' => 'thumbs/'.$img_name,
            'avtor'=> $request->post('avtor'),
            'avtor_id'=> $request->post('avtor_id'),
            'tur'=> $request->post('tur'),
            'tur_id'=> $request->post('tur_id'),
            'qisqacha'=> $request->post('qisqacha'),
            'narx'=> $request->post('narx'),
            'nashriyot'=> $request->post('nashriyot'),
            'nashriyot_id'=> $request->post('nashriyot_id'),
            'til'=> $request->post('til'),
            'til_id'=> $request->post('til_id'),
            'varaqsoni'=> $request->post('varaqsoni'),
            'yili'=> $request->post('yili'),
        ]);

        return redirect()->route('books.index')->with('success', 'Yangi kitob qo`shildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
