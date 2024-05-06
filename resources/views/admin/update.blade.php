<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/images.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>
<body>
    
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
           <h5 class="card-title fw-semibold mb-4">Update User</h5>
                    
          <form method="post" action="{{route('update')}} " enctype="multipart/form-data">
          @csrf
            <div visiblity="none" class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nom</label>
              <input type="text" name="id" class="form-control" value="{{$user->id}}" id="exampleInputPassword1">
            </div>
        


            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nom</label>
              <input type="text" name="name" class="form-control" value="{{$user->name}}" id="exampleInputPassword1">
            </div>
            @error('name')
              <div class="alert alert-danger"> 
                  {{$message="Ce nom est trop long"}}
              </div>    
            @enderror
        
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email"  value="{{$user->email}}" class="form-control @error('email') is invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">         
            </div>
            @error('email')
              <div class="alert alert-danger"> 
                  {{$message="Cet email est incorrecte"}}
              </div>    
            @enderror
                      
            {{-- <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" value="{{$user->password}}" class="form-control " id="exampleInputPassword1">
            </div> --}}
        
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Photo</label>
              <input type="file" name="photo" value="{{$user->photo}}" class="form-control @error('photo')is invalid @enderror" id="exampleInputPassword1">
            </div>
            @error('photo')
              <div class="alert alert-danger"> {{ $message}} </div>
            @enderror
        
            <button type="submit" class="btn btn-warning">Submit</button>
          </form>
        </div>
      </div>
    </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

</body>
</html>