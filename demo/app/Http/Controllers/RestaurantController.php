<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Restaurants;
use Illuminate\Http\Request;
use Session;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Restaurants::orderBy('id', 'ASC')->paginate(10);
        if($key = request()->key) {
            $data = Restaurants::orderBy('id', 'ASC')->where('name', 'like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.restaurants.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $restaurants = new restaurants;
        $restaurants->name = $request->input('name');
        $restaurants->address = $request->input('address'); 
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload',$filename);
                $restaurants->image = $filename;
        }
        $restaurants->description = $request->input('description');
        $restaurants->save();

        //Restaurants::create($request->all());
        
        return redirect()->route('restaurants.index')->with('success', 'Thêm nhà hàng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurants $restaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurants $restaurants)
    {
        return view('admin.restaurants.edit',compact('restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $data = Restaurants::find($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->description = $request->description;
        $data->save();
        Restaurants::create($request->all());
        return redirect()->route('restaurants.index')->with('success', 'Sửa nhà hàng thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Restaurants::find($id);
       $data->delete();
       return redirect()->route('restaurants.index')->with('success', 'Xóa thành công');
    }
   
}
