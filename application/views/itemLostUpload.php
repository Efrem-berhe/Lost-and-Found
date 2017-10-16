
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
          
            <?php echo form_open_multipart(site_url("UploadController/LostItem_upload"));?>
                <fieldset>
                    <legend class="text-center">Report A Lost Item</legend>

                    <div class="form-group row">
                        <label for="exampleSelect1" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleSelect1" name="category" required>
                                <option>Books&Audible</option>
                                <option>Electronics&Computer</option>
                                <option>Toy's Children&Baby's</option>
                                <option>Clothes&Shoes</option>
                                <option>Health&Beauty</option>
                                <option>Others</option>
                            </select>
                        </div>

                    </div>
                    
                    <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="itemname" rows="1" name="location" required></textarea>
                        </div>
                    </div>
                   <div class="form-group row">
                        <label for="itemname" class="col-sm-2 col-form-label">Item name</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="itemname" rows="1" name="item_name" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label" >Item description</label>
                        <div class="col-sm-10"> 
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="description" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">          
                            <input class="form-control" type="date" name="date" value="2011-08-19" id="example-date-input" required>
                        </div>
                    </div>

<!--                    <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label">Contact name</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="1" name="contact_name" required></textarea>
                        </div>
                    </div>-->
                    
<!--                   <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label">Contact phone</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="1" name="contact_phone" required></textarea>
                        </div>
                    </div>-->
  
                    <div class="form-group row">
                        <label for="exampleInputFile" class="col-sm-2 col-form-label" required>Upload image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="img" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <label for="exampleInputFile" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" name="userSubmit" class=" form-control Orange-bg-color">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>


