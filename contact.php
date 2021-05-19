<?php 
  include 'header.php';
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
  'id' => 0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">İletişim</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Dark Side'ın gücüyle yaptığımız kahveleri tatmak için bizimle iletişime geç</p>
            </div>  
          </header>
          <section class="full-width background-dark">
            <div class="s-12 m-12 l-6">
              <!-- Change the background image -->  
              <div style="background-image: url(img/img-contact.jpg);" class="contact-image" ></div>
            </div>
            <div class="s-12 m-12 l-6 text-center">
              <div class="padding-2x">
                <i class="icon-sli-location-pin text-white text-size-30 center"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Adresimiz</h2>                
                <p><?php echo $ayarcek['ayar_adres'] ?></p>
                <i class="icon-sli-envelope text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">E-mail</h2>                
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><?php echo $ayarcek['ayar_mail'] ?></a><br>
                <i class="icon-sli-earphones-alt text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Telefon Numaralarımız</h2>                
                <p><?php echo $ayarcek['ayar_tel'] ?></p>
                <p><?php echo $ayarcek['ayar_gsm'] ?></p>
                <p><?php echo $ayarcek['ayar_gsm'] ?> </p>
              </div>
            </div>
          </section>
          
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Bize Ulaşın</h4>
              <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email" placeholder="E-mailiniz" title="Your e-mail" type="text">
                      <p class="email-error form-error">Please enter your e-mail.</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name" placeholder="Adınız" title="Your name" type="text">
                      <p class="name-error form-error">Please enter your name.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="subject" class="subject" placeholder="Konu" title="Subject" type="text">
                  <p class="subject-error form-error">Please enter the subject.</p>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Mesajınız" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Gönder</button></div>
              </form>
            </div>           
          </section> 
        </article>
      </main>
      
      <!-- FOOTER -->
      <?php 
        include 'footer.php';
      ?>