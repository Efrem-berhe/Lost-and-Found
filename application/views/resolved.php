 
<div id="main" class="jumbotron Padding-Top">
    <div class="row">
        <?php foreach ($items as $item): ?> 
            <div class="col-sm-4 my-flex-card">
                <div class="card  mb-3">
                    <img class="card-img-top" src="<?= base_url() ?>assets/uploads/<?php echo $item->img; ?>" height="236" alt="Card image cap">
                    <div class="card-block">
                        <h3 class="card-title"><?php echo $item->status; ?></h3>

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">Location : <?php echo $item->location; ?></li>

                        </ul>
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