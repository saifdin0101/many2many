@extends('layouts.index')

@section('content')
    <div class="flex flex-col justify-center items-center gap-10">
        <div class="text-4xl font-thin w-full flex justify-center items-center pt-10">Hello
            Mr.{{ $eventDirectore->director_name }}</div>
        <div class=" relative flex justify-center items-center flex-col gap-5 h-[500px] border border-black w-[500px] rounded-xl ">
            <h1 class="absolute text-2xl font-thin top-[-15px] px-3 bg-white  right-[37%]">Create Event :</h1>
            <div>
                <input name="event_name" class="h-[50px] w-[300px] border border-black rounded-3xl pl-4" placeholder="Type Event Name..." type="text">
            </div>
            <div>
                <input name="event_subject" class="h-[50px] w-[300px] border border-black rounded-3xl pl-4" placeholder="Type Event Subject..." type="text">
            </div>
            <div class="h-[200px] relative w-[300px] bg-blue-500 flex justify-center items-center">
                <div class="text-5xl font-bold">+</div>
                <input name="event_image" class="w-full h-full opacity-0 absolute" type="file">
            </div>
            <button class="bg-blue-500 h-[50px] w-[200px] rounded-2xl" type="submit">Create Event</button>

        </div>


    </div>
@endsection
