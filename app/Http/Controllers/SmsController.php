<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmsController extends Controller
{
    public $student,$image,$imageName,$directory,$imgUrl,$category;
    public function index(){
        return view('crud.info.add',[
            'departments' => Department::all(),
        ]);
    }
    public function manage()
    {
        $this->student=DB::table('students')
            ->join('departments', 'departments.id', '=', 'students.dept_id')
            ->select('students.*', 'departments.*')
            ->get();
        return view('crud.info.manage',[
                'students' => $this->student,
            ]);
    }
    public function saveStudent(Request $request)

    {
        $this->student = new Student();
        $this->student->student_name =$request->student_name;
        $this->student->student_phone = $request->student_phone;
        $this->student->student_email = $request->student_email;
        $this->student->dept_id = $request->dept_id;
        $this->student->student_image =$request->student_image;
        $this->student->student_address = $request->student_address;
        $this->student->save();
        return redirect('manage');
    }
    public function saveImage(  $request)
    {
        $this->image = $request->file('image');
        $this->imageName=rand(). '.'. $this->image->getClientOriginalExtension($request);
        $this->directory = 'asset/image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }


    public function editStudent($id)
    {
        $this->student= Student::find($id);
        return view('crud.info.student-edit',[
            'students' =>    Student::all(),
            'departments' => Department::all(),
        ]);
    }
    public function updateStudent(Request $request)
    {
        $this->student=Student::find($request->student_id);
        $this->student->student_name  =$request->student_name;
        $this->student->student_phone = $request->student_phone;
        $this->student->student_email = $request->student_email;
        $this->student->dept_id = $request->dept_id;
        $this->student->student_image = $request->student_image;
        $this->student->student_address = $request->student_address;
        $this->student->save();
        return redirect('manage');

    }

    public function studentDelete($id)
    {
        $this->student=Student::find($id);
        $this->student->delete();
        return redirect(route('manage'));
    }

}
