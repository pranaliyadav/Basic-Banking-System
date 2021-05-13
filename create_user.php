<!DOCTYPE html>
<html>
<head>
    <title>Create user</title>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
        width: 100px;
        margin: auto;
        border-radius: 5px;
        color:green;
      }
      button:hover{
        background-color:#483D8B;
        color: #E9967A;
      }
    </style>


</head>
<body>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


     <?php
  include 'navbar.php';
  ?>

  <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('$name','$email','$balance')";
    // echo '<pre>';print_r($sql);die;
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('New User created Successfully');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
     <h2 class="text-center pt-4">Create user</h2><br>

    <div class="container">
     <!-- <form class="form" action="insertuser.php" method="post" id="registrationForm" role="form" > -->
       <form class="form" method="post" id="registrationForm" role="form" >
      <table align="center" cellpadding = "10">

        <td>Enter Name </td>
        <td><input type="text" name="name" maxlength="50" placeholder="Enter Name" autocomplete="off" />
        </td>
        </tr>

        <td>Email Id</td>
        <td>
        <input type="text" name="email" maxlength="50" placeholder="Email Id" autocomplete="off"/>
        </td>
        </tr>
        
        <tr>
        <td>Balance</td>
        <td><input type="text" name="balance" maxlength="15" placeholder="Balance" autocomplete="off"></td>
        </tr>

        <tr>
        <td colspan="2" align="center">
           <button type="submit" value="submit" name="submit"><b>CREATE</b></button>
        <!-- <button type="button1" onclick="alert('new user create successfully')"><b>CREATE</b></button> -->
        <button type="button2" onclick="alert('RESET data')"><b>RESET</b></button>
        </td>
        </tr>
    </table>
</form>
</div>
</body></html>

<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>