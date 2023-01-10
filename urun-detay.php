<?php
    require_once "inc/header.php";
    $urun=$db->getRow("SELECT * FROM urun where urun_id=?", array($_GET['urun_id']));
	
    if (empty($urun)) {
        header("Location:index.php");
        exit;
    }
?>
 <section id="product_card">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="index.php"  class="text-decoration-none">Anasayfa</a></li>
                        <li class="breadcrumb-item ">
                            <a href="index.php" class="text-decoration-none">Ürün</a>
                            
                        </li>
                        <li class="breadcrumb-item ctive" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <?php if (isset($_SESSION['userkullanici_mail'])){ ?>
                    <div class="col-lg-5">
                        <a href="#PModal1" class="p-link" data-bs-toggle="modal">
                            <img class="img-fluid product_img" src="img/urunler/<?php echo $urun->urun_foto ?>" alt=".." />
                        </a>      
                    </div>
                    <div class="col-lg-7 ">
                        <div class="heading text-uppercase"><?php echo $urun->urun_ad ?></div>
                        <div class="sub mb-4" ><?php echo $urun->urun_fiyat ?> TL
                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $("input[type='radio']").click(function(){
                                    var deger= $("input[name='inlineRadio1']:checked").val();
                                        if(deger){
                                            $("#sonuc").text(deger)
                                        }
                                    }); 
                                });
                            </script>(<span id='sonuc'></span>KG)
                        </div>
                        <form action="nedmin/netting/islem.php"  method="POST">
                            <div class="subtr mb-4">kg seçin</b>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input  type="radio" name="inlineRadio1" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1 kg</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="1.5">
                                        <label class="form-check-label" for="inlineRadio1">1.5 kg</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="0.25">
                                        <label class="form-check-label" for="inlineRadio1">250 gram</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="0.5">
                                        <label class="form-check-label" for="inlineRadio1">500 gram</label>
                                    </div>
                                </div>
                                <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>">

                                <input type="hidden" name="urun_id" value="<?php echo $urun->urun_id ?>">
                                <div class="d-flex text-lg-center pushtop2">
                                    <div class="me-3 text-black">adet</div>
                                    <input type="text" class="form-control me-4" value="1" name="urun_adet" style="width:100px; height:40px;">
                                    <button type="submit" name="sepetekle" class="btn btn-default continue">Sepete Ekle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } else{?>
                    <div class="col-lg-5">
                        <a href="#PModal1" class="p-link" data-bs-toggle="modal">
                            <img class="img-fluid product_img" src="img/urunler/<?php echo $urun->urun_foto ?>" alt=".." />
                        </a>      
                    </div>
                    <div class="col-lg-7 ">
                        <div class="heading text-uppercase"><?php echo $urun->urun_ad ?></div>
                        <div class="sub mb-4" ><?php echo $urun->urun_fiyat ?> TL
                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $("input[type='radio']").click(function(){
                                    var deger= $("input[name='inlineRadio1']:checked").val();
                                        if(deger){
                                            $("#sonuc").text(deger)
                                        }
                                    }); 
                                });
                            </script>(<span id='sonuc'></span>KG)
                        </div>
                        <form action="nedmin/netting/islem.php"  method="POST">
                            <div class="subtr mb-4">kg seçin</b>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input  type="radio" name="inlineRadio1" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1 kg</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="1.5">
                                        <label class="form-check-label" for="inlineRadio1">1.5 kg</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="0.25">
                                        <label class="form-check-label" for="inlineRadio1">250 gram</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="inlineRadio1" id="inlineRadio1" value="0.5">
                                        <label class="form-check-label" for="inlineRadio1">500 gram</label>
                                    </div>
                                </div>
                                <input type="hidden" name="urun_id" value="<?php echo $urun->urun_id ?>">
                                <div class="d-flex text-lg-center pushtop2">
                                    <div class="me-3 text-black">adet</div>
                                    <input type="text" class="form-control me-4" value="1" name="urun_adet" style="width:100px; height:40px;">
                                    <button type="submit" name="sepetekle2" class="btn btn-default continue">Sepete Ekle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
   
    <!-- Modal -->
     <!-- portfolio modal item 1-->
    <div class="modal fade p-modal" id="PModal1" tabindex="-1" role="dialog" aria-labelledby="myTitle1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center py-5 mt-2">
                <div class="close-modal" data-bs-dismiss="modal" aria-label="Kapat">
                    <img src="img/close-icon.svg" alt="..." />
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="img/urunler/<?php echo $urun->urun_foto ?>" alt="<?php echo $urun->urun_ad ?>" />
                </div>
            </div>
        </div>
    </div>
  
<?php
    require_once "inc/footer.php";
?>