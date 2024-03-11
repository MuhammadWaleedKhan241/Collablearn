<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class StudentFeedbackController extends Controller
{
    // public function show()
    // {
    //     return view('s-feedback');
    // }

    function store_data(Request $request){

        $data = new Feedback;
           
        $data->Gender =$request->input('Gender');
        $data->Age =$request->input('Age');
        $data->Experience=$request->input('Experience');
        $data->EducationYear =$request->input('EducationYear');
        $data->SectorExperiance =$request->input('SectorExperiance');
        $data->GeoLocation=$request->input('GeoLocation');
        $data->UseExpBefore=$request->input('UseExpBefore');
        $data->Usefull=$request->input('Usefull');
        $data->OwnBackExpUnderstandingStratMang =$request->input('OwnBackExpUnderstandingStratMang'); 
        $data->UnderstandingSM =$request->input('UnderstandingSM');
        $data->ExplnYourLearn =$request->input('ExplnYourLearn');
        $data->BackExpInClass =$request->input('BackExpInClass');
        $data->LearnFromOther=$request->input('LearnFromOther');
        $data->ImprovedInFuture =$request->input('ImprovedInFuture');
        $data->AnyOtherComment=$request->input('AnyOtherComment');
        $data->Permission=$request->input('Permission');

        $data->save();
        return back();  
    }
 
    function show(){

       $data = Feedback::all();
        $title = "studentFeedback";
        return view('s-feedback',compact('data','title'));

    }

}