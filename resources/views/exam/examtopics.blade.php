<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


  <div class="container">

    <h3 class="jumbotron">  Exam Topics  </h3>
<form method="post"   action="/examquestiontopicprocess"  >
  @csrf

        
        <div class="clone ">
          <div class="control-group input-group" style="margin-top:10px">
            <h2>Exam Topics</h2>
            <hr>
                <input type="text" name="topics_name" placeholder="Topics Name" class="form-control">
                <input type="text" name="total_question" placeholder=" Total Question" class="form-control">
                <input type="text" name="total_marks" placeholder="Total Marks" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>
  </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Exam Topic</th>
      <th scope="col">Total Question</th>
      <th scope="col">Total Marks</th>
    </tr>
  </thead>
 
  <tbody>
       @foreach($examtopics as $examtopics)
    <tr>
      
      <td>{{$examtopics->topics_name}}</td>
      
    
      
      <td>{{$examtopics->total_question}}</td>
      
    

      
      <td>{{$examtopics->total_marks}}</td>
      
    </tr>
    @endforeach
  </tbody>
  
</table>
 

</body>
</html>
