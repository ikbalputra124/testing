<!doctype html>
<html lang="en">
  <head>
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Form Login</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
        .box{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #2fbdb1;
            border-radius: 10px;
            padding: 20px 20px;
        }
       .contentForm{
            margin: 8%;
       }
       .form.control{
        border-color: cyan ;
        border-style: solid;
        border-width: 0 0 1px 0;
       }
       .form-control:focus{
        border-width: 0 0 3px 0;
        color: blue;
        box-shadow: none;
        transition: all 0,1s ease-out;
       }
       .btn{
        border-radius: 20px;
       }
    </style>

   <div class="container">
    <div class="box">
        <div class="row-contentForm">
            <div class="col-sm-12 col-md-6 col-lg-6">
            <img data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" src="image/pamer.png"  alt="" class="img-fluid">
            </div>

            <div class="col-sm-12 col-md-6-lg-6">
                <h3 class="text-center mb-5">LOGIN</h3>
<form class="mt-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input placeholder="Masukan Email anda" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input placeholder="Masukan Password anda" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-success w-100">Submit</button>
</form>
          </div>
      </div>
    </div>
 </div>
 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>