@extends('layouts.app')
@section('content')
  <div>
   <h1>total results {{$totalresults}}</h1>
   <div>
     @forelse ($collection as $item)
         
     @empty
      <h1>sorry! we haven't found like {{$query}}</h1>
     @endforelse    
   </div>    
  </div>  
@endsection