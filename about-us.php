<?php 
  include 'header.php';
  $hakkimizdasor=$db->prepare("SELECT * FROM hakkımızda where hakkimizda_id=:id");
  $hakkimizdasor->execute(array(
  'id' => 0
  ));
  $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section-top-padding background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1"><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h1>
              <p class="margin-bottom-0 text-size-16 text-dark"><?php echo $hakkimizdacek['hakkimizda_icerik'] ?></p>
            </div>  
          </header>
          <section class="section-top-padding background-white"> 
            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-4 margin-m-bottom">
                  <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-03.jpg" alt=""></a>
                  <h2>Vizyonumuz</h2>
                  <p class="margin-bottom"><?php echo $hakkimizdacek['hakkimizda_vizyon'] ?></p>                
                </div>
                <div class="s-12 m-12 l-4 margin-m-bottom">
                  <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-04.jpg" alt=""></a>
                  <h2>Misyonumuz</h2>
                  <p class="margin-bottom"><?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>                 
                </div>
                <div class="s-12 m-12 l-4 margin-m-bottom">
                  <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-05.jpg" alt=""></a>
                  <h2>Kahve Hakkında</h2>
                  <p class="margin-bottom"><?php echo $hakkimizdacek['hakkimizda_referans'] ?></p>                 
                </div>
              </div>
            </div>
          </section>
          <section class="section-top-padding background-white">
            <div class="line">
              <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center"><span class="text-dark">-</span> Takımımız <span class="text-dark">-</span></h2> 
              <p class="margin-bottom-50 text-center">
                Karanlık tarafın gücü ile müthiş kahveleri masanıza kadar ulaştıran takımımız
              </p>  
              <div class="carousel-blocks owl-carousel">                                                                                                            
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                    <img class="full-img border-image border-primary" src="img/team-01.jpg" alt="" title="Team" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">Darth Vader</h3>
                    <p class="text-size-14 text-dark margin-bottom-10">Dark Boss</p>
                    <a target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-20"></i></a> <a target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-20"></i></a> <a target="_blank" href="https://www.google.com"><i class="icon-google_plus_circle text-size-20"></i></a>
                  </div>                                                                                                                                                              
                </div>
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                    <img class="full-img border-image border-primary" src="img/team-02.jpg" alt="" title="Team" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">Boba Fett</h3>
                    <p class="text-size-14 text-dark margin-bottom-10">Barista</p>
                    <a target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-20"></i></a> <a target="_blank" href="https://www.google.com"><i class="icon-google_plus_circle text-size-20"></i></a>
                  </div>                                                                                                                                                              
                </div>
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                    <img class="full-img border-image border-primary" src="img/team-03.png" alt="" title="Team" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">General Griveous</h3>
                    <p class="text-size-14 text-dark margin-bottom-10">Barista</p>
                    <a target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-20"></i></a> <a target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-20"></i></a> <a target="_blank" href="https://www.google.com"><i class="icon-google_plus_circle text-size-20"></i></a>
                  </div>                                                                                                                                                              
                </div>                
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                    <img class="full-img border-image border-primary" src="img/team-04.jpg" alt="" title="Team" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">Darth Maul</h3>
                    <p class="text-size-14 text-dark margin-bottom-10">Waiter</p>
                    <a target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-20"></i></a> <a target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-20"></i></a> <a target="_blank" href="https://www.google.com"><i class="icon-google_plus_circle text-size-20"></i></a>
                  </div>                                                                                                                                                              
                </div>                
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                    <img class="full-img border-image border-primary" src="img/team-05.jpg" alt="" title="Team" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">Stormtrooper</h3>
                    <p class="text-size-14 text-dark margin-bottom-10">Waiter</p>
                    <a target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-20"></i></a> <a target="_blank" href="https://www.google.com"><i class="icon-google_plus_circle text-size-20"></i></a>
                  </div>                                                                                                                                                              
                </div>                              
              </div>                                                                                                                                                                                                                                                                                         
            </div> 
          </section>
          <section class="section background-white"> 
            <div class="line">      
              <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center"><span class="text-dark">-</span> Müşterilerimiz <span class="text-dark">-</span></h2> 
              <p class="margin-bottom-50 text-center">
                Gücün karanlık tarafının yaptığı kahvelerden vazgeçemeyen müşterilerimiz.  
              </p>                                                                                               
              <div class="margin2x">                                                                                              
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                 
                  <img class="margin-bottom-40" src="img/logo-5.png" alt="">                                                                                                                                                            
                </div>
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                   
                  <img class="margin-bottom-40" src="img/logo-2.png" alt="">                                                                                                                                                            
                </div>
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                   
                  <img class="margin-bottom-40" src="img/logo-3.png" alt="">                                                                                                                                                            
                </div>
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                   
                  <img class="margin-bottom-40" src="img/logo-4.png" alt="">                                                                                                                                                            
                </div>
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                 
                  <img class="margin-bottom-40" src="img/logo-6.png" alt="">                                                                                                                                                            
                </div>
                <div class="s-6 m-4 l-2">                                                                                                                                                                                                 
                  <img class="margin-bottom-40" src="img/logo-1.png" alt="">                                                                                                                                                            
                </div>
               
                                                                                                                                                                                                           
              </div>
            </div>
          </section>
        </article>
      </main>
      
      <!-- FOOTER -->
<?php 
  include 'footer.php';
?>