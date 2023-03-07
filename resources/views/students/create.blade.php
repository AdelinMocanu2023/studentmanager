@extends('layout')

@section('content')

<div class="flex justify-center">
<div class="w-4/12 bg-white p-6 rounded-lg">
<form method="POST" action="/create">
      @csrf
      <div class="mb-6">
        <label for="firstname" class="inline-block text-lg mb-2"> First name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname"/>
      </div>

      <div class="mb-6">
        <label for="lastname" class="inline-block text-lg mb-2"> Last name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname"/>
      </div>

      <div class="mb-6">
        <label for="faculty" class="inline-block text-lg mb-2"> Faculty </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="faculty"/>
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"/>
      </div>

      <div class="mb-6">
        <label for="finalgrade" class="inline-block text-lg mb-2">Final grade</label>
        <input type="integer" class="border border-gray-200 rounded p-2 w-full" name="finalgrade"/>
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
          Create
        </button>
      </div>

    </form>
</div>
</div>

@endsection