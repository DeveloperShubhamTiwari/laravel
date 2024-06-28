<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExperienceModel;
class Experience {
    public function index($id = null) {
        $data = [];
        $data = $id ? ExperienceModel::find($id) : null;
        AdminView('add-experience', compact('data'));
    }
    public function save(Request $request, $id = null) {
        $request->validate([
            'heading' => 'required',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date',
            'short_description' => 'required',
            'status' => 'required',
        ]);
    
      
    
        $data = [
            'heading' => $request->input('heading'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
            'short_description' => $request->input('short_description'),
            'status' => $request->input('status', 'Inactive'),
        ];
    
        if ($id) {
            $getSingleData = ExperienceModel::getSingleDataById($id);
            if ($getSingleData) {
                $getSingleData->updateData($id, $data);
                return redirect()->route('admin.experience.view')->with('success', 'experience updated successfully.');
            } else {
                return redirect()->route('admin.experience.view')->with('error', 'experience not found.');
            }
        } else {
            ExperienceModel::insertData($data);
            return redirect()->route('admin.experience.view')->with('success', 'experience added successfully.');
        }
    }
    
    public function view() {
        $experience = ExperienceModel::getAllData();
        AdminView('view-experience', compact('experience'));
    }

    public function delete($id) {
        $data = ExperienceModel::getSingleDataById($id);
       
        if ($data) {
            $data->delete();
            return redirect()->route('admin.experience.view')->with('success', 'experience deleted successfully.');
        }
        return redirect()->route('admin.experience.view')->with('error', 'experience not found.');
    }
    

}
