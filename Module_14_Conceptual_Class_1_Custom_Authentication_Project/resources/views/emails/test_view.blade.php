@extends('layouts.app')

@section('content')
<div class="flex justify-center">
   <div class="w-8/12 bg-white p-6 rounded-lg">
       <a class="bg-blue-500 text-white p-4 rounded" href="{{ route('mail') }}">Send Mail</a>
   </div>
</div>
@endsection