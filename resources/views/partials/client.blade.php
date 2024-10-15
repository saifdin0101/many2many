@extends('layouts.index')




@section('content')
    <div class="h-[600px]  border flex justify-center items-center flex-col gap-5">

        @forelse ($clients as $client)
            <a href="/client/show/{{ $client->admin_id }}" class="h-[150px] w-[300px] border bg-blue-500 rounded-xl font-thin text-xl flex justify-center items-center">Client Name : {{ $client->client_name }}</a>


        @empty
            <div class="text-9xl font-bold ">No client Been added yet</div>
        @endforelse
    </div>
@endsection
