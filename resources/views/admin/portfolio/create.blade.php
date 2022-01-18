@extends('layouts.app')

@section('content')

<!-- component -->
<div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
    <form method="POST" action="{{route('portfolio.store')}}">
        @csrf
      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Créer Articles</h1>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Images</label>
            <input name="img" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Titre</label>
            <input name="titre" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Descri</label>
            <input name="descri" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
        </div>
        <button class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Ajouter</button>
      </div>
    </form>
  </div>
    


@endsection