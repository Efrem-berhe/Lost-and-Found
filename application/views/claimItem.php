
  <div id="main" class="jumbotron Padding-Top"> 
    <!--middle colomon-->
    <div class="col-sm-8 offset-1 mt-3">
        

            <!-- The Modal -->            
            <div id="dialogbox">
         <div>
             <div id="dialogboxhead"></div>
             <div id="dialogboxbody" style=" background: #333; padding: 20px; color: #fff"></div>
             <div id="dialogboxfoot" style="background: #666; padding: 10px; text-align: right">
                
                 <button onclick="Alert.ok()" class="ml-1 btn btn-primary Orange-bg-color "> OK </button>
                    
             </div>

         </div>
     </div>  
            <?php foreach ($items as $item): ?> 
            
            <?php echo form_open_multipart(); ?>
           
            <fieldset>
                <legend class="text-center">Claim Item</legend>
            
                    <?php if(!empty($item->question1)){
                        echo '<h4 class="mb-2">Please answer the following secrete questions</h4>';
                        echo '<blockquote class="card">';
                          echo' <p class="mb-0 text-center ">';
                          echo '1.  ' . $item->question1;
                          echo '</p>';
                          echo '</blockquote>';
                        
                    }
                    ?>
                
                 <?php if(!empty($item->question2)){
                         echo '<blockquote class="card">';
                          echo' <p class="mb-0 text-center ">';
                          echo '2.  ' . $item->question2;
                          echo '</p>';
                          echo '</blockquote>';
                        
                    }
                    ?>
              
                 <?php if(!empty($item->question3)){
                        echo 'Please answer the secrete questions';
                        echo $item->question3;
                    }
                    ?>
                
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
            <?php endforeach; ?>
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
                            Alert.render('Your message has been sent successfuly ');
                        });
                       </script>";
       echo $modal;
                }
            }
            ?> 

        </div>     
    </div>  

  </div>

