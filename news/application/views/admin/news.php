
<main role="main" class="container">
    <a href="<?php echo base_url('index.php/') ?>administrator/input_news" class="btn btn-primary btn-sm">Add News</a> <br><br>
    <div class="table table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Creator</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($news as $items) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items->admin_id ?></td>
                    <td><?php echo $items->title ?></td>
                    <td><?php echo word_limiter($items->content, 15 ) ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/').$items->image ?>" width="150px">
                    </td>
                    <td>
                        <a href="<?php echo base_url('index.php/administrator/edit_news?id=').$items->id ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?php echo base_url('index.php/administrator/delete_news?id=').$items->id ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
                    
            </tbody>

        </table>
    </div>
</main>