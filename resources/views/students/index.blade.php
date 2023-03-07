@extends('layout')

@section('content')

<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <table class="w-full table-auto rounded-sm">
            <thead>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            First name
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            Last name
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">    
                    <a href="create-form" class="text-blue-600 px-6 py-2 rounded-xl">
                       <i class="fa-solid fa-pen-to-square"></i>
                       Create
                    </a>
                </td>
            </thead>
            <tbody>
            <tr>    
                @foreach($students as $student)
                <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 ">
                    {{$student->firstname}}
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    {{$student->lastname}}
                </td> 
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="/students/{{$student->id}}" class="text-orange-600 px-6 py-2 rounded-xl">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Show
                </a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="/edit-form/{{$student->id}}" class="text-green-600 px-6 py-2 rounded-xl">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <form method="POST" action="/delete/{{$student->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600"><i class="fa-solid fa-trash-can"></i>
                    Delete
                    </button>
                </form>
                </td>
            </tr>
            @endforeach               
            </tbody>
        </table>
    </div>
</div>

@endsection