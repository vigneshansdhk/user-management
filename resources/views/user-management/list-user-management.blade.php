<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  
</style>
<body>
<div>
    <style>
        .nav svg{
            height:20px;
        }
        .nav hidden{
            display: block !important;
        }
        .pull-right{
            float : right;
        }
    </style>
    <div class="container" style="padding:30px 0;">
       <div class="row">
       @if(Session::has('success_message'))
              <div class="alert alert-success">
                  <strong>Success</strong>{{Session::get('success_message')}}
              </div>
            @endif
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                     <div class="row">
                         <div class="col-md-6">
                             All Users
                         </div>
                         <div class="col-md-6">
                            <a href="{{url('create-user')}}" class="btn btn-success pull-right btn btn-success">Add New User</a>
                         </div>
                     </div>
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Phone Number</th>
                                  <th>Date of Birth</th>
                                  <th>Country</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($users as $user)
                              <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->phone_number}}</td>
                              <td>{{$user->date_of_birth}}</td>
                              <td>{{$user->country}}</td>
                              <td>
                                  <a href="{{url('edit-user')}}/{{$user->id}}" class="btn btn-warning">Edit</a>
                                  <a href="{{url('delete-user')}}/{{$user->id}}" class="btn btn-danger" >Delete</a>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
</body>
</html>

