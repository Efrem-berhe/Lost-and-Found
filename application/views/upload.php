
<div class="row">
    <!--left colomon-->
    
    <!--middle colomon-->
    <div class="col-sm-8 offset-2">
        <div class="jumbotron">
          
            <?php echo form_open_multipart(site_url("UploadController/item_upload"));?>
                <fieldset>
                    <legend class="text-center">Upload Found or Lost Item</legend>

                    <div class="form-group row">
                        <label for="exampleSelect1" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleSelect1" name="category">
                                <option>Electronics</option>
                                <option>Stationery</option>
                                <option>Cloth</option>
                                <option>Toys</option>
                                <option>Wallet</option>
                            </select>
                        </div>

                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleSelect1" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">

                            <select class="form-control" id="exampleSelect1" name="status">
                                <option>Lost</option>
                                <option>Found</option>
                            </select>

                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label" >Item description</label>
                        <div class="col-sm-10"> 
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">          
                            <input class="form-control" type="date" name="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label">Contact name</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="1" name="contact_name"></textarea>
                        </div>
                    </div>
                    
                   <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 col-form-label">Contact phone</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="1" name="contact_phone"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputFile" class="col-sm-2 col-form-label" >Upload image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="img" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                    </div>

                    <div class="form-group">
                        
                        <div class="col-sm-2 offset-5">
                            <button type="submit" name="userSubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>

