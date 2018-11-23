@include('inc.headre')
     <div class="container">
         <div class="row">
             <legend>Gestion logement app</legend>
             @if(session('info'))
                 <div class=" col-md-4 alert alert-success">
                 {{session('info')}}
                 </div>
             @endif

             <table class="table table-striped table-hover ">
                 <thead>
                 <tr>
                     <th>ID</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Action</th>
                 </tr>
                 </thead>
                 <tbody>
                 @if(count($hotel) > 0)
                     @foreach($hotel ->all() as $hotels)

                 <tr>
                     <td><img src="img/{{$hotels->photo2}}" width="50" height="50"></td>
                     <td><img src="img/{{$hotels->photo1}}" width="50" height="50"></td>
                     <td><img src="img/{{$hotels->photo}}" width="50" height="50"></td>
                     <td>
                         <a href="{{url("/read/{$hotels->id}")}}" class="label label-primary">Read </a>|
                         <a href='{{url("/update/{$hotels->id}")}}' class="label label-success">Update </a>|
                         <a href="{{url("/delete/{$hotels->id}")}}" class="label label-danger">Delete</a>

                     </td>
                 </tr>
                     @endforeach
                 @endif
                 </tbody>
             </table>

         </div>
     </div>
@include('inc.footer')