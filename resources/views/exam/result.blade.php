@extends('common.layout')

@section('content')

    <div class="container mt-5">
        <form action="" method="post" class="form-control">
            @csrf
            <ul class="list-group">
          <h2 style="text-align: center; font-family: comic sans MS; color: #660033">Result</h2><hr>
           
           <li class="list-group-item list-group-item-primary">
             @foreach ($examtopic as $examtopic)
                <h5 style="color:#202020; font-weight: bold; font-family: comic sans MS;">Exam Title: {{ $examtopic->quiz_name }}</h5>
          </li>
             @endforeach
            
          <li class="list-group-item list-group-item-secondary">
               <h5 style="color:#66CCFF; font-weight: bold; font-family: comic sans MS;">Total Questions:  {{ $totalques->count() }} </h5>
                    
          </li>
          
          <li class="list-group-item list-group-item-success">
               <h5 style="color:#99cc32; font-weight: bold; font-family: comic sans MS;">Answerd Correctly: {{ $rightans->count() }} </h5>
                    
          </li>
          
          <li class="list-group-item list-group-item-danger">
               <h5 style="color:red; font-weight: bold; font-family: comic sans MS;">Answerd Wrongly: {{ $wrongans->count() }} </h5>
                    
          </li>
          
          <li class="list-group-item list-group-item-info">
             
                  @foreach ($result as $result)
                    <h5 style="color:#66CCFF; font-weight: bold; font-family: comic sans MS;">Marks Obtained: {{ $result->{'sum(marks)'} }} out of {{ $totalques->count() }} </h5>
          </li>
                @endforeach
              
        </ul>
        </form>
    </div>

@endsection
