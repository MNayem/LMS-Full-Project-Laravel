<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<style media="screen">
    body {
      font-family: "Lato", sans-serif;
      margin-left: 20px;
    }

    .sidenav {
      height: 100%;
      width: 180px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 160px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>

<br>
    
        
            <h1 style="color: #E00001; font-weight: bold; font-size: 30px; font-family: poppins; text-align: center;">Please Give the following Exam</h1><hr>
            <!--<table class="table">
  <thead>
    <tr>
      <th scope="col">Exam Id</th>
      <th scope="col">Question</th>
      <th scope="col">Option 1</th>
      <th scope="col">Option 2</th>
      <th scope="col">Option 3</th>
      <th scope="col">Option 4</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
 
  <tbody>
       @foreach($quizes as $question)
    <tr>
      
      <td>{{$question->exam_id}}</td>
      <td>{{$question->question}}</td>
      <td>{{$question->option1}}</td>
      <td>{{$question->option2}}</td>
      <td>{{$question->option3}}</td>
      <td>{{$question->option4}}</td>
      <td>{{$question->answer}}</td>
    </tr>
    @endforeach
  </tbody>
  
</table>-->
<a href="/giveexamfront" class="btn btn-danger mb-3">Back</a>
<form action="/giveexamprocess" method="post" class="form-control">
    @csrf
        <label class="form-check-label" for="flexRadioDefault1">
        Exam Id: 
        </label>
        <input type="text" class="form-control" name="exam_id" value="@php echo $data->id; @endphp">
        <label class="form-check-label" for="flexRadioDefault1">
        Exams Id: 
        </label>
        <input type="text" class="form-control" name="exams_id" value="@php echo $exams->id; @endphp">
       
     @foreach($quizes as $question)
     <label class="form-check-label" for="flexRadioDefault1">
        Question Id: 
        </label>
        <input type="text" class="form-control" name="question_id" value="@php echo $question->id; @endphp"><br>
    <div class="form-check">
       **{{$question->question}}<br>
    <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="{{$question->option1}}">
    <label class="form-check-label" for="flexRadioDefault1">
        {{$question->option1}}
  </label><br>
  <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="{{$question->option2}}">
    <label class="form-check-label" for="flexRadioDefault1">
        {{$question->option2}}
  </label><br>
  <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="{{$question->option3}}">
    <label class="form-check-label" for="flexRadioDefault1">
        {{$question->option3}}
  </label><br>
  <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="{{$question->option4}}">
    <label class="form-check-label" for="flexRadioDefault1">
        {{$question->option4}}
  </label><br>
   <button type="submit" class="btn btn-info mt-5">Next Question</button><br>
   @endforeach
  </div>
</form>
