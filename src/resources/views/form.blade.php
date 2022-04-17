<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>TP MOD 06_1301194522_IF4306</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            function readURL(input){
                var file = $("input[type=file]").get(0).files[0];
                if(file){
                    var reader =new FileReader();
                    reader.onload = function(){
                        $('#preview').attr('src',reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>
        <style>
            body{
                background-color:#93c3c7;
            }

            ul{
                list-style-type:none;
            }
            div{
                padding-top:5px; 
                padding-bottom:5px;
            }
            img{
                width:100px;
                height:100px;
            }
        </style>
    </head>
    <body>
        <div class="container bg-light shadow mt-5">
            <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                <div class="text-left">
                    <label for='img' class="mb-2"><b>Image</b></label><br>
                    <input type="file" name="image" onchange="readURL(this)"><br>
                </div>
    
                <div class="text-center">
                    <img id="preview" src="{{url('/public')}} /images/download.png" ><br>
                    <button type="submit" class="mt-5 btn btn-primary">Save</button>
                </div>
                
            </form>

            @if (count($errors) > 0)
                <div class="text-center">
                    <ul>
                    @foreach ($errors->all() as $error)
                       <b><li>{{ $error }}</li></b> 
                    @endforeach
                    </ul>
                </div>
            @endif
           
            <div class="text-center">
                <p>{{$respond}}</p>
            </div>
            
        </div>
    </body>
</html>