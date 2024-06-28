<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\TestimonialsModel;
class Testimonials {
    public function index($id = null) {
        $data = [];
        $data = $id ? TestimonialsModel::find($id) : null;
        AdminView('add-testimonials', compact('data'));
    }
    public function save(Request $request, $id = null) {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'short_description' => 'required',
            'status' => 'required',
            'alt' => 'required',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        if ($request->file('image')) {
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('uploads/', $imageName);
            } else {
                return redirect()->back()->with('error', 'Image upload failed.');
            }
        } else {
            $imageName = $request->input('old_image');
        }

    
        $data = [
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'short_description' => $request->input('short_description'),
            'status' => $request->input('status', 'Inactive'),
            'alt' => $request->input('alt'),
            'status' => $request->input('status', 'Inactive'),
            'image' => $imageName,
        ];
    
        if ($id) {
            $getSingleData = TestimonialsModel::getSingleDataById($id);
            if ($getSingleData) {
                $getSingleData->updateData($id, $data);
                return redirect()->route('admin.testimonials.view')->with('success', 'testimonials updated successfully.');
            } else {
                return redirect()->route('admin.testimonials.view')->with('error', 'testimonials not found.');
            }
        } else {
            TestimonialsModel::insertData($data);
            return redirect()->route('admin.testimonials.view')->with('success', 'testimonials added successfully.');
        }
    }
    
    public function view() {
        $testimonials = TestimonialsModel::getAllData();
        AdminView('view-testimonials', compact('testimonials'));
    }

    public function delete($id) {
        $data = TestimonialsModel::getSingleDataById($id);

        if ($data->image) {
            unlinkImage($data->image);
        } 

        if ($data) {
            $data->delete();
            return redirect()->route('admin.testimonials.view')->with('success', 'testimonials deleted successfully.');
        }
        return redirect()->route('admin.testimonials.view')->with('error', 'testimonials not found.');
    }
    

}
