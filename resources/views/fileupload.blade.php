<form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload a File</button>
                        </div>

                        <br>


                    </div>
                </form>
              <!--  <img src="{{ asset($files[7]->file_path) }}" />-->
             <img src="{{ Storage::url("/storage/app/prisoner.jpg") }}"  />

                @foreach($files as $file)
                @endforeach
                <img src="{{asset('/storage/uplodads/public/'.$file->name)}}">

               
                 <br>
                 {{$file->name}}
