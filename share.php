<?php
    $id = $_GET['id'];
    $site_url = 'http://izin-bertakut.sonnylab.com/';
    $data = file_get_contents('https://izin-bertakut.firebaseio.com/takut/'.$id.'.json');
    $takut = json_decode($data);

    if (!$takut) {
        die('Not Found');
    }
    // var_dump($takut);
    // die();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Izin Bertakut">
    <meta property="og:description" content="Izin Bertakut <?php echo $takut->message ?>">
    <meta name="author" content="DarkBro">
    <link rel="icon" href="favicon.ico">
    <meta property="og:title" content="Izin Bertakut <?php echo $takut->to->name ?>">
    <meta property="og:site_name" content="Izin Bertakut">
    <meta property="og:url" content="<?php echo $site_url ?>#!/share/<?php echo $id ?>">
    <meta property="og:image" content="<?php echo $site_url ?>imgbase.php?id=<?php echo $id ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <title>Izin Bertakut</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h3 class="text-muted"><div class="logo-head"></div></h3>
      </div>
      <div>
          <div class="row">
            <div class="col-md-6 about">
                <img src="imgbase.php?id=<?php echo $id ?>" alt="">    
            </div>
            <div class="col-md-6">
                <div>
                    From : 
                    <div>
                        <img src="http://graph.facebook.com/<?php echo $takut->from->id ?>/picture?type=square" alt="">
                        <?php echo $takut->from->name ?>
                    </div>
                </div>
                <div>
                    To :
                    <div>
                        <img src="http://graph.facebook.com/<?php echo $takut->to->id ?>/picture?type=square" alt="">
                        <?php echo $takut->to->name ?>
                    </div>
                </div>
                <div>
                    Message :
                    <div>
                        <?php echo $takut->message ?>
                    </div>
                </div>
                <div>
                    <a href="home.html" class="btn btn-primary">Go to App</a>
                </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <p>&copy; DarkBro Team 2014</p>
      </footer>
    </div>
  </body>
</html>
