<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <title></title> -->


</head>

<body>

    <div class="container">
        <h2 class="py-3 text-center display-3">কৃষি সংক্রান্ত সমস্যা লিখুন </h2>
        <form action="add_problem.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title" class="font-weight-bold">শিরোনাম</label>
                <input name="title" id="title" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="problem_des" class="font-weight-bold">সমস্যা</label>
                <textarea style="resize:none" name="problem_des" id="problem_des" class="form-control" rows="20" cols="20" required> </textarea>
            </div>
            <div class="form-group">
                <label for="img" class="font-weight-bold">ছবি যোগ করুন</label><br>
                <input name="img" id="img" type="file" accept="image/png, image/jpeg" class="py-2">

            </div>
            <div class="form-group">

                <input name="submit" id="submit" type="submit" value="প্রেরণ করুন" class="form-control py-2">

            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
