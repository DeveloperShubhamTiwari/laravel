<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\EducationModel;
class Education {
    public function index($id = null) {
        $data = [];
        $data = $id ? EducationModel::find($id) : null;
        AdminView('add-education', compact('data'));
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
            $getSingleData = EducationModel::getSingleDataById($id);
            if ($getSingleData) {
                $getSingleData->updateData($id, $data);
                return redirect()->route('admin.education.view')->with('success', 'Education updated successfully.');
            } else {
                return redirect()->route('admin.education.view')->with('error', 'Education not found.');
            }
        } else {
            EducationModel::insertData($data);
            return redirect()->route('admin.education.view')->with('success', 'Education added successfully.');
        }
    }
    
    public function view() {
        $education = EducationModel::getAllData();
        AdminView('view-education', compact('education'));
    }

    public function delete($id) {
        $data = EducationModel::getSingleDataById($id);
       
        if ($data) {
            $data->delete();
            return redirect()->route('admin.education.view')->with('success', 'Education deleted successfully.');
        }
        return redirect()->route('admin.education.view')->with('error', 'Education not found.');
    }
    

}
