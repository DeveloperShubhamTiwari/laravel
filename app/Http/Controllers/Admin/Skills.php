<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\SkillsModel;
class Skills {
    public function index($id = null) {
        $data = [];
        $data = $id ? SkillsModel::find($id) : null;
        AdminView('add-skills', compact('data'));
    }
    public function save(Request $request, $id = null) {
        $request->validate([
            'skill_name' => 'required',
            'skill_value' => 'required|integer',
            'alt' => 'required',
            'status' => 'required',
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
            'skill_name' => $request->input('skill_name'),
            'skill_value' => $request->input('skill_value'),
            'alt' => $request->input('alt'),
            'status' => $request->input('status', 'Inactive'),
            'image' => $imageName,
        ];
    
        if ($id) {
            $getSingleData = SkillsModel::getSingleDataById($id);
            if ($getSingleData) {
                $getSingleData->updateData($id, $data);
                return redirect()->route('admin.skills.view')->with('success', 'Skill updated successfully.');
            } else {
                return redirect()->route('admin.skills.view')->with('error', 'Skill not found.');
            }
        } else {
            SkillsModel::insertData($data);
            return redirect()->route('admin.skills.view')->with('success', 'Skill added successfully.');
        }
    }
    
    public function view() {
        $skills = SkillsModel::getAllData();
        AdminView('view-skills', compact('skills'));
    }

    public function delete($id) {
        $data = SkillsModel::getSingleDataById($id);
        if ($data->image) {
            unlinkImage($data->image);
        } 
      
        if ($data) {
            $data->delete();
            return redirect()->route('admin.skills.view')->with('success', 'Skill deleted successfully.');
        }
        return redirect()->route('admin.skills.view')->with('error', 'Skill not found.');
    }

 

   
    

}
