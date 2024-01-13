<?php
@include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Date Func</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        body{
            background-color: #e9ecef;
        }

        .link-button {
            text-decoration: none;
            background-color: gray;
            color: white;
            border-radius: 20px;
            padding: 1em;
        }

        #btnNew {
            width: 180px;
            height: 40px;
            font-weight: 800;
            border: none;
            border-radius: 20px;
            background-color: #2ecc71;
        }

        form{
            display: flex;
        }

        #tablehead {
            height: 50px;
            background-color: #024B73;
            color: white;
        }
        td{
            padding-top: 30px;
            margin: 400px;
        }
        h3{
            color: #6c757d;
            font-size: 40px;
            text-align: center;
            font-family: Copperplate, fantasy;
        }

        #btnUpdate {

            height: 40px;
            width: 120px;
            border: none;
            border-radius: 20px;
            background-color: #f1c40f;
            color: white;
            font-weight: 700;
        }

        #btnDelete {
            height: 40px;
            width: 120px;
            border: none;
            border-radius: 20px;
            background-color: #e67e22;
            color: white;
            font-weight: 700;
        }
        .searchDes {
            width: 30%;
            display: flex;
            justify-content: flex-end;
            margin-left: auto;
            margin-right: 0;
            border: 3px solid #7f8c8d;
            padding: 5px;
            height: 40px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchDes:focus{
            color: #2ecc71;
        }
        input[type=submit]{
            height: 40px;
            width: 120px;
            border: none;
            border-radius: 0px 50px 50px 0px;
            background-color: #f1c40f;
            color: white;
            font-weight: 700;
        }
        label{ 
            align-content: center;
            height: 40px;
            width: 120px;
            border-radius: 50px 0px 0px 50px;
            font-size: 24px;
            background-color: #f1c40f;
            color: white;
            font-weight: 700;
        }
        .responsive {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
          height: auto;
        }
        hr.horline{
          border: 3px solid black;
        }
    </style>
</head>
<br>
<body>
    <main>
        <div class="container">
            <img src="rtulogo.png" class="responsive" width="600" height="400">
            <hr class="horline">
            
            <h3>Date()Function</h3>

            <?php
                session_start();
                if (isset($_SESSION["submit"])) {
                    ?>
                    <div class="div alert alert-success">
                        <?php
                            echo $_SESSION["submit"];
                            unset($_SESSION["submit"]);
                        ?>
                    </div>
                   <?php
                }
            ?>
            
            <table class="table table-striped table-hover table-responsive">
                <thead id="tablehead">
                    <tr>
                        <th>Name</th>
                        <th>CheckDate()</th>
                    </tr>

                </thead>
                <tbody>

            <?php
                
                $sql = "SELECT * FROM carbonarathings";
                $result = $conn->query($sql);
                
                // Check if there are rows in the result 
                if ($result->num_rows > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $name = $row['name'];
                        
                        //$databaseDate = $row["date_column"];
                        $databaseDate = date('Y-m-d');
                        
                    
                    echo '

                    <tr>
                    <td>' . $name. '</td>
                    <td>' . $databaseDate. '</td>
                    </tr>
                    ';
                     }
                
                } else {
                    echo "No rows found in the table.";
                }
                
            ?>
            </tbody>
            </table>
                <a href="index.php" class="link-button">Back To Home</a>
        </div>
        
        
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script>
        function myFunction() {
        alert("Delete Successful!");
        }
        </script>
</body>

</html>