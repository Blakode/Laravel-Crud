@extends('layout.app')


@section('content')
<div class="text-center pt-10">
    <h1 class="text-5xl uppercase bold">
      {{$car->name}}
    </h1>
</div>

<div class="text-center py-20">

    <div>
        <span class="uppercase font-bold text-blue-500 text-xs italic">
            Founded: {{$car->founded}}</span>
     
        <p class="text-lg text-gray-700 py-6">{{$car->description}}</p>

        <hr class="mt-4 mb-8">
        <ul>
            <p class="text-lg text-gray-700 py-3">
                Models:
            </p>
            @forelse($car->carModels as $model)
                <li class="inline italic text-gray-600 px-1 py-6"> {{ $model['model_name'] }} </li>
            @empty
                No Models Found
            @endforelse
        </ul>    
        
        <hr class="mt-4 mb-8">

    </div>
    
</div>       
 

@endsection


