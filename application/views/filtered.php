

<div class="row">
    <div class="col-sm-2 Asside-settings">

        <aside>
            <h5 class="mt-5 ml-3 red-color">Report A Lost Item</h5>
            <div class="row m-auto">
                <a href="<?= site_url() ?>/UploadController/itemlost" class="m-auto">
                    <img src="<?= base_url()?>assets/uploads/crop" width="105" height="105"> 
                </a>
            </div>
            
            <h5 class="mt-5 ml-3 green-color">Report A Found Item</h5>
            <div class="row">
                <a href="<?= site_url() ?>/UploadController/itemfound" class="m-auto">
                    <img src="<?= base_url()?>assets/uploads/Found_Item_2.png"  width="120" height="120">
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


                                    <?php
                                    if ($item->status == 'Found') {

                                        echo '<li class="card-text">';
                                        echo $item->description;
                                        echo '</li>';

                                        echo '<li class="list-group-item">Item Found At : ';
                                        echo $item->location;
                                        echo '</li>';

                                        echo '<a class="btn btn-primary" href="';
                                        echo site_url();
                                        echo '/ClaimController/claimItem">';
                                        echo '<li class="" >Claim</li>';
                                        echo '</a>';
                                    } else {

                                        echo '<li class="card-text">';
                                        echo $item->description;
                                        echo '</li>';

                                        echo '<li class="list-group-item">Item Lost At : ';
                                        echo $item->location;
                                        echo '</li>';

                                        echo '<a class="btn btn-primary" href="';
                                        echo site_url();
                                        echo '/ClaimController/reportFound">';
                                        echo '<li class="" >Found Item</li>';
                                        echo '</a>';
                                    }
                                    ?>

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