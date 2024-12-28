<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $course->name }}
        </h2>
    </x-slot>

  
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 row">
 
 
            <div class="card col-4">
                <div class="p-6 text-gray-900">
              
                    <h5>  {{$course -> name}} </h4>                   
                    <p> {{$course -> description}} </p>
                    <p> {{$course -> price }} </p>
                   

                </div>
                </div>
       

                </div>
            </div>
        

</x-app-layout>