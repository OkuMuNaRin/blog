<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
        <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: darkslategray;
                color: #5e5d5d;
                <!--font-family: 'Raleway', sans-serif;-->
                font-weight: 100;
                height: 200vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    博客
                </div>
                <div >
                    <p style="font-size: 1cm">Blog</p>
                </div>

                <div class="links">
                    <a href="/home">Home</a>
                    <a href="#">My Blog</a>
                    <a href="#">Message</a>
                    <a href="#">Collection</a>
                    <a href="#">Note</a>
                </div>
            </div>
        </div>
    <div class="container" >
        <div class="row">
            <div class="col-lg-10" >

    <div class="row">
        @for($i=0;$i<count($articles);$i++)
              <div class="card bg-info col-lg-5">
                  <div class="card-body">
                      <div class="card-title"><img src="{{'/img/pvix%20(1).png'}}" width="50" height="50" ><span>{{$users[$i]['name']}}</span></div>
                      <p class="card-title">{{$articles[$i]['title']}}</p>
                      <hr>
                      <div class="card-text">{{$articles[$i]['body']}}</div>
                      <a class="card-link" href="#">关注</a>
                  </div>

              </div>

            <div class='col-lg-1 col-sm-1 divider'></div>
        @endfor
    </div>




            <div class="col-lg-2">

            </div>
        </div>
    </div>
    </div>
    </body>
</html>
