public $item_id1;
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
    
     <div id="dialogoverlay"></div>
     <div id="dialogbox">
         <div>
             <div id="dialogboxhead"></div>
             <div id="dialogboxbody" style=" background: #333; padding: 20px; color: #fff"></div>
             <div id="dialogboxfoot" style="background: #666; padding: 10px; text-align: right">
                 <button onclick="Alert.no()" class="mr-2"> No </button>
                 <button onclick="Alert.ok()" class="ml-1"> Ok </button>
                    
             </div>

         </div>
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
                                    <li class="card-text"><?php $item->item_name?></li>
                                    <li class="card-text"><?php $item->description ?></li>
                              
                                <ul class="list-group list-group-flush">

                                 
                                    <?php if($item->status =='Found'){
                                        
                                       echo '<div id="dom-target">';
                                             
                                                $output = $item->id; //Again, do some operation, get the output.
                                                echo 'Item Id : '. htmlspecialchars($output); /* You have to escape because the result
                                                //                                   will not be valid HTML otherwise. */
                                            
                                       echo ' </div>';
                                        
                                        
                                        echo '<li class="list-group-item">Item Found At : ';
                                        echo $item->location;
                                        echo '</li>';
                                        echo '<li class="list-group-item m-auto">';
                                        echo '<button class="btn btn-primary m-auto" id="alert"> Delete Item';
                                                                         
                                        echo '</button>';
                                        echo '</li>';
                                        
                                    }else{
                                        
                                        echo '<div id="dom-target">';
                                             
                                                $output = $item->id; //Again, do some operation, get the output.
                                                echo 'Item Id :'. htmlspecialchars($output); /* You have to escape because the result
                                                                                   will not be valid HTML otherwise. */
                                            
                                        echo ' </div>';
                                       
                                        echo '<li class="list-group-item">Item Lost At : ';
                                        echo $item->location;
                                        echo '</li>';
                                        echo '<li class="list-group-item">';
                                        echo '<button class="btn btn-primary m-auto" id="alert"> Delete Item';
                                        echo '</button>';
                                   
                                        echo '</li>';
   
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

