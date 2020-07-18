
<?php

    session_start();
    $userId = $_SESSION['userId'];
    if($userId == NULL){
        header('Location: ../index.php');
    }
    if(isset($_GET['start'])){
        header('Location: main_exam.php');
    }
   
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    
    <title>Online exam</title>
</head>
<body>

<?php include 'includes/nav.php'; ?>
    
<div class="container">
    <div class="row justify-content-center mt-4">

        <div class="col-md-10">
            <div class="card">
                <div class="card-header mch" style="text-align: center;">Online Examination</div>
                
                <div class="card-body row">
                    <div class="col-md-6 border-right" style="text-align: center;">
                        <img src="images/Pic05.jfif" alt="Profile Image" class="img-thumbnail" />
                    </div>
                    <div class="col-md-6 p-5">
                        <div style="text-align: center">
                            <img src="images/Pic03.jfif" width="200px;">
                        </div>
                        <div style="text-align: center;" class="mt-3">
                            <a href="?start=ex" class="btn btn-secondary p-2" style="width: 200px;">Start Test</a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>






<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>