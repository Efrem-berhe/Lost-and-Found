
<div class="row">
    <!--left colomon-->
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
                <a href="<?= site_url() ?>/UploadController/itemfound" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/Found_Item_2.png"  width="120" height="120">
                </a>

            </div>
        </aside>

    </div>
    <!--middle colomon-->
    <div class="col-sm-8 offset-1 mt-3">
        <div class="jumbotron">

            <!-- The Modal -->            
            <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Your message has been sent.</p>                     
                        </div>    
                    </div>
                </div>
            </div>        
            <?php echo form_open_multipart(); ?>
            <fieldset>
                <legend class="text-center">Claim Item</legend>
                <div class="form-group row">
                    <label for="textmessage" class="col-sm-2 col-form-label" >Message</label>
                    <div class="col-sm-10"> 
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="send a message to the person who found the item"name="textmessage" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-2 col-form-label" >Attach File</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="attachfile" id="uploadimage" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="form-group row">

                    <label for="exampleInputFile" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button id="myBtn" type="submit" name="Submitemail" class=" form-control Orange-bg-color">Send Message</button>
                    </div>
                </div>
            </fieldset>
            </form>
            <?php
            if (isset($_POST["Submitemail"])) {
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'effer.vision@gmail.com',
                    'smtp_pass' => 'IhaveVision'
                );


                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                $textmessage = $this->input->post('textmessage', true);

                $this->email->from('effer.vision@gmail.com', 'Efrem Gebremedhin');
                $this->email->to('effer.vision@gmail.com');
                $this->email->subject('Claiming an Item');
                $this->email->message($textmessage);

                $fileData = array();
                // File upload script
                $this->upload->initialize(array(
                    'upload_path' => 'assets/uploads/',
                    'overwrite' => false,
                    'max_filename' => 300,
                    'encrypt_name' => true,
                    'remove_spaces' => true,
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 100,
                    'xss_clean' => true,
                ));

                if ($this->upload->do_upload('attachfile')) {
                    $data = $this->upload->data();
                    $fileData[] = $data;
                    foreach ($fileData as $file) {
                        $file_data = $file;
                    }

                    $file = 'assets/uploads/'
                            . $file_data['file_name'];
                    $this->email->attach($file);
                    $this->email->send();

                    $modal = "<script>

                        $(window).load(function(){
                            jQuery('#thankyouModal').modal('show');
                        });
                       </script>";
                    echo $modal;
                }
            }
            ?> 

        </div>     
    </div>  
</div>


