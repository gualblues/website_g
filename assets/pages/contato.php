<?
    header('Content-Type: text/html; charset=utf-8');
    $host = $_SERVER['HTTP_HOST'];
    setlocale(LC_TIME, "pt_BR.utf8");
    date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gualberto Blues - Música , Tecnologia e Ilustraçâo</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link href="../styles/css/p.css" type="text/css" media="screen" rel="stylesheet" />
        <link href="../styles/css/bootstrap.min.css" media="screen" rel="stylesheet" />       
    </head>
    <body>
        <div class="container">
            <header class="header">
                topo
            </header>
            <div class="row">
                <div role="main" class="col-md-8">

                        <form class="form-horizontal" role="form" method="post" action="../php/envio.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>	
                                </div>
                            </div>
                    </form>
                </div>
                <aside role="complementary" class="col-md-4"></aside>

            </div>
            <footer class="row">
        
            </footer>

        </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="../scripts/js/ui-bootstrap-modal-0.10.0.min.js"></script>

    </body>
</html>