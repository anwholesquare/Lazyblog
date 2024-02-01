<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .blog-keywords {
            margin-bottom: 20px;
            font-style: italic;
        }

        .blog-tags .badge {
            margin-right: 5px;
        }

        .recommended-posts .card {
            margin-top: 10px;
        }

        .cover-image {
            width: 100%;
            height: auto;
            max-height: 300px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Cover Image -->
        <img src="<?php echo base_url('') . "/public/uploads/" . $post[0]['cover_image']; ?>" class="cover-image"
            alt="Cover Image">

        <!-- Blog Post -->
        <article>
            <header>
                <!-- Title -->
                <h1 class="mb-3">
                    <?php echo $post[0]['title']; ?>
                </h1>
                <!-- Short Description -->
                <p class="lead">
                    <?php echo $post[0]['description']; ?>
                </p>
                <!-- Keywords -->
                <div class="blog-keywords">
                    <?php echo $post[0]['seo_keywords']; ?>
                </div>
                <!-- Blog Date and Author -->
                <div class="text-muted mb-3">Posted on
                    <?php echo $post[0]['created_datetime']; ?> by
                    <?php echo $post[0]['full_name']; ?>
                </div>
            </header>

            <!-- Content of the Blog -->
            <section class="mb-5">
                <p>
                    <?php echo $post[0]['content']; ?>
                </p>
                <!-- additional content here -->
            </section>

            <!-- Category of the Blog Post -->
            <footer class="mb-3">
                <strong>Category:</strong>
                <?php echo $post[0]['category_name']; ?>
                <!-- Tags -->
                <div class="blog-tags">
                    <?php foreach ($tags as $key => $value) {
                        echo "<span class='badge bg-primary'>" . $value['tag_name'] . " </span>";

                    }
                    ?>
                </div>
            </footer>
        </article>

        <!-- Social Media Share Widgets -->
        <div class="social-media-share mt-3 mb-5">
            <h3>Share this Post</h3>
            <!-- Social media icons or widgets can be added here -->
            <button class="btn btn-primary">Share on Facebook</button>
            <button class="btn btn-info">Share on Twitter</button>
            <button class="btn btn-danger">Share on Google+</button>
            <!-- other social media buttons -->
        </div>

        <!-- Recommended Blog Posts -->
        <div class="recommended-posts">
            <h2>Recommended Posts</h2>
            <div class="row">
                <!-- Each recommended post is a card -->
                <?php foreach ($recommended as $key => $value) {
                    echo " <div class='col-md-4 mb-5'>
                        <div class='card'>
                            <img src='" . base_url('') . "/public/uploads/" . $value['cover_image'] . " ' class='card-img-top cover-image'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $value['title'] . "</h5>
                                <p class='card-text'>" . $value['description'] . "</p>
                                <a href='" . base_url('post/') . $value['symlink'] . "' class='btn btn-primary'>Read More</a>
                            </div>
                        </div>
                    </div>";
                }

                ?>
            </div>
        </div>


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>