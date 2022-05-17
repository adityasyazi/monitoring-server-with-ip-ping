</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link rel=“icon” href=“logo-kyb.png” type=”image/png”>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Server | PT</title>
  </head>
  <body>
  <div class="container"><br>
    <center><h1 style="color:white;border-left-style: solid;border-left-color: blue;background-color:grey;">TES Koneksi Server</h1></center>
    <div class="container"><br>
        <div class="row">
          <div class="col">
            <h1 style="background-color:DodgerBlue;color:white;">Server Google</h1>
            <?php 
                $host="8.8.8.8"; //alamat atau ip server
                $output=shell_exec('ping -n 5 '.$host); //menampilkan looping eksekusi selama 5 kali 

                echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

                if (strpos($output, 'out') !== false) {
                        echo "Server ON tapi Tidak terkoneksi";
                    }
                        elseif(strpos($output, 'expired') !== false)
                    {
                        echo "Server Mati Total";
                    }
                        elseif(strpos($output, 'data') !== false)
                    {
                        echo "Server ON dan Terkoneksi";
                    }
                    else
                    {
                        echo "Unknown Error";
                    }
            ?>
          </div>
          <div class="col">
            <h1 style="background-color:DodgerBlue;color:white;">Server ERP</h1>
            <?php 
                $host="ganool.com"; //alamat atau ip server 
                $output=shell_exec('ping -n 5 '.$host); //menampilkan looping eksekusi selama 5 kali 

                echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

                if (strpos($output, 'out') !== false) {
                        echo "Server ON tapi Tidak terkoneksi";
                    }
                        elseif(strpos($output, 'expired') !== false)
                    {
                        echo "Server Mati Total";
                    }
                        elseif(strpos($output, 'data') !== false)
                    {
                        echo "Server ON dan Terkoneksi";
                    }
                    else
                    {
                        echo "Unknown Error";
                    }
            ?>
          </div>
          <div class="col">
          <h1 style="background-color:DodgerBlue;color:white;">Server SUPPLIERS</h1>
            <?php 
                $host="208.65.153.238"; //alamat atau ip server 
                $output=shell_exec('ping -n 5 '.$host); //menampilkan looping eksekusi selama 5 kali 

                echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

                if (strpos($output, 'out') !== false) {
                        echo "Server ON tapi Tidak terkoneksi";
                    }
                        elseif(strpos($output, 'expired') !== false)
                    {
                        echo "Server Mati Total";
                    }
                        elseif(strpos($output, 'data') !== false)
                    {
                        echo "Server ON dan Terkoneksi";
                    }
                    else
                    {
                        echo "Unknown Error";
                    }
            ?>
          </div>
          <div class="col">
          <h1 style="background-color:DodgerBlue;color:white;">Server Monitoring Suhu</h1>
            <?php 
                $host="208.65.153.238"; //alamat atau ip server 
                $output=shell_exec('ping -n 5 '.$host); //menampilkan looping eksekusi selama 5 kali 

                echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

                if (strpos($output, 'out') !== false) {
                        echo "Server ON tapi Tidak terkoneksi";
                    }
                        elseif(strpos($output, 'expired') !== false)
                    {
                        echo "Server Mati Total";
                    }
                        elseif(strpos($output, 'data') !== false)
                    {
                        echo "Server ON dan Terkoneksi";
                    }
                    else
                    {
                        echo "Unknown Error";
                    }
            ?>
          </div>

        </div>
    </div>

  </div>  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
