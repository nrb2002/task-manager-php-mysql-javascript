<?php
    include ("db_conn.php");

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        try {
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO `member`(`firstname`, `lastname`, `email`, `gender`) VALUES(:firstname, :lastname, :email, :gender)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gender', $gender);

            $stmt->execute();

            //echo "New record created successfully";
            
            header("Location:index.php?msg=new member created");

        }catch(PDOException $e) {
           echo $e->getMessage();
        }
          
        $conn = null;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <nav class="nav-bar navbar-light justify-content-center text-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP complete CRUD Application
    </nav>
    <main class="container">
        <div class="text-center mb-4">
            <h3>Add New Member</h3>
            <p class="text-muted">Complete the form below to add a member</p>            
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
                    </div>

                    <div class="col">
                        <label for="lastname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>

                <div class="form-group mb-3">
                    <label for="gender">Gender</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>                    
                </div>

                <div>
                    <input class="btn btn-success" type="submit" value="Save" name="submit">
                    <a href="index.php" class="btn btn-danger" >Cancel</a>
                </div>
            </form>
        </div>
    </main>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
</body>
</html>