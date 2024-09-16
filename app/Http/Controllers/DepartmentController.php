<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $department;
    public function deptAdd()
    {
        return view('crud.dept.dept-add');
    }
    public function deptManage()
    {
        return view('crud.dept.dept-manage');
    }
    public function saveDept(Request $request){
        $this->department = new Department();
        $this->department->department_name =$request->department_name;
        $this->department->department_code = $request->department_code;
        $this->department->save();
        return redirect(route('dept.add'));
    }
    public function manageDept(){
        $this->department = Department::all();
        return view('crud.dept.dept-manage',[
            'departments' =>   $this->department ,
        ]);
    }
    public function deptEdit($id)
    {
        $this->department= Department::find($id);
        return view('crud.dept.dept-edit',[
            'department' =>   $this->department ,
        ]);
    }
    public function deptUpdate(Request $request ){
        $this->department=Department::find($request->department_id);
        $this->department->department_name =$request->department_name;
        $this->department->department_code = $request->department_code;
        $this->department->save();
        return redirect(route('dept.add'));
    }
    public function deptDelete($id)
    {
        $this->department=Department::find($id);
        $this->department->delete();
        return redirect(route('manage.dept'));
    }

}
