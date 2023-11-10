<?php

namespace App\Http\Controllers;


//import Model "Post
use App\Models\Food;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
class FoodController extends Controller
{
   /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $foods = Food::latest()->paginate(5);

        //render view with posts
        return view('foods.index', compact('foods'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('foods.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'     => 'required|min:5',
            'description'   => 'required|min:10',
            'price'   => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/foods', $image->hashName());

        //create post
        Food::create([
            'image'     => $image->hashName(),
            'name'     => $request->name,
            'description'   => $request->description,
            'price'   => $request->price
        ]);

        //redirect to index
        return redirect()->route('foods.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    // public function show(string $id): View
    // {
    //     //get post by ID
    //     $foods = Post::findOrFail($id);

    //     //render view with post
    //     return view('foods.show', compact('foods'));
    // }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $food = Food::findOrFail($id);

        //render view with post
        return view('foods.edit', compact('food'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'name'     => 'required|min:5',
            'description'   => 'required|min:10',
            'price'   => 'required|numeric'
        ]);

        //get post by ID
        $food = Food::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/foods', $image->hashName());

            //delete old image
            Storage::delete('public/foods/'.$food->image);

            //update post with new image
            $foods->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'description'   => $request->description,
                'price'   => $request->price
            ]);

        } else {

            //update post without image
            $foods->update([
                'name'     => $request->name,
                'description'   => $request->description,
                'price'   => $request->price
            ]);
        }

        //redirect to index
        return redirect()->route('foods.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $foods = Food::findOrFail($id);

        //delete image
        Storage::delete('public/foods/'. $foods->image);

        //delete post
        $foods->delete();

        //redirect to index
        return redirect()->route('foods.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
