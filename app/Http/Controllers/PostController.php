<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Spatie\Permission\Models\Permission;
use DataTables;
use Exception;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:post', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    // image upload in S3
    protected function imageUpload($requestFile, $location_main)
    {
        if (!is_dir(public_path('upload'))) {
            mkdir(public_path('upload'), 0777);
        }
        $main_image = $requestFile;
        $extension = $main_image->getClientOriginalExtension();
        $location = "/upload/$location_main/";
        $ImgName = date('Ymdhis') . rand(10000, 99999) . '.' . $extension;
        $ImgName_md = date('Ymdhis') . rand(10000, 99999) . '_md680x650.' . $extension;
        $ImgName_sm = date('Ymdhis') . rand(10000, 99999) . '_sm=116x132.' . $extension;
        // Instantiate SimpleImage class
        $image = Image::make($main_image)->encode($extension);
        $image_md = Image::make($main_image)->resize(680, 650, function ($aspect) {
            $aspect->aspectRatio();
        })->encode($extension);
        $image_sm = Image::make($main_image)->resize(116, 132, function ($aspect) {
            $aspect->aspectRatio();
        })->encode($extension);
        // Size:large
        Storage::disk('local')->put($location . $ImgName, (string) $image);
        // // Size:medium
        Storage::disk('local')->put($location . $ImgName_md, (string) $image_md);
        // // Size:small
        Storage::disk('local')->put($location . $ImgName_sm, (string) $image_sm);

        $filename['image'] = "/upload/$location_main/" . $ImgName;
        $filename['image_md'] = "/upload/$location_main/" . $ImgName_md;
        $filename['image_sm'] = "/upload/$location_main/" . $ImgName_sm;
        return $filename;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $posts = Post::all();
            return DataTables::of($posts)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_categories = PostCategory::select('name','id')->get();
        return view('admin.post.create', compact('post_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'title' => 'required|max:100'
        ],[
            'title.unique' => trans('error.name')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }

        $data['created_by'] = $user->id;
        $data['updated_by'] = $user->id;
         // cover image data save
         if($data['cover_image_data'] != "") {
            //  dd($data['cover_image']);
            $filename = $this->imageUpload($data['cover_image'], 'post');

            $data['cover_image'] = $filename['image'];
            $data['cover_image_sm'] = $filename['image_sm'];
            $data['cover_image_md'] = $filename['image_md'];

        }
        $postData = Post::create($data);

        return redirect()->route('post.index')->with([
            'success' => trans('Post create successfully')
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post_categories = PostCategory::select('name','id')->get();
        return view('admin.post.edit', compact('post', 'post_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'title' => 'required|max:100'
        ],[
            'title.unique' => trans('error.title')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $oldData = Post::find($id);
        $oldData['updated_by'] = $user->id;

        // cover image data save
        if($data['cover_image_data'] != "") {
            // Size:large
            Storage::delete([$oldData->cover_image, $oldData->cover_image_sm, $oldData->cover_image_md]);
            //  dd($data['cover_image']);
            $filename = $this->imageUpload($data['cover_image'], 'post');

            $data['cover_image'] = $filename['image'];
            $data['cover_image_sm'] = $filename['image_sm'];
            $data['cover_image_md'] = $filename['image_md'];

        }

        $oldData->update($data);

        return redirect()->route('post.index')->with([
            'success' => trans('Post updated successfully')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = Post::find($id);
                $data->delete();
                return response()->json(['success' => 'post deleted']);
            } catch (Exception $e) {
                return response()->json([
                    'status' => 500,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }
}
