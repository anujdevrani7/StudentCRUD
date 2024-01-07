<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update-Details</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container" style="padding: 20px">



        <h1 align="center">Student CRUD</h1>
        {{-- form for adding students --}}
        @isset($studentDetail)
        

        <section>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First name</label>
                <input type="email" class="form-control" id="f_name" aria-describedby="emailHelp" required>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last name</label>
                <input type="text" class="form-control" id="l_name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">father name</label>
                <input type="text" class="form-control" id="father" required>
            </div>

            <button align="center" type="submit" class="btn btn-primary add">Update</button>
            <button align="center" type="submit" class="btn btn-primary back">Back</button>

        </section>
        
            
        @else
            <h1>NO DATA IS FOUND </h1>
            
       
            
        @endisset
       

        

           

    </div>
    {{-- container closed --}}

    <script>
        $(document).ready(function () {

           
            
            $('#f_name').val('{{$studentDetail[0]->fist_name}}');
            $('#l_name').val('{{$studentDetail[0]->last_name}}');
            $('#father').val('{{$studentDetail[0]->father_name}}');
            $('.back').click(function (e) { 
                e.preventDefault();
                window.location.href="/";
                
            });
            $(".add").click(function (e) { 
                e.preventDefault();
                let fname=$('#f_name').val();
                let lname=$('#l_name').val();
                let father=$('#father').val();
                window.location.href="update/"+{{$studentDetail[0]->id}}+"/"+fname+"/"+lname+"/"+father;
                
                
            });
            
        });
    </script>
       


</body>

</html>