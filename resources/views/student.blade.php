<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Students Management System</title>
  </head>
  <body>
  @include("navbar")
    <div class="row header-container justify-content-center">
    <div class="header">
      <h1>Student Management System</h1>
    </div>
    </div>
  

    @if($layout=='index')
      <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
          <div class="row justify-content-center">
            <section class="col-md-8">
              @include("studentslist")
            </section>
          </div>
        </div>
      </div>)
    

    @elseif($layout=='create')
      <div class="container-fluid mt-4" id="id-create-form">
          <div class="row">
            <section class="col-md-7">
               @include("studentslist")
            </section>
            <section class="col-md-5">
              <div class="card mb-3">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSp9p1rQyAfYHsMGgSrLp2nf4hCGMFYXgyaERVZr9FEM_45Kx56&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
            <h5 class="card-title">Enter the information about the new student</h5>
            
            <form action="{{ url('/store') }}" method="post">
                  
                  <div class="form-group">
                    <label>CNE</label>
                    <input type="text" class="form-control" name="cne" placeholder="enter cne">
                  </div>

                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="enter the first name">
                  </div>

                  <div class="form-group">
                    <label>Second Name</label>
                    <input type="text" class="form-control" name="secondName" placeholder="enter the second name">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age" placeholder="enter the age">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input type="text" class="form-control" name="speciality" placeholder="enter speciality">
                  </div>
                  <input type="submit" class="btn btn-info" value="Save">
                  <input type="reset" class="btn btn-warning" value="Reset">
                </form>
              </div>
            </div>
     </section>
   </div>
</div>

@elseif($layout=='show')
<div class="container-fluid mt-4">
   <div class="row">
     <section clss="col">
        @include("studentslist")</section>
     <section class="col"></section>
   </div>
</div>

@elseif($layout=='edit')
<div class="container-fluid mt-4">
   <div class="row">
     <section class="col-md-7">
        @include("studentslist")
     </section>
     <section class="col-md-5">
      <div class="card mb-3">
      <img src="https://c8.alamy.com/comp/GDB3DJ/2-kids-girl-and-boy-friends-school-student-studying-in-a-classroom-GDB3DJ.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update informations of student</h5>
    <form action="{{ url('/update/'.$student->id) }}" method="post">
      @csrf
         <div class="form-group">
           <label>CNE</label>
           <input value="{{ $student->cne }}" type="text" class="form-control" name="cne" placeholder="enter cne">
         </div>

         <div class="form-group">
           <label>First Name</label>
           <input value="{{ $student->firstName }}" type="text" class="form-control" name="firstName" placeholder="enter the first name">
         </div>

         <div class="form-group">
           <label>Second Name</label>
           <input value="{{ $student->secondName }}" type="text" class="form-control" name="secondName" placeholder="enter the second name">
         </div>

         <div class="form-group">
           <label>Age</label>
           <input value="{{ $student->age }}" type="text" class="form-control" name="age" placeholder="enter the age">
         </div>

         <div class="form-group">
           <label>Speciality</label>
           <input value="{{ $student->speciality }}" type="text" class="form-control" name="speciality" placeholder="enter speciality">
         </div>
           <input type="submit" class="btn btn-info" value="Update">
           <input type="reset" class="btn btn-warning" value="Reset">
       </form>
  </div>
</div>
</section>
</div>
</div>   
        
    @endif
    <footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>