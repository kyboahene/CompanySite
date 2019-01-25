<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'includes/header.php'?> 
  </head>
   <body>
     <!--Header start-->
    <?php include_once 'includes/navbar.php'?>

        <div class="carousel-inner" style="background-image: url(pics/apricots.jpg); max-height:25rem;" >
        <div class="carousel-item active align-items-center ">
          <div class="carousel-caption justify-content-center">
              <h1 class="text-center text-uppercase my-4" style="z-index:1; font-size: 60px;">about</h1>
            </div>
        </div>
        </div>
      </div>

      <!--About Section-->
      <Section  class="my-2 jumbotron jumbotron-fluid " style="background:white;">
        <div class="container">
          <div class="row ">
              <div class=" col-md-6 col-lg-6"  >
                  <h2 class ="display-5 pb-2 " style="font-size:50px;">&nbsp;About Our Company</h2><div class="v-line"></div>
                  <p class="Lead" style="font-size:18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi similique quis culpa ipsam voluptates adipisci ipsum cumque fugiat repellendus iste! Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, pariatur? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi cumque iste autem quod aliquid error, facere pariatur, ab id atque ipsa quas ducimus modi, et aliquam molestiae dolorum nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sunt quibusdam delectus et incidunt voluptatem facilis iste tempore, fuga nihil exercitationem reprehenderit quasi nemo obcaecati sed beatae animi praesentium laboriosam. </p>      
           </div>
            <div class=" col-md-6 col-lg-6">
            <br><img src="pics/fruit-basket.jpg" class="img-md-fluid"alt="">
            </div>
            
          </div>
        </div>
    </Section>
  <!--About Section ends-->
    
    <!--Scrollup button-->
    <button onclick="topFunction()" class="" id="my_btn" title="Go to top"><i class="arrow-top"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 100 320 512"><path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"/></svg>
    </i></button>

  </Section>
  <!--Services Section-->

  <section id="team" class=" jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
      <div class="container">
          <div class="row justify-content-xs-center">
            <div class="col-md-12 col-sm-12 ">
              <h2 class="display-5 text-center my-3" style="font-size:50px;"><div class="v-line"></div>&nbsp;People Behind the Firm</h2> 
            </div>
            <div class="col-md-3 col-sm-6">
              <img src="pics/face3.jpg" class="img-thumbnail shadow p-3 mb-5 bg-white rounded" alt="team img">
              <h3 class="text-center">Jonny Thinker</h3>
              <h5 class="text-center">CEO </h5>
            </div>
            <div class="col-md-3 col-sm-6">
              <img src="pics/download.jpg" class="img-thumbnail shadow p-3 mb-5 bg-white rounded" alt="team img">
              <h3 class="text-center">Samantha Puth</h3>
              <h5 class="text-center">Treasurer</h5>
            </div>
            <div class="col-md-3 col-sm-6">
              <img src="pics/face2.jpg" class="img-thumbnail shadow p-3 mb-5  rounded" alt="team img">
              <h3 class="text-center">George Walker</h3>
              <h5 class="text-center">Chief Marketer</h5>
            </div>
            <div class="col-md-3 col-sm-6">
              <img src="pics/face4.jpg" class="img-thumbnail shadow p-3 mb-5  rounded" alt="team img">
              <h3 class="text-center">Mary Sandar</h3>
              <h5 class="text-center">Secretary</h5>
            </div>
          </div>
     </section>

     <!-- Footer -->
     <?php include_once 'includes/footer.php'?>
      
    <!--JavaScript -->
    <?php include_once 'includes/script.php'?>
    <script>
        $("#about").addClass("active");
    </script>
  </body>
</html>