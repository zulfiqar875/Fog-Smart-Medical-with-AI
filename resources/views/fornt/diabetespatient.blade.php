
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>MC-Portal</title>
        <link rel="icon" type="image/ico" href="https://i.pinimg.com/originals/16/aa/df/16aadf06716be2bb9c958b31ee1173a1.jpg" />
    </head>
    <style>
        body
        {
            /* background-color: black; */
            background-image: url('/images/backpic.jpg');
            /* height: 1000px;  */
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
            background-attachment: fixed;
            color: grey;
        }
        .box
        {
            display: flex;
            justify-content: center;
            margin-top:50px;
        }
        .box2
        {
            display: flex;
            justify-content: center;
            margin-top:50px;
            margin-left: 50px;
            font-family: calabri;
        }
        .container
        {
            
            width: 500px;
        }
        td
        {
            color: white;
        }
        table
        {
        background-color: rgb(255, 255, 255,0.1);
        
        border: none;
        }

        #text
        {
        background-color: rgb(255, 255, 255,0.2);
        }
        /* ----------------------------------------------------------------------- */
        .lds-facebook {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 50px;
    }
    .lds-facebook div {
    display: inline-block;
    position: absolute;
    left: 8px;
    width: 16px;
    background: #fff;
    animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
    }
    .lds-facebook div:nth-child(1) {
    left: 8px;
    animation-delay: -0.24s;
    }
    .lds-facebook div:nth-child(2) {
    left: 32px;
    animation-delay: -0.12s;
    }
    .lds-facebook div:nth-child(3) {
    left: 56px;
    animation-delay: 0;
    }
    @keyframes lds-facebook {
    0% {
        top: 8px;
        height: 64px;
    }
    50%, 100% {
        top: 24px;
        height: 32px;
    }
    }
    /* -------------------------------------------------------------------------------------- */
    #nav1
    {
    min-height: 50px;
    }
    .imagelogo
    {
    height:auto;
    width:70px;
    }

    /* ------------------------------------------------------------------------------- */
    .graph_box
    {
    justify-content: center;
    border: 1px solid black;
    margin-left: 100px;
    margin-right: 100px;
    }


    .chart {
    width: 100%; 
    min-height: 400px;
    }
    .rowchart {
    margin:0 !important;
    }

    /* ----------------------------------------------------------------------------------------------------------------- */

    #profile
    {
    background-color: rgb(255, 255, 255,0.2);
    }


    /* ---------------------------------------------------------------------------------------------------------------- */

    .tableFixHead          { overflow-y: auto; height: 500px; }
    .tableFixHead thead th { position: sticky; top: 0; }

    /* Just common table stuff. Really. */
    table  { border-collapse: collapse; width: 100%; }
    th, td { padding: 8px 16px; }
    th     { background:rgb(1, 1, 1,0.7); }


    /* --------------------------------------------------------------------------------------------------------------------- */
    /* Footer */

    .footer
    {
    font-family: Sans-serif	;
    }


    </style>

    <body>
    @include('sweet::alert')

    <!-- ========================================================================================== -->
    <!-- <nav class="navbar navbar-expand-sm navbar-light hd1 p-3" > -->
    <!-- <div class="container">
        <div class="row  " style=" height:30px; background-color: #055959;">
        <script type="text/javascript" >
        document.write ('<p class="navbar-brand text-white " style="font-size: 15px;">Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
        if (document.getElementById) onload = function () 
            {
            setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
            }
        </script>
        </div>
    </div> -->
            
            
    <!-- ========================================================================================== -->
    <div class="start" id="start">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark h-20" id="nav1">
        <a class="navbar-brand text-white" href="#"> <img src="/images/HL.png" class="imagelogo" alt=""> </a>
        <span><h5>HealthChain</h5></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            </ul>
            
            <button class="btn "><a href="#start"class="text-light" style="text-decoration: none;">DASHBOARD</a></button>
            <button type="button" class="btn text-white" data-toggle="modal" data-target="#myModal"> PROFILE</button>
            <button type="button" class="btn text-white" data-toggle="modal" data-target="#exampleModal"> ONLINE </button>
            <button class="btn "><a href="{{url('/newcases')}}"class="text-light" style="text-decoration: none;">HISTORY</a></button>
            <button class="btn "><a href="{{url('/graphdata')}}"class="text-light" style="text-decoration: none;">GRAPH</a></button>
            <button type="button" class="btn  w-30 text-white"><a href="{{url('/login')}}"class="text-light" style="text-decoration: none;"><i class="fas fa-arrow-right fa-0x " ></i> LOGOUT</a> </button>
            </div>
        </nav>
    </div>
        <!-- ------------------------------------------------------------------------------------------------------------------- -->
        <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl border">
            <div class="modal-content ">

            <!-- Modal Header -->
            <div class="modal-header bg-dark text-white" id="profile">
            <h4 class="modal-title">PROFILE</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <div class="form p-1">
                <form action="">
                    <div class="row ml-2">
                        <label for=""><i class="fa fa-user fa-1x text-dark" aria-hidden="true"> Personal Info</i></label>
                    </div>
                    <div class="row p-2"> 
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Firstname}}" id="" class="form-control" > </div>
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Lastname}}" id="" class="form-control" ></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->DateofBirth}}" id="" class="form-control" > </div>
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Age}}" id="" class="form-control" ></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->CNIC}}" value="" id="" class="form-control" > </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Address}}" value="" id="" class="form-control" ></div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Postalcode}}" value="" id="" class="form-control" ></div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Contactno}}" id="" class="form-control" > </div>
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Email}}" id="" class="form-control" ></div>
                    </div>
                    <div class="row ml-2">
                        <label for=""><i class="fa fa-plus-square  fa-1x text-dark" aria-hidden="true"> Medical Info</i> </label>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Diseases}}" id="" class="form-control" ></div>
                        
                        <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Hospital}}" id="" class="form-control" ></div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->City}}" id="" class="form-control" ></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-1"> <input type="text" name="" disabled value="{{$found->Others}}" id="" class="form-control" > </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Username}}" id="" class="form-control" > </div>
                        <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Password}}" id="" class="form-control" ></div>
                    </div>
                    
                    <div class="modal-footer">
                    <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
            </div>
            
        </div>
        </div>
    </div>
        <!-- ------------------------------------------------------------------------------------------------------------------- -->
        <div class="start">
        <h2 class="text-center text-dark">Live Graph</h2>
        <div class="col-md-12 col-lg-12 col-lx-12">
            <div class="rowchart">
            <div class="col-md-12 text-center">
                
            </div>
            <div class="col-md-4 col-md-offset-4">
                
            </div>  
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div id="curve_chart" class="chart "></div>
            </div>

            </div>
        </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">Online Calculation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <h2 class="text-dark text-center mt-2">Measure Your Diabetes Now</h2>
                <div class="box">
                
                    <div class="form-group container ">
                    <form action="{{url('\DClientdata', $found->Pid)}}" method="post">
                        @csrf
                            <div class="row mb-3 text-center">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <label for="" class="text-dark text-center">Glucose</label>
                                    <input type="text" name="glu" id="text" class="form-control text-center" required>
                                </div>
                            </div>

                            <div class="row mb-3 text-center">

                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <label for="" class="text-dark text-center">Blood Pressure</label>
                                    <input type="text" name="bp" id="text" class="form-control text-center" required>
                                </div>

                            </div>
                            <div class="row mb-3 text-center">

                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <label for="" class="text-dark text-center">BMI</label>
                                    <input type="text" name="bmi" id="text" class="form-control text-center" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Check" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>

        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

        <div id="auto" class="Tables">
            <div class="navbar border-bottom border-white ml-3 mr-3">
                <a class="navbar-brand text-white" href="#"> <i class="fas fa-cogs fa-0x " ></i> <div class="lds-facebook"><div></div><div></div><div></div></div> Live Stats </a>
            </div>
            <div class="" id="font">
            <br>
                <!-- <h4 class="border-bottom  text-light">Live Score</h4> -->
                <div class="col-md-12 col-lg-12 col-xl-12 tableFixHead">
                <table class="table table-striped text-light">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Diabetes</th>
                            <th>Blood Pressure</th>
                            <th>BMI</th>
                            <th>Status</th>
                            <th>Pred1</th>
                            <th>Pred2</th>
                            <th>Pred3</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dele as $dele)
                                <tr>
                                    <td>{{$dele->created_at}}</td>
                                    <td>{{$dele->diabetes}}</td>
                                    
                                    <td>{{$dele->bp}}</td>
                                    <td>{{$dele->bmi}}</td>
                                    <td>
                                    @if($dele->status=="1")
                                        <h6>Very Low</h3>
                                    @elseif($dele->status=="2")
                                        <h6>Low</h3>
                                    @elseif($dele->status=="3")
                                        <h6>Normal</h3>
                                    @elseif($dele->status=="4")
                                        <h6>High</h3>
                                    @else
                                        <h6>Very Hight</h3>
                                    @endif
                                    </td>
                                    <td>
                                    @if($dele->pred1=="1")
                                        <h6>Very Low</h3>
                                    @elseif($dele->pred1=="2")
                                        <h6>Low</h3>
                                    @elseif($dele->pred1=="3")
                                        <h6>Normal</h3>
                                    @elseif($dele->pred1=="4")
                                        <h6>Hight</h3>
                                    @else
                                        <h6>Very High</h3>
                                    @endif
                                    </td>
                                    <td>
                                    @if($dele->pred2=="1")
                                        <h6>Very Low</h3>
                                    @elseif($dele->pred2=="2")
                                        <h6>Low</h3>
                                    @elseif($dele->pred2=="3")
                                        <h6>Normal</h3>
                                    @elseif($dele->pred2=="4")
                                        <h6>High</h3>
                                    @else
                                        <h6>Very High</h3>
                                    @endif
                                    </td>
                                    <td>
                                    @if($dele->pred3=="1")
                                        <h6>Very Low</h3>
                                    @elseif($dele->pred3=="2")
                                        <h6>Low</h3>
                                    @elseif($dele->pred3=="3")
                                        <h6>Normal</h3>
                                    @elseif($dele->pred3=="4")
                                        <h6>High</h3>
                                    @else
                                        <h6>Very High</h3>
                                    @endif
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="footer mt-5 pt-5 pb-5 bg-dark">
        <div class=" " style="display: flex; flex-wrap: wrap; ">
            <div class="col-md-3 col-lg-3 col-xl-3 pl-5  text-white">
                <h4 class="mb-4">Our Products</h1>
                <h6 class="mb-4">Glucose Watch</h3>
                <h6 class="mb-4">Blood Pressure Watch</h3>
                <h6 class="mb-4">Support</h3>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 pl-5  text-white">
                <h4 class="mb-4">Discover vitality</h1>
                <h6 class="mb-4">Blog</h3>
                <h6 class="mb-4">About</h3>
                <h6 class="mb-4">Scientific committee</h3>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 pl-5  text-white">
                <h4 class="mb-4">Contact us</h1>
                <h6 class="mb-4">Ask a question</h3>
                <h6 class="mb-4">Press</h3>
                <h6 class="mb-4">Privacy and policy</h3>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 pl-5  text-white">
                <h4 class="mb-4">Join us</h4>
                <i class="fab fa-facebook-square fa-2x pl-1"></i> <i class="fab fa-twitter-square fa-2x pl-1"></i>
                <i class="fab fa-instagram fa-2x pl-1"></i> <i class="fab fa-linkedin fa-2x pl-1"></i>
            </div>
        </div>
        </div>
    </body>
</html>