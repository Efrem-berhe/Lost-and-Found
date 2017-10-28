
<div id="main" class="jumbotron Padding-Top">

    <?php echo form_open_multipart(site_url("UploadController/LostItem_upload")); ?>
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

