<?php 
  include 'header.php';
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
  'id' => 0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
  $urunsor = $db->prepare("SELECT * FROM urun");
  $urunsor->execute();
?>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 id="headline" class="text-dark text-s-size-30 text-m-size-40 text-thin text-line-height-1"><?php echo $ayarcek['ayar_title'] ?></h1>
              <p class="margin-bottom-0 text-size-16 text-dark"><?php echo $ayarcek['ayar_description'] ?></p>
            </div>  
          </header>
          <div class="background-white full-width"> 
          <!-- -->
          <?php 
            while ($uruncek = $urunsor ->fetch(PDO::FETCH_ASSOC)){
          ?>


            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" title="<?php echo $uruncek['urun_ad'] ?>">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10"><?php echo $uruncek['urun_ad'] ?></h3>
                    <p class="text-white text-size-14 margin-bottom-20"><?php echo $uruncek['urun_detay'] ?></p>  
                  </div> 
                </div> 
                <img class="full-img" src="<?php echo $uruncek['urun_img_path'] ?>" alt="<?php echo $uruncek['urun_keyword'] ?>">
              </a>	
            </div> 

            <?php 
              }
            ?>        
          </div>  
        </article>
      </main>
      
      <!-- FOOTER -->
      <?php 
        include 'footer.php';
      ?>