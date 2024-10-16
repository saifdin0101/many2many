@extends('layouts.index')




@section('content')
    <div>
        <div class="text-4xl font-thin w-full flex justify-center items-center pt-10">Hello Ms.{{ $client->client_name }}
        </div>
        <div>
            <div class="pl-3 pt-10">Check The available Event : </div>
            <div class="flex flex-wrap gap-5 justify-center items-center pt-10 w-full">
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
                        <div class="flex w-full justify-end pr-5"> created by</div>
                        <div>
                            <form action="">
                                <button class="w-[200px] h-[50px] hover:bg-[#20233a] hover:duration-200 hover:text-white rounded-3xl border border-black">Book Now</button>
                            </form>
                        </div>
                    </div>
                @endforeach





            </div>




        </div>
    @endsection
