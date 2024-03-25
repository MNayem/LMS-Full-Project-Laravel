<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>email</th>
            <th>description</th>

        </tr>
        @foreach ($cruds as $crud)
            <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->email}}</td>
                <td>{{$crud->description}}</td>




            </tr>
        @endforeach
    </table>

    it is email: {{$abc}}





  </body>
</html>
