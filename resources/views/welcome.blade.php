
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Onilu Prime</title>
<!-- Bootstrap CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Linear icons CSS-->
<link href="assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/animate/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<link href="css/one.css" id="style_theme" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
<!-- Pre Loader -->
<div id="loader"></div>
<!-- Header -->
<header id="home" class="welcome-hero-area">
  <div class="top-bar hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <ul class="list-unstyled list-inline">
            <li>
              <p><i class="fa fa-envelope"></i><a href="mailto:support@oniluprime.com">support@oniluprime.com</a></p>
            </li>
            <li>
              <p><i class="fa fa-phone"></i> Call us +234 706 051 2502</p>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 text-right">
          <div class="top-header-wrapper">
            <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> 
          <!-- START LOGO -->
          <div class="logo"> <a href="/">Onilu Prime</a> </div>
          <!-- END LOGO --> 
        </div>
        <div class="col-md-9"> 
          <!-- START MAIN MENU -->
          <nav class="navbar navbar-default"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <!-- Logo --> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="smoth-scroll" href="#home">Home</a></li>
                <li><a class="smoth-scroll" href="#aboutus">About Us</a></li>
                <li><a class="smoth-scroll" href="#contactus">Contact Us</a></li>
                <li><a class="smoth-scroll" href="#authenticate">Login</a></li>
                <li><a class="smoth-scroll" href="#authenticate">Register</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </nav>
          <!-- END MAIN MENU --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Start -->
  <div class="banner-wrapper">
    <div class="container">
      <div class="banner-content">
        <div class="banner-content-table-cell">
          <h1>We are <span id="js-rotating">Creative | Professional | Attentive</span></h1>
          <p>With our online support system, we are always ready to listen</p>
          <a href="javascript:void(0)" class="btn btn-default">Send a Feedback</a></div>
      </div>
    </div>
  </div>
  <!-- Banner End --> 
</header>
<!-- About Us Start -->
<section id="aboutus" class="aboutus">
  <div class="container">
    <div class="section-title">
      <h2>About <span>Onilu Prime</span></h2>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="about-details">
          <h4>About Our Support System</h4>
          <img src="images/about-img.jpg" alt="">
          <p>Your satisfaction is our top priority, that is why being attended to by experts in the system is important to us.</p>
          <a class="readmore" href="#">Read More</a> </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="we-do">
          <h4>How You Help</h4>
          <img src="images/about-img.jpg" alt="">
          <p>Working based on your suggestions, we make amendments where necessary to serve all our customers better.</p>
        </div>
      </div>
     
    </div>
  </div>
</section>

<!-- Contact Us Start -->
<section id="contactus" class="contactus">
  <div class="container">
  <div class="row">
      <div class="section-title">
        <h2>Create <span>Feedback</span></h2>
      </div>
    </div>
    <p class="text-muted"> Sign In to be Able to Monitor Feedback Tickets You've Created</p>
  <div class="row">
  <div class="col-sm-8">
    <form id="contact-form" class="contact-form" method="post">
      <div class="row">
        <div class="col-sm-6"> <span>Name</span>
          <div class="form-group"> <i class="fa fa-user-o"></i>
            <input name="name" id="name" class="form-control" required type="text">
          </div>
        </div>
        <div class="col-sm-6"> <span>E-mail</span>
          <div class="form-group"> <i class="fa fa-envelope-o"></i>
            <input name="email" id="email" class="form-control" required type="email">
          </div>
        </div>
        <div class="col-sm-6"> <span>Feedback Category</span>
          <div class="form-group"> 
            <select class="form-control">
                <option>Complaint</option>
                <option>Suggestion</option>
                <option>Comment</option>
                <option>Enquiry</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6"> <span>Related Section</span>
          <div class="form-group"> 
            <select class="form-control">
                <option>Delivery</option>
                <option>Quality Assurance</option>
                <option>Customer Relation</option>
                <option>Service Optimization</option>
                <option>Others</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12"> <span>Message</span>
          <div class="form-group"> <i class="fa fa-comments-o"></i>
            <textarea rows="4" name="message" id="message" class="form-control" required></textarea>
          </div>
        </div>
      </div>
      <!-- / .row -->
      <button type="submit" class="readmore">Send Message</button>
    </form>
  </div>
  <div class="col-sm-4"> 
    <!-- contact address start-->
    <div class="contact-address text-center">
      <div class="contact-info">
        <div class="contact-icon"> <i class="fa fa-map-marker"></i> </div>
        <p>10 Anywhere, Everywhere Street  <span> University of Ibadan, Ibadan </span> <span>Nigeria</span></p>
        <p> <abbr title="Email">E:</abbr> support@oniluprime.com <span> <abbr title="Phone">P:</abbr> (234) 706 051-2502 </span></p>
      </div>
    </div>
  </div>
  <!-- contact address end--> 
