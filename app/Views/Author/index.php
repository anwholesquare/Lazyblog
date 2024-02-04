<?php
if (count($author) <= 0) {
    header("Location: " . base_url());
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $author[0]['full_name'] ?>'s Page
    </title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('bg.css') ?>" rel="stylesheet">
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
        }

        .card-body {
            color: black;
        }
    </style>
</head>

<body>

    <div id="bg" style="position: fixed;height:100vh; margin:0; width: 100vw;overflow:hidden !important;">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>

    <header class="navbar sticky-top flex-md-nowrap p-0 shadow" data-bs-theme="dark"
        style="position:fixed;width:100%;background:#202020;border-bottom: 5px solid #36b7ff7a;display:flex;justify-content:center;">
        <a class="col-md-12 col-lg-12 me-0 fs-6 text-white" href="#">
            <div style="height:50px;display: flex;width:auto;justify-content: center;">
                <img src="/assets/logo.png" style="height:50px;width:auto;" />
            </div>
        </a>


    </header>
    <div class="container" style="margin-top: 50px;">
        <!-- add padding to the top of the page -->


        <div class="row justify-content-center py-5">

            <div class="col-md-3 ">
                <!-- Author Profile -->
                <div class="card mb-4 text-center">
                    <div class="rounded-circle overflow-hidden mx-auto my-4" style="width: 150px; height: 150px;">
                        <img src="<?= base_url('') . "public/uploads/" . $author[0]['image'] ?>" class="card-img-top"
                            alt="Author Image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $author[0]['full_name'] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $author[0]['bio'] ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 💌
                            <?php echo $author[0]['email'] ?>
                        </li>
                        <li class="list-group-item"> ⏱ Joined at
                            <?php echo date('d M, Y', strtotime($author[0]['registration_datetime'])); ?>
                        </li>

                        <!-- Add more user details here -->

                    </ul>
                </div>

            </div>
            <div class="col-md-9">

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
                        position: relative;
                        z-index: 10000;
                        text-decoration: none;

                    }
                </style>

                <div class="mb-3" style="max-width:400px;margin-left:0px;position:relative; color:white;">
                    <h6>Search Posts</h6>
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

                <?php if ($author[0]['page_content'] != "") {
                    echo "<div style='position:relative; color:white'>
                        <h6>Author's speech</h6>
                        " . $author[0]['page_content'] . "
                    </div>";
                } ?>





                <div class="recommended-posts mt-4" style="position:relative;z-index:1;color:white;">
                    <h6>Recommended Posts</h6>
                    <div class="row">
                        <!-- Each recommended post is a card -->
                        <?php foreach ($recommended as $key => $value) {
                            echo " <div class='col-md-6 col-lg-4 mb-5'>
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
    <script>
        const categoryInput = document.getElementById('searchText');
        const autocompleteList = document.getElementById('searchList');



        categoryInput.addEventListener('input', function () {
            const inputValue = categoryInput.value.trim();

            if (inputValue.length === 0) {
                autocompleteList.innerHTML = '';
                return;
            }

            fetch(`<?= base_url() ?>/api/posts/findbyauthor/<?= $author[0]['user_id'] ?>/${inputValue}`)
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



</body>

</html>