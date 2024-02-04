<?php
if (count($post) <= 0) {
    header("Location: " . base_url());
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $post[0]['seo_short_description']; ?>">
    <meta name="keywords" content="<?php echo $post[0]['seo_keywords']; ?>">
    <meta name="author" content="<?php echo $post[0]['full_name']; ?>">
    <title>
        <?php echo $post[0]['seo_title']; ?>
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .btn-primary {
            background: #36b7ff !important;
            border: none;
        }

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

            margin-bottom: 20px;
            border-radius: 20px;
        }

        .cover-image-recommended {
            width: 100%;
            height: auto;

            margin-bottom: 20px;
        }
    </style>


</head>

<body>
    <header class="navbar sticky-top flex-md-nowrap p-0 shadow" data-bs-theme="dark"
        style="position:fixed;width:100%;background:#202020;border-bottom: 5px solid #36b7ff7a;display:flex;justify-content:center;">
        <a class="col-md-12 col-lg-12 me-0 fs-6 text-white" href="#">
            <div style="height:50px;display: flex;width:auto;justify-content: center;">
                <img src="/assets/logo.png" style="height:50px;width:auto;" />
            </div>
        </a>


    </header>
    <div class="container-sm" style="margin-top:100px;">
        <!-- Cover Image -->



        <div class="row">

            <div class="col-md-8">

                <img src="<?php echo base_url('') . "/public/uploads/" . $post[0]['cover_image']; ?>"
                    class="cover-image" alt="Cover Image">

                <div>
                    <header>
                        <!-- Title -->
                        <h1 class="mb-3">
                            <?php echo $post[0]['title']; ?>
                        </h1>

                        <div class="text-muted mb-3">Posted on
                            <?php echo date("d M, Y", strtotime($post[0]['created_datetime'])); ?> <br>

                            <a href="<?= base_url('') . "author/" . $post[0]['user_id'] ?>"
                                style="text-decoration:none;">
                                <img src="<?= base_url('') . "public/uploads/" . $post[0]['image'] ?>"
                                    alt="user_profile" style="height:24px; width:auto; border-radius:20px;" />
                                <?php echo $post[0]['full_name']; ?>
                            </a>
                        </div>

                        <!-- Short Description -->
                        <p class="lead">
                            <?php echo $post[0]['description']; ?>
                        </p>






                        <!-- Blog Date and Author -->

                    </header>

                    <!-- Content of the Blog -->
                    <section class="mb-5">
                        <p>
                            <?php echo $post[0]['content']; ?>
                        </p>
                        <!-- additional content here -->
                    </section>

                    <!-- Category of the Blog Post -->

                </div>


            </div>

            <div class="col-md-4">

                <footer class="mb-3">
                    <strong>Category:</strong>
                    <?php echo $post[0]['category_name']; ?>
                    <br>
                    <!-- Tags -->

                    <div class="blog-tags">
                        <strong>Tags:</strong>
                        <?php foreach ($tags as $key => $value) {
                            echo "<span class='badge bg-primary'>" . $value['tag_name'] . " </span>";

                        }
                        ?>
                    </div>
                </footer>

                <div class="social-media-share mb-3">

                    <h6>Share with people</h6>
                    <div class="col darkmode-ignore">
                        <!-- Social media icons or widgets can be added here -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>">
                            <button class="btn btn-primary mx-1" style="margin-bottom:5px; max-width:100px;">
                                <i class="fab fa-facebook-f"></i> <br> Facebook</button>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=<?= current_url() ?>">
                            <button class="btn btn-primary mx-1" style="margin-bottom:5px; max-width:100px;">
                                <i class="fab fa-twitter"></i> <br>Twitter</button>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= current_url() ?>">
                            <button class="btn btn-primary mx-1" style="margin-bottom:5px; max-width:100px;">
                                <i class="fab fa-linkedin-in"></i> <br> Linkedin</button>
                        </a>
                    </div>


                </div>

                <style>
                    .btn-primary {
                        background: #36b7ff !important;
                        border: none;
                    }

                    #searchList {
                        display: none;
                        position: absolute;
                        border: 1px solid #ccc;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }

                    #searchList li {
                        padding: 10px;
                        cursor: pointer;
                    }

                    #searchList li:hover {
                        background-color: #f4f4f4;
                    }

                    .postlink {
                        display: block;
                        padding: 10px;
                        text-decoration: none;

                    }
                </style>

                <div class="mb-3" style="max-width:768px;margin-left:0px;">
                    <div class="input-group stylish-input-group">
                        <input type="text" id="searchText" name="searchText" class="form-control"
                            placeholder="Search posts by title or categories">
                        <span class="input-group-text" style="background: #36b7ff;color: white;">
                            <i class="fa fa-search"></i>
                        </span>
                        <br>
                        <ul id="searchList"
                            style="background: white;display: block;transform: translate(0px, 50px);z-index:1000;">
                        </ul>
                    </div>
                </div>




                <!-- Social Media Share Widgets -->


                <!-- Recommended Blog Posts -->
                <div class="recommended-posts">
                    <h6>Recommended Posts</h6>
                    <div class="row">
                        <!-- Each recommended post is a card -->
                        <?php foreach ($recommended as $key => $value) {
                            echo " <div class='col-sm-12 mb-5'>
                                <div class='card'>
                                    <img src='" . base_url('') . "/public/uploads/" . $value['cover_image'] . " ' class='cover-image-recommended'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $value['title'] . "</h5>
                                        <p class='card-text'>" . substr($value['description'], 0, 65) . "...</p>
                                        <a href='" . base_url('post/') . $value['symlink'] . "' class='btn btn-primary'>Read More</a>
                                    </div>
                                </div>
                            </div>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>




        <!-- Blog Post -->




    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        function fetchData() {
            // Replace 'your-api-endpoint' with the actual API endpoint URL
            fetch('<?= base_url() ?>api/posts/viewtimeincrease/<?= $post[0]['post_id']; ?>')
                .then(response => response.json())
                .then(data => {
                    // Handle the API response data as needed
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }

        function viewCount() {
            // Replace 'your-api-endpoint' with the actual API endpoint URL
            fetch('<?= base_url() ?>api/posts/viewcount/<?= $post[0]['post_id']; ?>')
                .then(response => response.json())
                .then(data => {
                    // Handle the API response data as needed
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }
        viewCount();
        // Call the fetchData function every 10 seconds (10000 milliseconds)
        setInterval(fetchData, 10000);
    </script>

    <script>
        const categoryInput = document.getElementById('searchText');
        const autocompleteList = document.getElementById('searchList');



        categoryInput.addEventListener('input', function () {
            const inputValue = categoryInput.value.trim();

            if (inputValue.length === 0) {
                autocompleteList.innerHTML = '';
                return;
            }

            fetch(`<?= base_url() ?>/api/posts/findbyauthor/<?= $post[0]['user_id'] ?>/${inputValue}`)
                .then(response => response.json())
                .then(data => {
                    const items = data.map(item => `<a class="postlink" href="<?= base_url("post/") ?>${item.symlink}"<li>${item.title}</li>`).join('');
                    autocompleteList.innerHTML = items;

                    // Add event listeners to each list item
                    autocompleteList.style.display = 'block';
                })
                .catch(error => console.error('Error:', error));

            document.addEventListener('click', function (event) {
                if (!event.target.matches('#searchText') && !event.target.matches('#searchList li')) {
                    autocompleteList.style.display = 'none';
                }
            });

            // Add event listeners to each list item
            autocompleteList.addEventListener('click', function (event) {
                if (event.target.tagName === 'LI') {
                    // Set the selected category name to the input field
                    categoryInput.value = event.target.innerText;

                    // Hide the autocomplete list
                    autocompleteList.style.display = 'none';
                }
            });


        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <style>
        .darkmode-toggle {
            z-index: 1000;
        }
    </style>

    <script>
        function addDarkmodeWidget() {
            const options = {

                label: '🌓', // default: ''
            }
            new Darkmode(options).showWidget();
        }
        window.addEventListener('load', addDarkmodeWidget);
    </script>
</body>

</html>