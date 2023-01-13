<x-app-layout>
    <x-slot name="header">
        <div style="width: 100%; display:flex;">
            <a href="{{route('add')}}"><button>add post</button></a>
        </div>      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 70%; display: flex;  justify-content: space-around;">
            @foreach ($quizzes as $quizz)
            <div style="border: 1px solid black; width:300px">
                <img src="{{$quizz->image}}" alt="" style="width: 300px; height:300px;">
                <div style="width: 300px; display:flex; flex-direction:column; margin:10px;"> 
                    <h5 class="">{{$quizz->quizname}}</h5>
                    <p class="">{{$quizz->description}}</p>
                    <p class="">{{$quizz->author}}</p>
                    <div>
                        <a href="#"><button class="btn btn-primary">Take Quizz</button></a>
                        <a href="/change"><button style="margin-left:15px;" class="btn btn-primary">change</button></a>
                        <form action="/dashboard" method="POST">
                            @csrf
                            <button style="margin-left:15px;" class="btn btn-primary" name="delete" value="{{ $quizz->quizname }}" >delete</button>
                        </form> 
                         
                        
                    </div>
                    
                </div>
            </div>
                      
            @endforeach
        </div>
    </div>
</x-app-layout>


