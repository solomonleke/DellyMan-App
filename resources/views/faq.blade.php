<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
  integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />  

  <link rel="stylesheet" href="index.css">

  <link rel="shortcut icon" type="image/png" href="images/favicon.png">

  <link rel="stylesheet" href="footer.css">

  <link rel="stylesheet" href="css/delly.css">
  <title>FAQ</title>
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

      </div>

  <div class="container">
      <div id="cotainer">
        <div class="h2F">
            <p class="strongP">Frequently asked questions (FAQ)</p>
          </div>
          <div class="underline"></div>
          <div class="sect">
            <p class="Pbolds">REGISTRATIONS</p>
            @foreach($fetch_faqs as $fetch_faq)

            <p><span>Q. {{$fetch_faq['question']}}</span> {{$fetch_faq['answer']}}</p>

              @endforeach
           
      </div>
      <br><br><br><br><br>
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
  <!-- <div class="coloredBottom">

    <div class="bottomP">
      <p>Still have questions about our Intracity Services?</p>
    </div>
    <div class="bottomB"><button>Contact Us</button></div>
  </div>
  <div class="bottomBorder"></div> -->
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
 

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</body>
</html>