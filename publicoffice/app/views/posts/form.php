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
                    <!-- Post Headline Start -->
                    <div class="post-title">
                        <h1>Post Form</h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Form Start -->
                    <form action="index.php?posts=<?php echo isset($post) ? 'update&id=' . $post['id'] : 'insert'; ?>" 
                          method="POST">
                        
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   class="form-control" 
                                   placeholder="Enter your title here"
                                   value="<?php echo isset($post) ? $post['title'] : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea id="text" 
                                      name="text" 
                                      class="form-control" 
                                      rows="5" 
                                      placeholder="Enter your text here"><?php echo isset($post) ? $post['text'] : ''; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" 
                                   name="image" 
                                   id="image" 
                                   class="form-control" 
                                   placeholder="Enter image path"
                                   value="<?php echo isset($post) ? $post['image'] : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="quote">Quote</label>
                            <textarea id="quote" 
                                      name="quote" 
                                      class="form-control" 
                                      rows="5" 
                                      placeholder="Enter your quote here"><?php echo isset($post) ? $post['quote'] : ''; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category_id" class="form-control">
                                <option disabled selected>Select your category</option>
                                <?php foreach ($formCategories as $cat): ?>
                                    <option value="<?php echo $cat['id']; ?>"
                                            <?php echo (isset($post) && $post['category_id'] == $cat['id']) ? 'selected' : ''; ?>>
                                        <?php echo $cat['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <input class="btn btn-primary" type="submit" value="submit">
                            <input class="btn btn-secondary" type="reset" value="reset">
                        </div>
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>