@extends('layouts.index')

@section('content')

<div>
    <form class="bg-red-500 h-[300px] flex justify-center items-center flex-col gap-5 w-[30%] rounded-lg m-auto mt-[15px] border" action="/home/store" method="post">
        @csrf
        <div>
            <input name="name" class="h-[50px] w-[300px] rounded-lg" placeholder="Type Your Name" type="text" required>
        </div>
        <div>
            <select class="h-[50px] w-[300px] rounded-lg" name="originality" id="" >
                <option value="" disabled selected>Select Role</option>
                <option value="Client">Client</option>
                <option value="Event Director">Event Director</option>
            </select>
        </div>
        <button class="bg-blue-500  h-[50px] w-[200px] flex justify-center items-center rounded-3xl" type="submit">Create</button>

    </form>


</div>

    









@endsection
