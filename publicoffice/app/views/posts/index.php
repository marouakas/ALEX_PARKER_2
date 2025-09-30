<!-- Blog Post (Right Sidebar) Start -->
<div class="col-md-9">
    <div class="col-md-12 page-body">
        <div class="row">
            <div class="col-md-12 content-page">
                
                <!-- ADD A POST -->
                <div>
                    <a href="index.php?posts=addform" class="btn btn-primary">Add a Post</a>
                </div>
                <!-- ADD A POST END -->

                <?php foreach ($posts as $post): ?>
                    <!-- Blog Post Start -->
                    <div class="col-md-12 blog-post row">
                        <div class="post-title">
                            <a href="index.php?posts=show&id=<?= $post['id']; ?>">
                                <h1><?php echo $post['title']; ?></h1>
                            </a>
                        </div>
                        <div class="post-info">
                            <span><?php echo $post['created_at']; ?></span> | 
                            <span><?php echo $post['category_id']; ?></span>
                        </div>
                        <p>
                            <?php echo substr($post['text'], 0, 150) . '...'; ?>
                        </p>
                        <a href="index.php?posts=show&id=<?= $post['id']; ?>"
                           class="button button-style button-anim fa fa-long-arrow-right">
                            <span>Read More</span>
                        </a>
                    </div>
                    <!-- Blog Post End -->
                <?php endforeach; ?>

            </div>
        </div>
    </div>

        <!-- Footer Start -->
    <div class="col-md-12 page-body margin-top-50 footer">
        <footer>
            <ul class="menu-link">
                <li><a href="index.php">My Blog</a></li>
            </ul>
            <p>© Copyright 2016 DevBlog. All rights reserved</p>
        </footer>
    </div>
    <!-- Footer End -->
</div>