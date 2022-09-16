<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice board</title>
    <style>
        .container {
            margin-top: 6%;
        }

        .inner {
            overflow: hidden;
        }
        .inner img{
            transition: all 1.5s ease;
        }
        .inner:hover img{
            transform: scale(1.5);
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        
    <h4 class="py-3 text-center display-3">কৃষি সংক্রান্ত খবরাখবর </h4>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="assets/images/dam.jpg" alt="Card image cap">
                    </div>

                    <div class="card-body text-center">
                        <h1 class="card-title">বাজার দর</h1>
                        <p class="card-text">দৈনিক জাতীয় গড় বাজার মূল্য জানতে নিচের বাটনে ক্লিক করুন</p>
                        <a href="http://localhost/Farming-assistant/dam.php" class="btn btn-success">দেখুন</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="assets/images/weather3.png" alt="Card image cap">
                    </div>

                    <div class="card-body text-center">
                        <h1 class="card-title">আবহাওয়া পরামর্শ</h1>
                        <p class="card-text">জেলা কৃষি আবহাওয়া পরামর্শ সেবা বুলেটিন দেখতে নিচের বাটনে ক্লিক করুন</p>
                        <a href="http://localhost/Farming-assistant/fetchweather.php" class="btn btn-success">দেখুন</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="assets/images/Krishe.jpg" alt="Card image cap">
                    </div>

                    <div class="card-body text-center">
                        <h1 class="card-title">নোটিশ বোর্ড</h1>
                        <p class="card-text">কৃষি মন্ত্রণালয় এবং কৃষি সম্প্রসারণ অধিদপ্তর থেকে প্রকাশিত নোটিশ দেখতে নিচের বাটনে ক্লিক করুন </p>
                        <a href="http://localhost/Farming-assistant/notice.php" class="btn btn-success">দেখুন</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
