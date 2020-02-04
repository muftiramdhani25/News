<main role="main" class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="<?php echo base_url('index.php/') ?>administrator/update_news" method="POST" >
        <input type="hidden" name="id" value="<?php echo $news->id ?>">
        <div class="form-group">
            <input type="text" name="title" value="<?php echo $news->title ?>" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="content" cols="95" row="10"><?php echo $news->content ?></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="image" value="<?php echo $news->image ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
    
</main>