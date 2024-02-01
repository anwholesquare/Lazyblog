<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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

    <div class="container">
        <!-- add padding to the top of the page -->

        <div class="row justify-content-center py-5">
            <div class="col-md-3 ">
                <!-- Author Profile -->
                <div class="card mb-4 text-center">
                    <div class="rounded-circle overflow-hidden mx-auto my-4" style="width: 150px; height: 150px;">
                        <img src="https://www.indiafilings.com/learn/wp-content/uploads/2023/03/Can-a-single-person-own-a-firm-in-India.jpg"
                            class="card-img-top" alt="Author Image"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $author[0]['full_name'] ?>
                        </h5>
                        <p class="card-text">Bio:
                            <?php echo $author[0]['bio'] ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email:
                            <?php echo $author[0]['email'] ?>
                        </li>
                        <li class="list-group-item">Joined:
                            <?php echo $author[0]['registration_datetime'] ?>
                        </li>
                        <li class="list-group-item">Total Posts: 3</li>
                        <!-- Add more user details here -->

                    </ul>
                </div>
            </div>
            <div class="col-md-9">
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
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>