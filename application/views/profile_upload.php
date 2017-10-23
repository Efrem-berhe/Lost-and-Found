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
                <a href="<?= site_url() ?>/UploadController/itemfound" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/Found_Item_2.png"  width="120" height="120">
                </a>

            </div>
        </aside>

    </div>  

<div class="col-sm-10">
        <div class="jumbotron Padding-Top">
  
            <div class="row m-auto">
                <div class="col-md-2">
                    
                </div>
            <div class="col-md-6">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
           <?php echo form_open_multipart(site_url('Examples/update_profileImg'));?>
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-addon">
                    <!-- image-preview-clear button -->
                    
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <i class="fa fa-times" aria-hidden="true"></i></span> Clear
                    </button>
                 </span>
                 <span class="input-group-addon">
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="profileImg"/> <!-- rename it -->
                    </div>
                 </span>
                 
                 <span class="input-group-addon">
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <input type="submit" value="Upload" name="submit"/> <!-- rename it -->
                    </div>
                 </span>
               
            </div><!-- /input-group image-preview [TO HERE]--> 
         </form>
        </div>
           
            </div>
        </div>
    </div>
</div>