@extends('layouts.app')

@section('content')
  @include('sections.header')
  @include('partials.page-header')
  <div class="container py-12">
    <p class="text-lg">Welcome to the CWL Sage Theme!</p>
  </div>
  <div class="bg-red-500 text-white p-6 text-center">
  Tailwind CSS is working!
</div>

  @include('sections.footer')
@endsection
