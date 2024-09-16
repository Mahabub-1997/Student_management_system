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
                        <form action="{{route('new.student')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Student Name</label>
                                <input type="text" name="student_name" class="form-control"  placeholder="Student Name...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Phone</label>
                                <input type="text" name="student_phone" class="form-control"  placeholder="Student Phone...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Email</label>
                                <input type="email" name="student_email" class="form-control"  placeholder=" Email@gmail.com...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department Name</label>
                                <select name="dept_id" class="form-control" >

                                    @foreach($departments as $student)
                                    <option value="{{$student->id}}"> {{$student->department_name}}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Image</label>
                                <input type="file" name="student_image" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Address</label>
                                <textarea  name="student_address" id="" cols="10" rows="10" class="form-control"></textarea>
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
