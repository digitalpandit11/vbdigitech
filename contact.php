<meta charset="utf-8">
     <title>Contact Us for Website Development & Digital Marketing Service in Pune</title>
     <meta name="description" content="We are the top Website Designing & Development Company in Pune. Also, as a Digital Marketing Agency, we gives your Website a Top Spot in Google Ranking."/>
    <meta name="keywords" content="Website Development, Digital Marketing, SEO, SMO, Google Adwords, PPC, ON-Page SEO, OFF-Page SEO"/>
<?php include 'header.php';?>

   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/b15.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ol>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


  <section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Visit Our Office</h4>
                     <p>Swargate, Pune (MH), India</p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Email Us</h4>
                     <p>info@vbdigitech.com</p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Call Us</h4>
                     <p>(+91) 72760 10600</p>
                 </div>
               </div>
            </div><!-- Col 3 end -->

         </div><!-- 1st row end -->

         <div class="gap-60"></div>

         <div>
         	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60541.14937683321!2d73.8231882929691!3d18.491727680866358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x3bc2ebfcde6550d7%3A0xf369475050b9df4a!2sVB%20Digitech%20-%20Website%20Development%20%26%20Digital%20Marketing%20Services%2C%20Office%20No.%201%2C%20Lalwani%20Estate%20Near%20City%20International%20School%2C%20Maharshi%20Nagar%2C%20Pune%2C%20Maharashtra!3m2!1d18.4917309!2d73.85820799999999!4m0!5e0!3m2!1sen!2sin!4v1571663115079!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->

         	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60541.14937683321!2d73.8231882929691!3d18.491727680866358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x3bc2ebfcde6550d7%3A0xf369475050b9df4a!2sVB%20Digitech%20-%20Website%20Development%20%26%20Digital%20Marketing%20Services%2C%20Office%20No.%201%2C%20Lalwani%20Estate%20Near%20City%20International%20School%2C%20Maharshi%20Nagar%2C%20Pune%2C%20Maharashtra!3m2!1d18.4917309!2d73.85820799999999!4m0!5e0!3m2!1sen!2sin!4v1571663115079!5m2!1sen!2sin" width="1400" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

         </div>



         <script>
            function alertat() {


              var fname = document.getElementById('name').value;
              var subject = document.getElementById('sub').value;
              var email = document.getElementById('email').value;
              var phone = document.getElementById('phone').value;
              var msg = document.getElementById('message').value;

              console.log(fname);
              if (fname == ''  || email == '' || subject == '' || phone == '' || msg == '') {

                swal({
                  title: "Fields Empty !",
                  text: "Please check the missing field!",
                  icon: "warning",
                  button: "ok",
                });
                // alert("no");



                // alert("yes");
                // event.preventDefault()
              } else {

                

                swal({
                  title: "Thank you",
                  text: "for contacting us, we will get back to you soon!",
                  icon: "success",
                  button: "ok",
                });

              }

            }
          </script>

          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



         <div class="gap-40"></div>

         <div class="row">

            <div class="col-md-12">
               
               <h3 class="column-title">We love to hear</h3>

               <form id="contact-form" action="contact_process.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control form-control-email" name="email" id="email" 
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Phone</label>
                           <input class="form-control form-control-name" name="phone" id="phone" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Subject</label>
                           <input class="form-control form-control-name" name="sub" id="sub" placeholder="" type="text" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" onclick="alertat()" type="submit">Send Message</button> 
                  </div>
               </form>
            </div>
         
         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
	
<?php include 'footer.php';?>