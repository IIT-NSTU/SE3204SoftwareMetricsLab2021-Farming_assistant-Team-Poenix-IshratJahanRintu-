<?php 
require_once 'DatabaseEdited.php';
session_start();

$db = EDatabase::getInstance();

$data=$db->fetch_data_with_one_column_check($_GET,'problem','problem_id');

$sol=$db->fetch_data_with_one_column_check($_GET,'solution','problem_id');

//die('count: '.count($sol));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new Solution</title>
    <style>
        .container{
            margin-top: 8%;
        
        }
        .textarea {
  background-color: #dddddd;
  color: #666666;
  padding: 1em;
  border-radius: 10px;
  border: 2px solid transparent;
  outline: none;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
  font-size: 16px;
  line-height: 1.4;
  width: 200px;
  height: 100px;
  transition: all 0.2s;
}

.textarea:hover {
  cursor: pointer;
  background-color: #eeeeee;
}

.textarea:focus {
  cursor: text;
  color: #333333;
  background-color: white;
  border-color: #333333;
}
.card-img-top{
    width:100%;
    height:15vw;
    object-fit:cover;
}

    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="text-center my-5">
            <h1 class="heading text-center">কৃষি বিষয়ক সমস্যার সমাধান</h1>
            <hr>
        </div>
    <div class="card">
        <?php if($data[0]['img']!=""):?>
        <img class="card-img-top" src="assets/uploaded_img/<?php echo $data[0]['img'];?>" alt="Card image cap">
        <?php endif;?>
        <div class="card-body">
            <h5 class="card-title">প্রশ্ন: <?php echo $data[0]['title']; ?></h5>
            <h6 class="card-subtitle mb-2 ">সমস্যা:</h6>

            <p class="card-text"><?php echo $data[0]['problem_des']; ?></p>

            <?php if(count($sol)>0) :?>
            <h4>সমাধান : <?php echo $sol[0]['solution_des']; ?></h4>
            <?php endif;?>


            <?php if($_SESSION['user_type']=='agriculturist') :?>
            <br><br> <form action="add_solution.php?problem_id=<?php echo $_GET['problem_id']; ?>" method="post">
                <div class="container">
                    <textarea placeholder="কৃষি বিষয়ক সমস্যার সমাধান লিখুন"class="textarea" name="solution_des" id="solution_des" cols="30" rows="10"></textarea><br>
                    <input type="submit" value="প্রেরণ করুন">
                </div>
            </form>
            <?php endif;?>

        </div>
    </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>