<?php 
  include 'header.php';
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Düzenleme <small> 
                      <?php
                      $durum = $_GET['durum'];
                      if ($durum && $durum  == "ok") {
                        ?>
                          <b style="color:green;">İşlem Başarılı</b>
                        <?php
                      ;}
                      else if ($durum && $durum == "no") {
                        ?>
                          <b style="color:red;">İşlem Başarısız</b>
                        <?php
                      ;}
                        ?>             
                     </small></h2>
                
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     
                     
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="urun_ad" placeholder="Ürün adı giriniz..." type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="urun_durum" required>




                  <option value="1">Aktif</option>



                  <option value="0" >Pasif</option>
                 


                 </select>
               </div>
             </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detayı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="urun_detay" placeholder="Ürün açıklaması giriniz..." type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id']?>">
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="urunekle" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php 
          include 'footer.php'
        ?>