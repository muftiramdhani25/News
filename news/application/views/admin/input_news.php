<main role="main" class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="<?php echo base_url('index.php/') ?>administrator/store_news" method="POST" >
        <div class="form-group">
            <input type="text" name="title" placeholder="insert a title" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="content" cols="95" row="10"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="image"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
    
</main>