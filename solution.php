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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Solution</title>
    <style>
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
</style>

</head>

<body>
    <div class="container ">
        <div class="text-center my-5">
            <h1 class="heading text-center">কৃষি বিষয়ক সমস্যার সমাধান</h1>
            <hr>
        </div>

        <h4>প্রশ্ন: <?php echo $data[0]['title']; ?></h4>
    
        <h5>সমস্যা:</h5>
        <p><?php echo $data[0]['problem_des']; ?></p>

        <?php if($data[0]['img']!=""):?>
        <img src="assets/uploaded_img/<?php echo $data[0]['img'];?>" alt="" width="10%" >
        <?php endif;?>

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

</body>

</html>