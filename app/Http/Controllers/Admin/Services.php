<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesModel;
class Services {
    public function index($id = null) {
        $data = [];
        $data = $id ? ServicesModel::find($id) : null;
        AdminView('add-services', compact('data'));
    }
    public function save(Request $request, $id = null) {
        $request->validate([
            'heading' => 'required',
            'price' => 'required',
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
            'heading' => $request->input('heading'),
            'price' => $request->input('price'),
            'short_description' => $request->input('short_description'),
            'status' => $request->input('status', 'Inactive'),
            'alt' => $request->input('alt'),
            'status' => $request->input('status', 'Inactive'),
            'image' => $imageName,
        ];
    
        if ($id) {
            $getSingleData = ServicesModel::getSingleDataById($id);
            if ($getSingleData) {
                $getSingleData->updateData($id, $data);
                return redirect()->route('admin.services.view')->with('success', 'services updated successfully.');
            } else {
                return redirect()->route('admin.services.view')->with('error', 'services not found.');
            }
        } else {
            ServicesModel::insertData($data);
            return redirect()->route('admin.services.view')->with('success', 'services added successfully.');
        }
    }
    
    public function view() {
        $services = ServicesModel::getAllData();
        AdminView('view-services', compact('services'));
    }

    public function delete($id) {
        $data = ServicesModel::getSingleDataById($id);

        if ($data->image) {
            unlinkImage($data->image);
        } 

        if ($data) {
            $data->delete();
            return redirect()->route('admin.services.view')->with('success', 'services deleted successfully.');
        }
        return redirect()->route('admin.services.view')->with('error', 'services not found.');
    }
    

}
