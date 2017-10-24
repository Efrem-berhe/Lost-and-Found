
<div class="row">
    <div class="col-sm-2 Asside-settings">

        <aside>
            <h5 class="mt-5 text-center red-color">Report A Lost Item</h5>
            <div class="row m-auto">

                <a href="<?= site_url() ?>/UploadController/itemlost" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/crop" width="105" height="105"> 
                </a>
            </div>
            <h5 class="mt-5 text-center green-color">Report A Found Item</h5> 
            <div class="row">
                <a href="<?= site_url()?>/UploadController/itemfound" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/Found_Item_2.png"  width="120" height="120">
                </a>

            </div>
   
        </aside>

    </div>
    
    <div class="col-sm-10">
        <div class="jumbotron Padding-Top">
            <div class="row">
                <?php foreach ($items as $item): ?> 
                    <div class="col-sm-4 my-flex-card">
                        <div class="card  mb-3">
                            <img class="card-img-top" src="<?= base_url() ?>assets/uploads/<?php echo $item->img; ?>" height="236" alt="Card image cap">
                            <div class="card-block">
                                <h3 class="card-title"><?php echo $item->status; ?></h3>
  
                                <ul class="list-group list-group-flush">
                              
                                   <li class="list-group-item">Item Resolved At : <?php echo $item->date; ?></li>

                                </ul>
                                <ul class="list-group list-group-flush">
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>   
</div>
</div>