@extends('common.layout')

@section('content')

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

 <style type="text/css">
            body{
                color : gray;
                padding : 0;
                margin : 0;
                /*background : #EDEDED;*/
            }
            aside{
                float : left;
                background : #fff;
                width : 200px;
                height : 100%;
                border-right : 5px solid #ddd;
                text-align : center;
                color: #000;
            }
            aside a:link, a:visited{
                color : #000;
                font-family : comic sans MS;
                text-decoration : none;
                font-size: 14px;
            }
            aside a:hover{
                color : green;
                /*background : blue;*/
            }
            aside h2{
                font-size : 12px;
            }
        </style>
        <script>
            const searchButton = document.getElementById('search-button');
            const searchInput = document.getElementById('search-input');
            searchButton.addEventListener('click', () => {
              const inputValue = searchInput.value;
              alert(inputValue);
            });
        </script>
        <section>
            <aside>
                 <h5>Manage Content</h5>
              <form action="">
                  <div class="input-group">
                      <div class="form-outline">
                        <label class="form-label" for="form1" style="font-weight: bold;">Search</label>
                        <input id="search-input" type="search" id="form1" class="form-control" placeholder="Type Query"/>
                        <a href="#" class="btn btn-primary" style="width: 100%; margin-top: 3px; font-size: 12px;"><i class="fas fa-search">&nbsp;Search Here</i></a>
                  </div>
                </div><br>
              </form>
                <h2><a href = "/sampletestanalytical">Take A Sample Test</a></h2><hr>
                <h2><a href = "#">Report</a></h2><hr>
            </aside>
        <center>
                <h3 style = "color : green; font-weight : bold; border-bottom: 1px solid #ddd;">Analytical Sample Page</h3>
        </center>
        </section>

@endsection