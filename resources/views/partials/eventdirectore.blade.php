@extends('layouts.index')



@section('content')
    <div class="h-[600px] border flex justify-center items-center flex-col gap-5">

        @forelse ($eventdirectors as $eventdirector)
            <a href="{{ route('eventdirectore.show', $eventdirector->admin_id) }}" class="h-[150px] w-[300px] border bg-blue-500 rounded-xl font-thin text-xl flex justify-center items-center">
                Client Name: {{ $eventdirector->director_name }}
            </a>
        @empty
            <div class="text-9xl font-bold">No clients have been added yet.</div>
        @endforelse
    </div>
@endsection