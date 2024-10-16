@extends('layouts.index')



@section('content')
    <div class=" border flex justify-center items-center pt-10 gap-5">

        @forelse ($eventdirectors as $eventdirector)
            {{-- <a href="{{ route('eventdirectore.show', $eventdirector->admin_id) }}"
                class="h-[150px] w-[300px] border bg-blue-500 rounded-xl font-thin text-xl flex justify-center items-center">
                Client Name: {{ $eventdirector->director_name }}
            </a> --}}
            <div class="card1">
                <div class="bg w-full h-full  ">
                    <a href="{{ route('eventdirectore.show', $eventdirector->admin_id) }}"
                        class="   rounded-xl font-thin text-xl h-full w-full mt-[70px]">
                        Client Name: {{ $eventdirector->director_name }}
                    </a>
                </div>
                <div class="blob"></div>
            </div>
        @empty
            <div class="text-9xl font-bold">No clients have been added yet.</div>
        @endforelse
    </div>
   
    
@endsection
