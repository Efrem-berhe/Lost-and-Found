
<div id="main">

    <div id="dialogoverlay"></div>
    <div id="dialogbox">
        <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody" style=" background: #333; padding: 20px; color: #fff"></div>
            <div id="dialogboxfoot" style="background: #666; padding: 10px; text-align: right">
                <button onclick="Item.close()" class="mr-2 btn btn-primary"> No </button>
                <button onclick="Item.delete()" class="ml-1 btn btn-primary Orange-bg-color "> Yes </button>

            </div>

        </div>
    </div>

    <div class="col-sm-12 p-0">
        <div class="jumbotron Padding-Top">
            <div class="row">
                <?php if(empty($items)){
                     echo'<img class="card-img-top m-auto" src="';
                     echo base_url();
                     echo 'assets/uploads/myItem.png">';
                }  
                ?>
                <?php foreach ($items as $item): ?> 
                
                    <div class="col-sm-4 my-flex-card">
                        <div class="card  mb-3">
                            <img class="card-img-top" src="<?= base_url() ?>assets/uploads/<?php echo $item->img; ?>" height="236" alt="Card image cap">
                            <div class="card-block">
                                <h3 class="card-title"><?php echo $item->status; ?></h3>

                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">Item Name :  <?php echo $item->item_name ?></li>                      
                                    <li class="list-group-item">Item Found At : <?php echo $item->location ?></li> 

                                    <li class="list-group-item m-auto">
                                        <button onclick="Item.itemid(<?php echo $item->id; ?>);" class="btn btn-primary m-auto" > Delete Item </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>
    </div>   
</div>