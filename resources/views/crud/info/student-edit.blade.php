@extends('crud.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3> A Student Add form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.update')}}" method="post">
                            @csrf

                            @foreach($students as $student)
                            @endforeach

                            <input type="hidden" class="form-control"  value="{{$student->id}}"     name="student_id">
                            <div class="mb-3">
                                <label  class="form-label">Student Name</label>
                                <input type="text"  name="student_name" value="{{$student->student_name}}"  class="form-control"  placeholder="Student Name...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Phone</label>
                                <input type="text"   name="student_phone" value="{{$student->student_phone}}" class="form-control"  placeholder="Student Phone...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Email</label>
                                <input type="email"  name="student_email" value="{{$student->student_email}}" class="form-control"  placeholder=" Email@gmail.com...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department Name</label>
                                <select name="dept_id" class="form-control"  >

                                    @foreach($departments as $student)
                                        <option value="{{$student->id}}"> {{$student->department_name}}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Image</label>
                                <input type="file"  name="student_image" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Address</label>
                                <textarea  name="student_address"    cols="10" rows="10" class="form-control">{{$student->student_address}}</textarea>
                            </div>

                            <div class="mb-3">

                                <input type="submit" value="submit" class="form-control btn btn-outline-primary" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
