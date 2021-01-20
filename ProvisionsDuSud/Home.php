<!DOCTYPE HTML>
<html lang="en">
        
    <?php require 'head.php'; ?>
    
      <!-- SLIDER -->
      <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">Best South Products</h1>
                  <p class="lead">Pay Attention!! this site will make you hungry</p>
                  
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-2">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                  <h1 class="display-3 h-color">100% Bio</h1>
                  <p class="lead">All our products are well done without adding any pesticides</p>
                 
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-3">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">Take you time</h1>
                  <p class="lead">You can find whatever you search for so choose well and you'll not regret</p>
                  
                </div>
              </div>
            </div>
          </div>
    
          <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
    
          <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </section>
      <!--End of slider-->
      <!--Service Section==========-->
      <section class="services py-5 text-center">
          <div class="container">
              <div class="row">
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                          <i class="fas fa-globe fa-2x"></i>                            
                      </span>
             <h5 class="font-weight-bold text-uppercase">Worldwide Shipping</h5>
             <p class="text-capitalize">Wherever you are,whatever you do, you can alays reach our products.</p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-stamp fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">Certified by MOA</h5>
           <p class="text-capitalize">Certified by Lebanese Ministry of Agriculture for high quality.</p>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">30 Days Money Back</h5>
           <p class="text-capitalize">If you don't get your prodcuts in 30 days you will have your money back, everything is safe here.</p>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
 
      <!--Best Seller Products-->
      <section class="seller py-5">
        <div class="container">
          <!--Section title-->
          <div class="row mb-5">
            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1">
                Best Seller Products
              </h1>
            </div>
          </div>
          <!---End of Title-->
          <div class="row">
           <div class="col-sm-6 ">
              <div class="seller-item">
                <div class="thumbnail">
                <img src="Images/confiture.jpg" alt="" class="img-fluid photo">
              </div>
              <p>Strawberry Jam</p>
               </div>
            </div>
            <!--End of first column-->
            <div class="col-sm-6 d-flex flex-column justify-content-between">
              <div class="row">
               
                      
              </div>
              <!--end of row-->
              <div class="row">

                <!--first item-->
                <div class="col-sm-6">
                  <div class="seller-item">
                    <div class="thumbnail">
                    <img src="Images/specialspices.jpg" alt="" class="img-fluid seller-img
                    img-top">
                  </div>
                    <p>Special Spices</p>
                    
                  </div>
                </div>
                <!--End of 1st item-->
              
                 <!--first item-->
                 <div class="col-sm-6">
                  <div class="seller-item">
                    <div class="thumbnail">
                    <img src="Images/image19.jpg" alt="" class="img-fluid seller-img
                    img-top">
                  </div>
                  <p>Shanklish</p> 
                   
                  </div>
                </div>
                <!--End of 1st item-->
                

                   
              </div>
            </div>
          </div>
         </div> 
      </section>
      <!---End of Best Seller-->

      
      <!--Contact us Section-->
    
    <!--Contact US-->
    <section class="contact py-5" id="contactpy">
      <div class="container">
          <h2 class="section-heading">Contact Us</h2>
          <form method="post" class="col-lg-6 offset-lg-3" action="" id="contact-form">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" id="message" placeholder="Type your message" row="5"></textarea>
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Subscribe to get latest products</label>
              </div>
              <div class="text-center">
                  <input name="submit" type="submit" value="send a mail" class="btn btn-lg btn-color cont-btn"/>
              </div>
          </form>
      </div>
  </section>
  <!--End of Contact Section-->
    
    <!--Footer-->
    <footer class="footer mt-5">
      <div class="text-center py-5">
          <h2 class="py-3">Provisions Du Sud</h2>
         <div class="mx-auto heading-line"></div>
       </div>
      <div class="container">
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                  <p>For more information and to stay tuned, follow us on social media  </p>
                  <div class="justify-content-center">
                    <a href="http://www.facebook.com"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="http://www.twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="http://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
                    
                  </div>
             </div>
          </div>
          <div class="copyright text-center py-3 border-top text-light">
            <p>&copy;Copy Right Provision Du Sud</p>
              
          </div>
      </div>

  </footer>



 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>