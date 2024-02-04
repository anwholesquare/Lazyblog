<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php echo view("Dashboard/common_header.php"); ?>
</head>

<body>




    <?php echo view('Dashboard/header.php'); ?>


    <div class="container-fluid">
        <div class="row">
            <?php echo view('Dashboard/navbar.php', ["id" => 0]); ?>



            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top:70px;margin-bottom:70px;">

                <h2>Dashboard </h2>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total <br> Users</h5>
                                    <p class="card-text">
                                        <?php echo $usercount[0]['usercount']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total <br> Posts</h5>
                                    <p class="card-text">
                                        <?php echo $postcount[0]['postcount']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Overall <br> Seconds Views</h5>
                                    <p class="card-text">
                                        <?php echo $postreach[0]['totalsec']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Maximum Post <br>Reach</h5>
                                    <p class="card-text">
                                        <?php echo $postreach[0]['maxreact']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"> Page <br> Reach</h5>
                                    <p class="card-text">
                                        <?php echo $postcount[0]['postcount']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Overall <br> Views</h5>
                                    <p class="card-text">
                                        <?php echo $postreach[0]['totalview']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <br>
                    <h6> Geographical Demographics </h6>
                    <br>

                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">#</th>
                                <th width="50%">Country</th>
                                <th width="40%">Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($countryreach as $key => $value) {
                                echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td>" . $value['country'] . " </td>
                                    <td>" . $value['people'] . "</td>
                                </tr>";
                                $i++;
                            }


                            ?>
                        </tbody>
                    </table>
                </div>



        </div>

        </main>
    </div>
    </div>
    <?php echo view('Dashboard/footer.php'); ?>


</body>

</html>