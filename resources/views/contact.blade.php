<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />   
     <link rel="stylesheet" href="index.css">
     <link rel="shortcut icon" type="image/png" href="images/favicon.png">
     <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contactus.css">

    <title>Dellyman-contact</title>
</head>

<body>
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt=""></a>
              <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Track Package</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="how-it-works">How it works</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/faq">FAG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Developers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/sign">Sign in/Register</a>
                  </li>
                
                 
                </ul>
                
              </div>
            </div>
          </nav>
          <div class="container">
              <div class="side-content col-sm-12">
                  <h2 class="side-1">Same day</h2>
                  <h2 class="side-2">Delivery</h2>
                  <h2 class="side-3">Guaranteed</h2>
                  <button id="btn-get"><a  href="#">Get Started</a></button>
              </div>
          </div>

    <div class="wrapper-contact">
        <div class="container mycontainer">
            <div class="col-lg-12 col-sm-12">
                <form class="contact-form" method="POST" action="">
                    @csrf
                    <div class="form-input">
                        <div class="col-sm-12" id="contactus">
                            Contact Us
                        </div>

                        <div class="lne">
                        </div>
                        <br><br>
                        @if ($message = Session::get('success'))
                        <div class="success">
                
                            <p>{{$message}}</p>
                
                            <style>
                                .error{
                                    display: grid;
                                    justify-content: center;
                                    background: whitesmoke;
                                    color: rgb(20, 255, 20);
                                    box-shadow: 3px 2px 2px rgb(248, 248, 248);
                                    border-radius: 20px;
                                }
                                .error p{
                                        padding: 10px;
                                        font-size: 20px;
                                        text-transform: capitalize;
                                }
                            </style>
                        </div>
                
                
                        @endif 
                        <div class="row">
                           
                            <div class="col-md-3 label">
                                <label for="exampleInputText-area" class="form-label">Name:</label>
                            </div>
                            <div class="col-md-7">
                                <input name="name" type="text" placeholder="Name">
                                <span>@error('name'){{$message}}@enderror </span>
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-3 label">
                                <label  for="exampleInputText-area" class="form-label">Email:</label>
                            </div>
                            <div class="col-md-7">
                                <input name="email" type="email" placeholder="Email">
                                <span>@error('email'){{$message}}@enderror </span>
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-3 label">
                                <label for="exampleInputText-area" class="form-label">PhoneNumber:</label>
                            </div>
                            <div class="col-md-7">
                                <input name="phonenumber" type="number" placeholder="PhoneNumber">
                                <span>@error('phonenumber'){{$message}}@enderror </span>
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-3 label">
                                <label for="exampleInputText-area" class="form-label">Message:</label>
                            </div>
                            <div class="col-md-7">
                                <textarea name="message" placeholder="Messa" class="txtarea" cols="" rows=""></textarea>
                                <span>@error('message'){{$message}}@enderror </span>
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-3 label">
                                
                            </div>
                            <div class="col-md-7 check-box" id="recaptchaa">
                                <div class="row">
                                    <div class="col-md-2">
                                        <input class="form-check-input check_box" type="checkbox" value="" id="flexCheckDefault">
                                    </div>

                                    <div class="col-md-7">
                                        
                                        <p id="text-capt">I'm not a robot</p>
                                       
                                    </div>
                                    <div class="col-md-3">
                                        <img src="images/recaptcha.png" alt="" id="recaptcha-img">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-3">
                                

                            </div>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary" id="bttn">Send Message</button>

                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section6">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="header-6">Still have questions about our <br> Intracity Services?</h1>
                    </div>
                    <div class="col-md-4">
                        <button class="btn-6">Contact us</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="footer-section">
          
        <button class="chatt"><i class="fas fa-comments"></i></button>
        
          <div class="container">
              <div class="container-footer">
                  <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img class="img-ft" src="images/logo.png" alt="">
                        <p>We know the problem with same day delivery and we just want to solve it.</p>
                        <div class="icon">
                            <i class="fab fa-facebook"></i> 
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h1 class="header-foot">Our Company</h1>
                         <div class="div">
                             <a class="anc" href="">About us</a>
                             <a class="anc" href="">Blog</a>
                             <a class="anc" href="">API</a>
                         </div>
                

                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h1 class="header-foot">Support</h1>
                          <div class="div">
                            <a class="anc" href="">Help Center</a>
                            <a class="anc" href="">Privacy Policy</a>
                            <a class="anc" href="">Terms & Conditions</a>
                            <a class="anc" href="">FAQ's</a>
                        </div>
                        <p><i class="fas fa-envelope"></i> support@dellyman.com</p>


                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h1 class="header-foot">Contact us</h1>
                          <p>Dellyman Center, <br>
                            78B CMD Road, <br>
                            By GPS School, <br>
                            Close to Magodo Brooks Estate, <br>
                            Lagos, Nigeria
                        </p>
                        <p><i class="fab fa-whatsapp"></i>  +234 806 191 0209 (SMS ONLY)</p>
                        <p>0700 33559626 (Calls Only)</p>
                        <p><i class="fas fa-envelope"></i>  info@dellyman.com (Enquiries Only)</p>
                        <p><i class="fas fa-envelope"></i>  support@dellyman.com (Support Only)</p>


                      </div>
                      <div class="col-md-12">
                        <div class="hr"></div>
                        <div class="copywrite">

                            <p> <i class="far fa-copyright"></i> Dellyman. All rights reserved.</p>
                        </div>
                      </div>

                  </div>

              </div>
          </div>
      </div>













    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>