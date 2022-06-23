<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/contact.css">
    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body>

<div class="hero">
    <nav>
        <h2 class="logo">YH <span>Dessert</span></h2>
    <a href="http://localhost/project2/home.html">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Menu 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="http://localhost/project2/menu.html">Cheesecake</a>
        <a href="http://localhost/project2/setCake.html">Set Cake</a>
        <a href="http://localhost/project2/otherCake.html">Others</a>
      </div>
    </div> 
    <a href="http://localhost/project2/FAQs.html">FAQs</a>
    <a href="http://localhost/project2/contact.php">Contact</a>
    <a href="http://localhost/project2/login.php">Admin Login</a>
    </nav>
  </div>

<section class="about" id="about">
        <h1 class="heading"> <span>contact</span> us </h1>

    <div class="contact-box">
        <div class="contact-left">
            <h3>Send Us A Message</h3>

                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >

                            <!--Grid column-->
                            <div class="input-row">
                                <div class="input-group">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="input-row">
                                <div class="input-group">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                    
                            <!--Grid column-->

                        <!--Grid row-->
                        <div class="input-row">
                            <div class="input-group">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>

                            <!--Grid column-->

                                    <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                    <label for="message">Your message</label>
            
                                    <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="validateForm()">Send</a>
                    </div> <div class="status" id="status"></div>

                    </form>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                <tr>
                    <td>Email</td>
                    <td>yanghao_940319@hotmail.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>017-2115890</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>48, Lorong M/B 7, Medan Bersatu, 34000 Taiping, Perak</td>
                </tr>
            </table>
        </div>
    </div>
    
    <div class="contact-inner-col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15902.246880562907!2d100.7188187!3d4.8450522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90f74439bb7e3a1a!2sYH%20Desserts!5e0!3m2!1sen!2smy!4v1650422074094!5m2!1sen!2smy" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
        </section>

        <!-- footer section starts  -->

<section class="footer">

<div class="share">
        <a href="https://www.facebook.com/yanghaodesserts" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/yh_desserts/?hl=en" class="fab fa-instagram"></a>
        <a href="https://api.whatsapp.com/send?phone=60172115890&app=facebook&entry_point=page_cta&fbclid=IwAR0s9ui8W_nnCbEMuEXpife-Zsa1I_Cz6sUH8oVYXyv2Yt3cfr8JqDkTpz4" class="fab fa-whatsapp"></a>
    </div>

    <div class="links">
        <a href="http://localhost/project2/home.html">Home</a>
        <a href="http://localhost/project2/menu.html">Menu</a>
        <a href="http://localhost/project2/FAQs.html">FAQs</a>
        <a href="http://localhost/project2/contact.php">Contact</a>
</div>

</section>

<!-- footer section ends -->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script>

function validateForm() {
    // var x =  document.getElementById('name').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Name cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('email').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Email cannot be empty";
    //     return false;
    // } else {
    //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if(!re.test(x)){
    //         document.getElementById('status').innerHTML = "Email format invalid";
    //         return false;
    //     }
    // }
    // x =  document.getElementById('subject').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Subject cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('message').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Message cannot be empty";
    //     return false;
    // }
    document.getElementById('status').innerHTML = "Sending...";
    document.getElementById('contact-form').submit();

}
    </script>
</body>

</html>