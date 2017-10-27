<div class="container">
<div class="row">
    <div class="col"></div>
    <div class="col-12" id="content">
        <div class="row">
            <div class="col-3">
                <?php

                    $id = $_GET['id'];

                    if($id == null)
                    {
                        if(isset($_SESSION['id']))
                        {
                            $newURL = "?page=profile&id=".$_SESSION['id'];
                            header('Location: '.$newURL);
                            die();
                        }
                        else
                        {
                            $newURL = "?page=home";
                            header('Location: '.$newURL);
                            die();
                        }
                    }
                    else
                    {
                        include './dbh.php';

                        $sql = "SELECT * FROM users WHERE id='$id'";
                        $result = mysqli_query($conn, $sql);
                        
                        if(mysqli_num_rows($result) < 1)
                        {
                            echo 'no working';
                        }
                        else
                        {
                            if($row = mysqli_fetch_assoc($result))
                            {
                                $username = $row['uid'];
                                $first = $row['first'];
                                $last = $row['last'];
                                $admin = $row['admin'];
                            }
                        }    
                    }

                    
                ?>
                <div class="card">
                    <img class="card-img-top" src="./img/profilPics/default.png" alt="Card image cap">
                    <div class="card-body">
                        <h3><?php echo $username;?></h3>
                        <h6><?php echo $first." ".$last;?></h6>
                        <?php
                            if($admin)
                            {
                                echo '<span class="badge badge-primary">Admin</span>';
                            }
                        ?>
                        <hr>
                        <?php
                            if($id == $_SESSION['id'])
                            {
                                echo '<a class="btn btn-orange" href="logout.php">Log ud</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
</div>