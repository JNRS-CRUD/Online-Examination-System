
<?php


    session_start();
    $userId = $_SESSION['userId'];
    if($userId == NULL){
        header('Location: ../index.php');
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
    
    <section id="body" class="mt-5">
        <div class="container">
            <div class="jumbotron bg-secondary" style="text-align: center; font-size: 50px;">
                <p class="mylead" style="color: white;font-style: italic;">
                    Welcome to our Online Exam System  
                </p>
            </div>
        </div>
    </section>






<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>