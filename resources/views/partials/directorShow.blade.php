@extends('layouts.index')

@section('content')
    <div class="flex flex-col justify-center items-center gap-10">
        <div class="text-4xl font-thin w-full flex justify-center items-center pt-10">
            Hello Mr. {{ $eventDirectore->director_name }}
        </div>
        <form enctype="multipart/form-data" method="post" action="/home/event/store"
            class="relative flex justify-center items-center flex-col gap-5 h-[500px] border border-black w-[500px] rounded-xl">
            @csrf
            <h1 class="absolute text-2xl font-thin top-[-15px] px-3 bg-white right-[37%]">Create Event:</h1>
            <input name="event_directore_id" value="{{ $eventDirectore->id }}" type="hidden">

            <div>
                <input name="event_name" class="h-[50px] w-[300px] border border-black rounded-3xl pl-4"
                    placeholder="Type Event Name..." type="text" required>
            </div>
            <div>
                <input name="event_subject" class="h-[50px] w-[300px] border border-black rounded-3xl pl-4"
                    placeholder="Type Event Subject..." type="text" required>
            </div>
            <div class="h-[200px] relative w-[300px] bg-blue-500 flex justify-center items-center">
                <div class="text-5xl font-bold">+</div>
                <input name="event_image" class="w-full h-full opacity-0 absolute" type="file" required>
            </div>
            <button class="bg-blue-500 h-[50px] w-[200px] rounded-2xl" type="submit">Create Event</button>
        </form>

        <div class="flex flex-wrap gap-5">
            @foreach ($events as $event)
                <div
                    class="border border-black h-[500px] w-[500px] mb-5 rounded-xl flex justify-center items-center flex-col gap-3">
                    <div class="bg-blue-500 h-[60%] w-[90%] flex justify-start items-start">
                        <img class="w-full h-full" src="{{ asset('storage/images/' . $event->event_image) }}"
                            alt="">
                    </div>
                    <div class="flex justify-start items-start w-full">
                        <h1 class="pl-6 font-thin text-2xl">{{ $event->event_name }}</h1>
                    </div>
                    <div class="flex justify-start items-start w-full">
                        <p class="pl-6 font-thin">{{ $event->event_subject }}</p>
                    </div>
                    <div>
                        <form action="">
                            <button class="w-[200px] h-[50px] rounded-3xl border border-black">Remove Event</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card">
            <p class="heading">Popular this month</p>
            <p>Powered By</p>
            <p>Uiverse</p>
        </div>

    </div>
@endsection
