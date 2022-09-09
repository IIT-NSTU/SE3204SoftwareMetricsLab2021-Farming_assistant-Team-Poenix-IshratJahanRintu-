<?php
include 'admin_header.php';

?>



<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>
        <section>
            <h1 class="heading text-center ">অর্ডারসমূহ</h1>

            <div style="overflow-x:auto ;">
                <table class="
                 order-table">
                    <tr>
                        <th>অর্ডার</th>
                        <th>ক্রেতা</th>
                        <th>কৃষিপণ্য</th>
                        <th>দাম</th>
                        <th>পরিমাণ</th>
                        <th>কৃষক</th>
                        <th>তারিখ</th>
                        <th>পেমেন্ট স্ট্যাটাস</th>
                        <th>কৃষক থেকে পণ্য গ্রহণ </th>
                        <th>ট্রান্সেকশন আইডি</th>
                        <th>পণ্য ডেলিভারি</th>
                        <th>আপডেট </th>

                    </tr>
                    <tr>
                        <td>১</td>
                        <td>রিন্তু</td>
                        <td>মরিচ</td>
                        <td><span>৫০</span> টাকা</td>
                        <td>অনুপা</td>
                        <td>রিন্তু</td>
                        <td>198404510</td>
                        <td><select style="margin: 0; width:max-content;padding: 11px;
    background-color: #093d09;
    text-align: center; border-radius: 8px;box-shadow: inset 8px 8px 8px #198754, inset -8px -8px 8px black;"
                                    name="recieved-farmer"
                                    id=""
                                    class="bttn">
                                <option value="pending">পেন্ডিং</option>
                                <option value="complete">কমপ্লিট</option>
                                <option value="rejected">রিজেক্টেড</option>


                            </select></td>
                        <td><select style="margin: 0; width:max-content;padding: 11px;
    background-color: #093d09;
    text-align: center; border-radius: 8px;box-shadow: inset 8px 8px 8px #198754, inset -8px -8px 8px black;"
                                    name="recieved-farmer"
                                    id=""
                                    class="bttn">
                                <option value="no">করা হয়নি</option>
                                <option value="yes">করা হয়েছে</option>

                            </select></td>
                        <td>ABBDKLK1255EHD</td>
                        <td><select style="margin: 0; width:max-content;padding: 11px;
    background-color: #093d09;
    text-align: center; border-radius: 8px;box-shadow: inset 8px 8px 8px #198754, inset -8px -8px 8px black;"
                                    name="recieved-farmer"
                                    id=""
                                    class="bttn">
                                <option value="no">করা হয়নি</option>
                                <option value="yes">করা হয়েছে</option>

                            </select></td>
                        <td><a href="#"
                               class="bttn"
                               style="margin: 0;
    padding: 11px;
    border-radius: 8px;">আপডেট</a></td>

                    </tr>


                </table>
            </div>
        </section>
    </body>






    <?php

include 'footer.php';
?>