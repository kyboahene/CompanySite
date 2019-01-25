<!doctype html>
<html lang="en">
  <head>
     <?php include_once 'includes/header.php'?>
  </head>
  <body>
     
     <!--Header start-->
    <?php include_once 'includes/navbar.php'?>
       
       <div class="carousel-inner" style="background-image: url(pics/arbutus.jpg); max-height: 25rem;">
        <div class="carousel-item active align-items-center ">
          <div class="carousel-caption justify-content-center">
              <h1 class="text-center text-uppercase my-4 " style="z-index:1; font-size: 60px;">serivces</h1>
            </div>
        </div>
        </div>
      </div>
       <!--Header ends-->
      
       <!--Services-->
      <div class="jumbotron jumbotron-fluid" style="background: white;">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                   <img class="shadow p-3 bg-white"  src="pics/orchard.jpg" alt="service" />
              </div>
              <div class="col-md-6 col-lg-8  my-4">
                  <h2 class="text-center" style="font-size: 40px">Service 1</h2>
                <p class="" style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, dolorem. Libero qui sint enim consequatur veritatis similique molestias alias voluptatum nisi esse dicta reiciendis accusamus obcaecati ut amet tempora vitae deserunt aspernatur, necessitatibus ab labore distinctio deleniti modi. Possimus molestiae odio aliquid ab cupiditate repudiandae veritatis dolorum autem minus consequuntur.</p>
              </div>
            </div>
         </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-lg-8 my-4">
                <h2 class="text-center" style="font-size: 40px">Service 2</h2>
              <p style="font-size: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed suscipit perspiciatis nostrum asperiores earum tempora ea libero placeat accusamus repellendus fugiat nisi, obcaecati quisquam quibusdam maiores explicabo ad voluptate delectus, exercitationem veritatis dignissimos provident, soluta consequatur? Nobis voluptas, praesentium asperiores blanditiis minus laborum officiis totam possimus! Esse veniam aperiam est?</p>
            </div>
            <div class="col-md-6 col-lg-4">
               <img class="shadow p-3 bg-white rounded" src="pics/orchard.jpg" alt="service 2">
            </div>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid" style="background: white;">
          <div class="container-fluid">
             <div class="row">
               <div class="col-md-6 col-lg-4">
                    <img class="shadow p-3  bg-white rounded" src="pics/orchard.jpg" alt="service 1">
               </div>
               <div class="col-md-6 col-lg-8  my-4">
                  <h2 class="text-center" style="font-size: 40px">Service 3</h2>
                 <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, dolorem. Libero qui sint enim consequatur veritatis similique molestias alias voluptatum nisi esse dicta reiciendis accusamus obcaecati ut amet tempora vitae deserunt aspernatur, necessitatibus ab labore distinctio deleniti modi. Possimus molestiae odio aliquid ab cupiditate repudiandae veritatis dolorum autem minus consequuntur.</p>
               </div>
             </div>
          </div>
       </div>
       <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-lg-8 my-4">
                  <h2 class="text-center" style="font-size: 40px">Service 4</h2>
                <p style="font-size: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed suscipit perspiciatis nostrum asperiores earum tempora ea libero placeat accusamus repellendus fugiat nisi, obcaecati quisquam quibusdam maiores explicabo ad voluptate delectus, exercitationem veritatis dignissimos provident, soluta consequatur? Nobis voluptas, praesentium asperiores blanditiis minus laborum officiis totam possimus! Esse veniam aperiam est?</p>
              </div>
              <div class="col-md-6 col-lg-4">
                 <img class="shadow p-3 bg-white rounded" src="pics/orchard.jpg" alt="service 2">
              </div>
            </div>
          </div>
        </div>
        <!--Services-->

      <!-- Footer -->
   <?php include_once 'includes/footer.php'?> 


    <!--JavaScript -->
    <?php include_once 'includes/script.php'?>
    <script>
        $("#services").addClass("active");
    </script>
  </body>
</html>