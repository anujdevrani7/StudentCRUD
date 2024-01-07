<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

            <button align="center" type="submit" class="btn btn-primary add">Add</button>
            <button align="center" type="submit" class="btn btn-primary back">Back</button>

        </section>
        {{-- form closed for adding students --}}

        <div class="slider">
            {{-- this is button for adding students --}}
            <div class="btns">
                <button type="button" class="btn btn-primary btn-lg addStudent">Add Student</button>
                <button type="button" class="btn btn-primary btn-lg delall">Delete All</button>
            </div>
            {{-- button is closed --}}

            {{-- table start for displaying the records of the students --}}

            <table class="table table-striped overflow-sm-hidden">

                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>father name</th>
                        <th>edit</th>
                        <th>delete</th>

                    </tr>
                </thead>
                @isset($data)
                <tbody>
                    @php
                    $count=0;
                    @endphp

                    @foreach ($data as $key=>$value)


                    <tr>
                        <td>{{++$count}}</td>
                        <td>{{$value->id}}</td>
                        <td>{{$value->fist_name}}</td>
                        <td>{{$value->last_name}}</td>
                        <td>{{$value->father_name}}</td>
                        <td><a href="/edit/{{$value->id}}" class="btn btn-primary btn-sm edit">Edit</a></td>
                        <td><a href="/del/{{$value->id}}" class="btn btn-primary btn-sm">Delete</a></td>
                    </tr>


                    @endforeach





                </tbody>

                @endisset

            </table>
        </div>
        {{-- table end --}}

    </div>
    {{-- container closed --}}

    <script>
        // alert("hello word script is working fine ")
        $(document).ready(function () {
            $('section').hide();
            $('.addStudent').click(function (e) { 
                e.preventDefault();
               
                $('section').slideDown(2000).show();

                $('.slider').slideUp(2000);
                
            });
            $('.back').click(function (e) { 
                e.preventDefault();
                $('section').slideUp(2000);
                $('.slider').slideDown(2000);
            
            });

            $('.add').click(function (e) { 
                e.preventDefault();
                let f_name=$('#f_name').val();
                let l_name=$('#l_name').val();
                let father=$('#father').val();
                // console.log(f_name);
                // console.log(l_name);
                // console.log(father);
                if(f_name !== '' && l_name !== '' && father !== '') {
                    window.location.href='/insert/'+f_name+'/'+l_name+'/'+father;
                } 
                else{
               
                    console.log('One or more fields are empty');
                
                }
                
            });
            $('.delall').click(function (e) { 
                e.preventDefault();
                window.location.href="/delall";
                
            });
           
            

            
        });
        

        


    </script>


</body>

</html>