</div>
</div>
</section>
<!-- Contact Us End --> 
<section id="authenticate" class="contactus">
  <div class="container">
  <div class="row">
      <div class="section-title">
        <h2>Login / <span>Register</span></h2>
      </div>
    </div>
   
  <div class="row">
  <div class="col-sm-6">
    <p class="text-info text-center">Sign in into your account</p>
    <form id="contact-form" class="contact-form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <div class="row">
        <div class="col-sm-12"> <span>Email</span>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> <i class="fa fa-user-o"></i>
            <input name="email" class="form-control" required value="{{ old('email') }}" type="email">
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="col-sm-12"> <span>Password</span>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> <i class="fa fa-key"></i>
            <input name="password" class="form-control" required type="password">
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        
      </div>
      <!-- / .row -->
      <button type="submit" class="readmore pull-right">Login</button>
    </form>
  </div>
  <div class="col-sm-6">
    <p class="text-info text-center">Create a new Account</p>
    <form id="contact-form" class="contact-form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
      <div class="row">
      <div class="col-sm-6"> <span>First Name</span>
          <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}"> <i class="fa fa-user-o"></i>
            <input name="fname" class="form-control" required type="text" value="{{ old('fname') }}">
            @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="col-sm-6"> <span>Last Name</span>
          <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}"> <i class="fa fa-user-o"></i>
            <input name="lname" class="form-control" required type="text" value="{{ old('lname') }}">
            @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="col-sm-12"> <span>Email</span>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> <i class="fa fa-envelope-o"></i>
            <input name="email" class="form-control" required type="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="col-sm-6"> <span>Password</span>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> <i class="fa fa-key"></i>
            <input name="password" class="form-control" required type="password">
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="col-sm-6"> <span>Confirm Password</span>
          <div class="form-group"> <i class="fa fa-key"></i>
            <input name="password_confirmation" class="form-control" required type="password">
           
          </div>
        </div>
        <div class="col-sm-12"> <span>Phone Number</span>
          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}"> <i class="fa fa-phone"></i>
            <input oninput="validate(this)" maxlength="11" name="phone" class="form-control" required type="number" value="{{ old('phone') }}">
            @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
      </div>
      
      <!-- / .row -->
      <button type="submit" class="readmore pull-right">Register</button>
    </form>
  </div>
  
</div>
</div>
</section>
<!-- Copy Rights Start -->
<footer>
  <div class="container">
    <p>&copy; Copyright <script type="text/javascript">
var d=new Date();
document.write(d.getFullYear());
</script> by Olayinka Z. for Onilu Prime | All Rights Reserved.</p>
  </div>
</footer>
<!-- Copy Rights End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="assets/jquery/jquery.animateNumber.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/jquery/plugins.js"></script> 
<script src="assets/easing/jquery.easing.min.js"></script> 
<script src="assets/jquery/morphext.min.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="js/custom.js"></script>
<script>
function validate(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
}
</script>
</body>

</html>