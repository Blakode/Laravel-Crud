@extends('layout.app')

    @foreach ( $cars as $car )

        {{ $car->name}}

    @endforeach

@section('content')
    <div class="text-center pt-10">
            <h1 class="text-5xl uppercase bold">
                Classicars 
            </h1>
       
    </div>
    <div class="m-auto pt-10 w-4/5" >
        <a href="cars/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            add a new car &rAarr; 
        </a>
    </div>
   

        @foreach ( $cars as $car)
        <div class="m-auto w-4/5 py-20">
            <div class="float-right">
                    <a href="cars/{{$car->id}}/edit"  class="border-b-2 pb-2 border-dotted italic text-green-500" >Edit&rArr;</a>
                
                
        
                    <form action="cars/{{$car->id}}" method="POST" class="pt-3">
                        @csrf
                        @method('delete')
                        <button 
                        class="border-b-2 pb-2 border-dotted italic text-red-500"
                        type="submit">
                                Delete&rAarr;
                        </button>
                    </form> 
            </div> 

                    <div>
                        <span class="uppercase font-bold text-blue-500 text-xs italic">
                            Founded: {{$car->founded}}</span>
                        <h2 class="text-gray-700 text-5xl">
            <a href="cars/{{$car->id}}" class="hover:text-gray-500">{{$car->name}} </a>
                        </h2>

                        <p class="text-lg text-gray-700 py-6">{{$car->description}}</p>
                        <hr class="mt-4 mb-8">

                    </div>
                    
        </div>        
        @endforeach
    
@endsection