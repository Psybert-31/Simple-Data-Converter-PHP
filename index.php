<?php
@include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Carbonara</title>
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

        .link-button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            flex-wrap: wrap;
            width: 80vw;
        }

        .link-button-container a {
            text-decoration: none;
            background-color: green;
            color: white;
            border-radius: 20px;
            padding: 1em;
        }
    </style>
</head>
<br>
<body>
    <main>
        <div class="container">
            <img src="rtulogo.png" class="responsive" width="600" height="400">
            <hr class="horline">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <a href="insert.php" id="btnNew" class="btn btn-primary my-3"><i class="bi bi-plus-circle-fill"></i> NEW</a>
            </form>
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

            <div class="link-button-container">
           
            <a href="string_func.php" class="link-button">STRING FUNCTION</a><br>
            <a href="groupby.php" class="link-button">GROUP BY FUNCTION</a><br>
            <a href="in.php" class="link-button">IN FUNCTION</a><br>
            <a href="between.php" class="link-button">BETWEEN FUNCTION</a><br>
            <a href="count.php" class="link-button">COUNT FUNCTION</a><br>
            <a href="max.php" class="link-button">MAX FUNCTION</a><br>
            <a href="min.php" class="link-button">MIN FUNCTION</a><br>
            <a href="average.php" class="link-button">AVERAGE FUNCTION</a><br>
            <a href="sum.php" class="link-button">SUM FUNCTION</a><br>
            <a href="concat.php" class="link-button">CONCAT FUNCTION</a><br>
            <a href="date.php" class="link-button">DATE FUNCTION</a><br>
</div>
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