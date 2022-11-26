<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    private $section;
    
    public function sectionAdd(){
        return view('section.add');
    }
    public function sectionSave(Request $request){
        Section::sectionSaveModel($request);
        return redirect(route('section.manage'));
    }
    public function sectionEdit(Request $request){
        return view('section.edit',[
            'result'=> Section::find($request->section_id)
        ]);
    }
    public function sectionManage(){
        return view('section.manage',[
            'result'=> Section::all()
        ]);
    }
    public function sectionDelete(Request $request){
        $this->section = Section::find($request->section_id);
        $this->section->delete();
        return back();
    }
}
