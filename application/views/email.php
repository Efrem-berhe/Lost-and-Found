<div id="main">
<div class="col-sm-12 p-0">
        <div class="jumbotron Padding-Top">
            <div class="row">
                <?php if(empty($items)){
                     echo'Currently you have no mails';
                    
                }  
                ?>
                <?php foreach ($items as $item): ?> 
                
                    <div class="col-sm-4 my-flex-card">
                        <div class="card  mb-3">
                            <div class="card-block">
                                <h3 class="card-title">message's</h3>

                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item"><?php echo $item->message?></li>                      
                                     
                                    <li class="list-group-item m-auto">
                                        <button  class="btn btn-primary m-auto" > Delete message </button>
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