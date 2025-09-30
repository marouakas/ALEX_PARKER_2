<!-- Blog Post (Right Sidebar) Start -->
<div class="col-md-9">
    <div class="col-md-12 page-body">
        <div class="row">
            <div class="sub-title">
                <a href="index.php" title="Go to Home Page">
                    <h2>Back Home</h2>
                </a>
            </div>

            <div class="col-md-12 content-page">
                <div class="col-md-12 blog-post">
                    
                    <div>
                        <img src="<?php echo $post['image']; ?>" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                        <h1><?php echo $post['title']; ?></h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                        <span><?php echo $post['created_at']; ?></span> | 
                        <span><?php echo $post['category_id']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                        <?php echo $post['text']; ?>
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                        <p><?php echo $post['quote']; ?></p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                        <a href="index.php?posts=editform&id=<?php echo $post['id']; ?>" 
                           class="btn btn-primary">
                            Edit Post
                        </a>
                        <a href="index.php?posts=delete&id=<?php echo $post['id']; ?>" 
                           class="btn btn-secondary"
                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce post ?');">
                            Delete Post
                        </a>
                    </div>
                    <!-- Post Buttons End -->
                </div>
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
<!-- Blog Post (Right Sidebar) End -->