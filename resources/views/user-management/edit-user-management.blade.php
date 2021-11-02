<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Create User</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
   body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>

<body>
@if(Session::has('success_message'))
<div class="alert alert-success">
    <strong>Success</strong>{{Session::get('success_message')}}
</div>
 @endif
<div>
    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form  action="{{url('update-user')}}" method="post">
                @csrf
                <h3>Edit User Form</h3>
                <input type="hidden" name="id" value="{{$user_management->id}}">
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{$user_management->name}}" >
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-group">
                           <label class="label">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Your Email" value="{{$user_management->email}}">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label class="label">Phone Number</label>
                            <input class="form-control" type="text" name="phone_number"placeholder="Your Phone Number" value="{{$user_management->phone_number}}">
                            @error('phone_number') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label class="label">Date of Birth</label>
                            <input class="form-control" type="date" name="date_of_birth"placeholder="" value="{{$user_management->date_of_birth}}">
                            @error('date_of_birth') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                           <label class="label">Country</label>
                            <input class="form-control" type="text" name="country" placeholder="Your country" value="{{$user_management->country}}">
                            @error('country') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                   
                        <div class="form-group mt-5">
                            <input type="submit" name="" class="btnContact" value="Update" />
                        </div>
                        </div>
                    </div>
                </div>
            </form>
</div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->