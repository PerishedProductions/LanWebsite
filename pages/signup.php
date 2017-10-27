<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12" id="content"> 
            <?php

                $alert = $_GET['alert'];

                if($alert == null)
                {
                  $newURL = "?page=signup&alert=none";
                  header('Location: '.$newURL);
                  die();
                }

                switch($alert)
                {
                    case "success":
                        print '<div class="alert alert-success" role="alert"> Bruger oprettet! </div>';
                        break;
                    case "emptySlots":
                        print '<div class="alert alert-danger" role="alert"> Kunne ikke oprette en ny bruger pga. manglende information! </div>';
                        break;
                }

            ?>
            <h1>Ny bruger</h1>
            <hr>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <form action="newUser.php" method="POST">
                        <div class="form-group">
                        <input type="text" name="first" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fornavn">
                        </div>
                        <div class="form-group">
                        <input type="text" name="last" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Efternavn">
                        </div>
                        <div class="form-group">
                        <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brugernavn">
                        </div>
                        <div class="form-group">
                        <input type="password" name="pwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-orange">Submit</button>
                    </form>
                    
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>