<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text//css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text//css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
 
       
        
    <title>Registration Form</title>
</head>
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
    .box
    {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    .containter
    {
        background-color: rgba(61, 47, 9, 0.575);
        border-radius: 40px;
        width: 1000px;
        padding: 20px;
        
    }
    body
    {
        background-image: url(https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/84366486/original/c490739223326be0ddccbf3bd1d7381ce7926fa5/do-stunning-background-videos-for-your-website.png);
    }
    label
    {
        color: orange;
        font-size: 20px;
        font-family: calibri;
    }
    #B
    {
        background-color: rgba(61, 47, 9, 0.575);
        color: white;
        border-radius: 20px;
        
    }
    #A
    {
        background-color: rgba(61, 47, 9, 0.575);
        color: orange;
        font-size: 20px;
        border-radius: 20px;

    }
    #A:hover
    {
        background-color: rgba(255, 255, 255, 0.308);
        border:1px solid rgba(61, 47, 9, 0.575);
        color:black;
    }

    /* ---------------------------------------------------------- */
    @-webkit-keyframes yellow 
    {
        from { -webkit-box-shadow: 0 0 50px rgb(100, 80, 23); }
        30% {  -webkit-box-shadow: 0 0 50px #808080; }
        to {-webkit-box-shadow: 0 0 100px #808080; }
    }

.containter 
{    
    outline:none;
    -webkit-animation-name: yellow;
    -webkit-animation-duration: 5s;
    -webkit-animation-iteration-count: infinite;
}

/------------------images--------------/
.main-section{
    margin: 0 auto;
    padding-left:2px;
    margin-bottom:100px;
    background-color:#fff;
    box-shadow: 0px 0px 20px c1c1c1;
}
</style>
<body class="bg-info">

    <div class="box">
    <div class="containter">
        <h1 style="text-align: center; margin-bottom: 50px; color: white; font-family: geneva; font-size: 50px;">Registration Form</h1>
        <div class="form-group">
            <form class="form-detail" action="{{url('/add_data')}}" method="POST">
            @if(\Session::has('success'))
                <div class="alert">
                <h3>{{\Session::get('success')}}</h3>

                </div>
                @endif
            {{csrf_field()}}
            <h1 style="text-align:left; margin-bottom: 5px; margin-top: 50px; color:White; font-family: geneva; font-size: 30px;">Personal Information </h1>
            <div class="row">
                <div class="col-4">
                    <label for="">Owner Name</label>
                    <input id="B" type="text" name="name" id="" id="" class="form-control">
                </div>
                <div class="col-4">
                    <label for="">Father Name</label>
                    <input id="B" type="text" name="fname" id="" id="" class="form-control">
                </div>
                <div class="col-4">
                        <label for="">CNIC#</label>
                        <input id="B" type="text" name="cnic" id="" id="" class=" form-control">
                </div>
            </div>

                
                <div class="row">
                    <div class="col-4">
                        <label for="">Phone #</label>
                        <input id="B"type="text" name="phoneno" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Email</label>
                        <input id="B"type="text" name="email" id="" class="form-control">
                    </div>
                    <div class="col-4">
                            <label for="">Password</label>
                            <input id="B" type="text" name="password" id="" class="form-control"> 
                    </div>
                </div>
                <h1 style="text-align:left; margin-bottom: 5px; margin-top: 50px; color:White; font-family: geneva; font-size: 30px;">Hall Information </h1>
                <div class="row">
                    <div class="col-4">
                        <label for="">Hall Name</label>
                        <input id="B" type="text" name="hname" id="" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Hall Type</label>
                        <select id="B" name="halltype" id="" class="form-control">
                            <option value="">Wedding Hall</option>
                            <option value="">Birthday Hall</option>
                            <option value="">Party Hall</option>
                            <option value="">Open Lawn</option>
                           
                        </select>
                    </div>
                
                    <div class="col-4">
                            <label for="">Hall Address</label>
                            <input id="B" type="text" name="haddress" id="" id="" class=" form-control">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-4">
                        <label for="">Hall Capacity</label>
                        <input id="B" type="hcapacity" name="hcapacity" class="form-control" Placeholder="No. Of Persons">
                    </div>
                    <div class="col-4">
                        <label for="">Parking Capacity </label>
                        <input id="B"type="parkingcapacity" name="parkingcapacity" class="form-control">
                        
                    </div>
                    <div class="col-4">
                        <label for="">Snaps Of Hall </label>
                        <input id="B"type="parkingcapacity" name="parkingcapacity" class="form-control">
                        
                    </div>
                    
                </div>
                <h1 style="text-align:left; margin-bottom: 5px; margin-top: 50px; color:White; font-family: geneva; font-size: 30px;">Dishes Information </h1>
                    <div class="row">
                        <div class="col-4">
                            <label for="">Dish 1</label>
                            <input id="A" type="text"  class=" form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Dish 2</label>
                             <input id="A" type="text"  class=" form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Dish 3</label>
                            <input id="A" type="text"  class=" form-control">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-4">
                        <label for="">Dish 4</label>
                        <input id="A" type="text"  class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Dish 5</label>
                        <input id="A" type="text"  class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Add more Dish</label>
                        <input id="A" type="text" class=" form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Price Per Head</label>
                        <input id="A" type="text" placeholder="Pkr/-" class=" form-control">
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12">
                        <label for=""></label>
                        <input id="B" type="submit" value="Save/Insert data" name="submit" class=" form-control">
                    </div>
                </div>     
            </form>  
        </div>
      <!----------------images--------------- -->
                        <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-11 main-section">
                                <h1 class="text-center text-danger">Upload Images</h1>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                         
        <input type="file" id="file-1" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="6">
                                    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fiileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript" ></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js></script>
      

    
                                         <script type="text">
                                         $("#file-1").fileinput({
                                            theme:'fa',
                                            uploadUrl: "/add-submit ",
                                            uploadExtraData:function(){
                                                return{
                                                    _token:$("input[name='_token']").val()
                                                };
                                            },
                                            allowedFileExtensions:['jpg','png','gif'],
                                            overwriteInitial:false,
                                            maxFileSize:2000,
                                            maxFileNum=8,
                                            slugCallback:function(filename){
                                                return filename.replace('(','').replace(']','');
                                            } 
                                         });
                                         </script>
                                        </div>  
                                </div> 
                                
                        </div> 
                         

                                 
    </div>
</div>
</form>

</body>
</html>