@extends('layouts.registration')

@section('content')
<p>@include('layouts.menu')</p>

    <center>
        <h2>Add Video For Your Chapter From here..</h2><br><hr><br>
        <form method="post" action="/addvideoprocess" class="form-control">
            @csrf
            <div class="tab"><u><h4>Please insert the video link</h4></u> <br>
            <p>
                <div class=" col-md-6 mt-md-0 mt-3"> <label style="color: green;">Chapter Name: </label> <select id="chapter" name="name" required>
                    <option value="" selected hidden>Choose Product</option>
                     @foreach ($chaptername as $chaptername)
                    <option value="{{ $chaptername->name }}">{{ $chaptername->name  }}</option>
                    @endforeach
            </select> </div>
            </p>
            <p>
                <label style="color: green;">Video Link: </label>
                <input type="text" placeholder="Insert the video link" oninput="this.className = ''" name="video"></p>
    
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
</center>
@endsection
