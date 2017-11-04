

<div id="main" class="jumbotron Padding-Top">

            <h1 class="text-center">Matched Item</h1>
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