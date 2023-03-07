@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div>
        <ul>
            <li>
                First name: {{$student->firstname}}
            </li>
            <li>
                Last name: {{$student->lastname}}
            </li>
            <li>
                Faculty: {{$student->faculty}}
            </li>
            <li>
                Email: {{$student->email}}
            </li>
            <li>
                Final grade: {{$student->finalgrade}}
            </li>
        </ul>
    </div>
        
</div>
@endsection