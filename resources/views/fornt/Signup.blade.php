<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>HC-Signup</title>
<link rel="icon" type="image/ico" href="https://i.pinimg.com/originals/16/aa/df/16aadf06716be2bb9c958b31ee1173a1.jpg" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>

<section class="text-gray-500 bg-gray-900 body-font">
    <a href="/index"><i class="fa fa-home fa-2x text-white " id="homeicon"></i></a>
  <div class="container px-5 py-4 mx-auto flex flex-wrap items-center ">
    <div class="lg:w-2/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white"> <u>Registeration</u> </h1> <br><br><br>
      <h1 class="title-font font-medium text-3xl text-white">Heart Beat, Glucose Discreet and Painless</h1>
      <p class="leading-relaxed mt-4">Continuous Monitoring, Right on your Wrist</p>
    </div>
    <div class="lg:w-3/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
    <div class="form-group">
            <form action="/register" method="Post">
            @csrf
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">First Name</label>
                        <input id="B" type="text" name="fname" id="" id="" pattern="[A-Za-z]+" maxlength="50" required class="form-control">
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">Last  Name</label>
                        <input id="B" type="text" name="lname" id="" id="" pattern="[A-Za-z]*" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Age</label>
                        <input id="B" type="text" name="age" id="" id="" pattern="[0-9]*" minlength="1" maxlength="3" required class="form-control">
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Male</option>
                            <option value="2" required >Female</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Height</label>
                        <input id="B" type="text" name="height" id="" id="" title="Enter Height like 5.9"  pattern="[-+]?[0-9]*[.]?[0-9]+" minlength="3" maxlength="3" required class="form-control">
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Weight</label>
                        <input id="B" type="text" name="weight" id="" id="" title="Enter Weight like 90"  pattern="[0-9]*" minlength="2" maxlength="3" required class="form-control">
                    </div>
    
                </div>
                <div class="row">

                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">CNIC</label>
                        <input id="B" type="text" name="cnic" id="" id=""  pattern="[0-9]{5}*[0-9]{7}*[0-9]{1}" title="Enter CNIC like 00000-0000000-0" minlength="15" maxlength="15" required class="form-control">
                    </div>
 
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Address</label>
                        <input id="B" type="text" name="address" id="" id="" required class="form-control">
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Postal Code</label>
                        <input id="B" type="text" name="postalcode" id="" id="" pattern="[0-9]{5}" minlength="5" maxlength="5"  required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">Contact no</label>
                        <input id="B" type="text" name="cn" id="" id="" pattern="[0-9]{4}*[0-9]{7}" minlength="12" maxlength="12" title="Enter Mobile.SNo like 0000-0000000" required class="form-control">
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="mail">Email</label>
                        <input id="B" type="email" name="email" id="mail" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Diabetes</label>
                        <select name="diabetes" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Yes</option>
                            <option value="0" required >No</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Cardio</label>
                        <select name="cardio" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Yes</option>
                            <option value="0" required >No</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Smoking</label>
                        <select name="smoking" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Yes</option>
                            <option value="0" required >No</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                        <label for="">Active</label>
                        <select name="active" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Yes</option>
                            <option value="0" required >No</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">Hospital</label>
                        <input id="B" type="text" name="hospital" id="" id="" required class="form-control">
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label for="">City</label>
                        <input id="B" type="text" name="city" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <label for="">Do you have cholestrol</label>
                        <select name="chol" id="" class="form-control" required>
                            <option value="" required> -- Select Status --</option>
                            <option value="1" required>Yes</option>
                            <option value="0" required >No</option>
                        </select>
                    </div>

                </div>


                <div class="row">
                    <div class="col-6">
                        <label for="">Username</label>
                        <input id="B" type="text" name="username" title="Enter Password like atleast 5 character" minlength="5" id="" id="" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Password</label>
                        <input id="B" type="password" name="password" id="" title="Enter Password like atleast 7 character"  minlength="7" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for=""></label>
                        <input type="submit" value="Register" class="form-control">
                    </div>
                </div>

            </form>
        </div>
        <h4>i have already account  <a href="/login" class="text-primary">Login </a></h4>
      <!-- <h4 class="text-xs text-gray-600 mt-3">i have already account. </h4> -->
    </div>
  </div>
</section>

</body>
<script>
    const email = document.getElementById("mail");

email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("I am expecting an e-mail address!");
  } else {
    email.setCustomValidity("");
  }
});
</script>
</html