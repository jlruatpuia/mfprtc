<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }

    public function product_index(){
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function product_create() {
        return view('admin.products.create');
    }

    public function product_store(Request $request){
        $rules = [
            'product_name' => 'required',
            'price' => 'required',
            'photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
        ];

        $customMessage = [
            'product_name.required' => 'Please enter Product Name',
            'price.required' => 'Please enter Product Price',
            'photo.mimes' => 'File must be of type JPG, PNG or GIF',
            'photo.uploaded' => 'File must be less than 2Mb',
        ];
        $this->validate($request, $rules, $customMessage);

        $product = new Product();
        if($files = $request->file('photo')){
            $ImageUpload = Image::make($files);
//            $originalPath = storage_path('app/public/products/');
            $originalPath = storage_path('products/');
            $ImageUpload->save($originalPath.time().$files->getClientOriginalName());

//            $thumbnailPath = storage_path('app/public/products/thumb/');
            $thumbnailPath = storage_path('products/thumb/');
            dd($originalPath, $thumbnailPath);
            $ImageUpload->resize(480, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
            $product->photo = time().$files->getClientOriginalName();
    //            $photo->path = $.$files->getClientOriginalName();
        }
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect('/admin/products');
    }

    public function product_edit($id){
        $product = Product::findOrFail($id);
        return view('admin.products.edit')->with('product', $product);
    }

    public function product_update(Request $request, $id) {
        $rules = [
            'product_name' => 'required',
            'price' => 'required',
            'photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
        ];

        $customMessage = [
            'product_name.required' => 'Please enter Product Name',
            'price.required' => 'Please enter Product Price',
            'photo.mimes' => 'File must be of type JPG, PNG or GIF',
            'photo.uploaded' => 'File must be less than 2Mb',
        ];
        $this->validate($request, $rules, $customMessage);

        $product = Product::find($id);
        if($files = $request->file('photo')){
            $ImageUpload = Image::make($files);
            $originalPath = storage_path('app/public/products/');
            $ImageUpload->save($originalPath.time().$files->getClientOriginalName());

            $thumbnailPath = storage_path('app/public/products/thumb/');
            $ImageUpload->resize(480, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
            $product->photo = time().$files->getClientOriginalName();
            //            $photo->path = $.$files->getClientOriginalName();
        }
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect('/admin/products');
    }

    public function product_delete($id) {
        $product = Product::findOrFail($id);
        try {
            $path = url('storage/products/' . $product->photo);
            File::delete($path);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        $product->delete();
        return redirect()->route('admin.products');
    }

    public function trainings_index() {
        $trainings = Training::all();

        return view('admin.trainings.index') -> with('trainings', $trainings);
    }

    public function training_create() {
        return view('admin.trainings.create');
    }

    public function training_store(Request $request) {
        $rules = [
            'course_name' => 'required',
            'duration' => 'required',
        ];
        $customMsg = [
            'course_name.required' => 'Please enter Course Name',
            'duration.required' => 'Please enter Course Duration',
        ];
        $this->validate($request, $rules, $customMsg);

        $training = new Training();
        $training->course_name = $request->course_name;
        $training->description = $request->description;
        $training->duration = $request->duration;
        $training->save();
//        Alert::toast('Training details added successfully', 'success');
        return redirect()->route('admin.trainings')
            ->withSuccessMessage(__('global.data_saved_successfully'));
    }

    public function training_edit($id) {
        $training = Training::findOrFail($id);
        return view('admin.trainings.edit') -> with('training', $training);
    }

    public function training_update(Request $request, $id) {
        $rules = [
            'course_name' => 'required',
            'duration' => 'required',
        ];
        $customMsg = [
            'course_name.required' => 'Please enter Course Name',
            'duration.required' => 'Please enter Course Duration',
        ];
        $this->validate($request, $rules, $customMsg);

        $training = Training::find($id);
        $training->course_name = $request->course_name;
        $training->description = $request->description;
        $training->duration = $request->duration;
        $training->save();
//        Alert::toast('Training details added successfully', 'success');
        return redirect()->route('admin.trainings')
            ->withSuccessMessage(__('global.data_saved_successfully'));
    }

    public function training_delete($id) {
        $training = Training::findOrFail($id);
        $training->delete();
        return redirect()->route('admin.trainings');
    }

    public function photos_index() {
        $photos = Photo::simplePaginate(12);
        return view('admin.photos.index') -> with('photos', $photos);
    }

    public function photo_create() {
        return view('admin.photos.create');
    }

    public function photo_store(Request $request){
        $rule = [ 'path' => 'required|mimes:jpeg,jpg,png,gif|max:2048'];
        $customMsg = [
            'path.required' => 'Please select photo to upload',
            'path.mimes' => 'File must be of type JPG, PNG or GIF',
            'path.uploaded' => 'File must be less than 2Mb',
            ];
        $this->validate($request, $rule, $customMsg);
        $photo = new Photo();
        if($files = $request->file('path')){
            $ImageUpload = Image::make($files);
            $originalPath = storage_path('app/public/gallery/');
            $ImageUpload->save($originalPath.time().$files->getClientOriginalName());

            $thumbnailPath = storage_path('app/public/gallery/thumb/');
            $ImageUpload->resize(480, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
            $photo->path = time().$files->getClientOriginalName();
            //            $photo->path = $.$files->getClientOriginalName();
        }

//        $photo->path = $request->path;
        $photo->description = null;
        $photo->save();
        Session::flash('success', 'Photo added successfully');
        return redirect()->route('admin.photos');
    }

    public function photo_delete($id) {
        $photo = Photo::findOrFail($id);
        try {
            $photo_path = 'storage/gallery/' . $photo->path;
            $thumb_path = 'storage/gallery/thumb/' . $photo->path;
            //dd($photo_path, $thumb_path);
            File::delete($photo_path);
            File::delete($thumb_path);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        $photo->delete();
        Session::flash('success', 'Photo deleted successfully');
        return redirect()->route('admin.photos');
    }
}
