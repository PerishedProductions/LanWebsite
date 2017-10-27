<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12" id="content">
            <?php

                

                $alert = $_GET['alert'];

                if($alert == null)
                {
                    $newURL = "?page=login&alert=none";
                    header('Location: '.$newURL);
                    die();
                }

                switch($alert)
                {
                    case "success":
                        print '<div class="alert alert-success" role="alert"> Bruger oprettet! </div>';
                        break;
                    case "error":
                        print '<div class="alert alert-danger" role="alert"> Forkert Brugernavn, eller Password </div>';
                        break;
                }
            ?>
            <h1>Log ind</h1>
            <hr>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <form action="loginUser.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brugernavn">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-orange">Submit</button>
                    </form>
                    <br>
                    <a href="?page=signup" class="btn btn-orange">Opret en ny bruger her</a>
                    <br>
                    <br>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>