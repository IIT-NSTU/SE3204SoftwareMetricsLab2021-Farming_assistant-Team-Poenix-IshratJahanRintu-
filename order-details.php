<?php
include 'admin_header.php';

?>



<!DOCTYPE html>
<html>

    <head>
        <style>
        .order-table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .order-table td,
        .order-table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .order-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .order-table tr:hover {
            background-color: #ddd;
        }

        .order-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: yellowgreen;
            color: white;
        }
        </style>
    </head>

    <body>
        <section>
            <h1 class="heading text-center ">অর্ডারসমূহ</h1>

            <table class="order-table">
                <tr>
                    <th>অর্ডার</th>
                    <th>ক্রেতা</th>
                    <th>কৃষিপণ্য</th>
                    <th>দাম</th>
                    <th>কৃষক</th>
                    <th>কৃষক থেকে পণ্য গ্রহণ </th>
                    <th>পণ্য ডেলিভারি</th>
                </tr>
                <tr>
                    <td>১</td>
                    <td>রিন্তু</td>
                    <td>মরিচ</td>
                    <td><span>৫০</span> টাকা</td>
                    <td>অনুপা</td>
                    <td><a class="bttn">করা হয়েছে</a></td>
                    <td> হয়েছে</td>
                </tr>


            </table>
        </section>
    </body>






    <?php

include 'footer.php';
?>