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

                        <th>কৃষক</th>
                        <th>তারিখ</th>

                        <th>ট্রান্সেকশন আইডি</th>
                        <th> পণ্য গ্রহণ </th>

                        <th>পণ্য ডেলিভারি</th>
                        <th>আপডেট </th>

                    </tr>
                    <?php
                if (isset($order_list)) {

                    if (count($order_list) > 0) {

                        foreach ($order_list as $order) {
                ?>
                    <tr>
                        <td><?php echo $order['order_id']; ?></td>
                        <td><?php echo $order['customer']; ?> <div><?php echo $order['customer_no']; ?></div>
                            <div><?php echo $order['customer_address']; ?></div>
                        </td>
                        <td>
                            <div><?php echo $order['product']; ?></div>
                            <div>(<?php echo $order['quantity']; ?>)</div>
                            <div><?php echo $order['price']; ?><span>টাকা</span></div>

                        </td>

                        <td><?php echo $order['seller']; ?> <div><?php echo $order['farmer_no']; ?></div>
                            <div><?php echo $order['farmer_address']; ?></div>
                        </td>
                        <td><?php echo $order['order_date']; ?></td>

                        <td><?php echo $order['transaction_id']; ?></td>
                        <form action=""
                              method="post">
                            <input type="hidden"
                                   name="order_id"
                                   value="<?php echo $order['e_order_id']; ?>">
                            <td><select name="is_recieved"
                                        style="margin: 0; width:max-content;padding: 11px;
    background-color: #093d09;
    text-align: center; border-radius: 8px;box-shadow: inset 8px 8px 8px #198754, inset -8px -8px 8px black;"
                                        name="is_recieved"
                                        id=""
                                        class="bttn">
                                    <?php if ($order['is_recieved'] == 'no') { ?>
                                    <option value="no"
                                            selected>করা হয়নি</option>
                                    <option value="yes">করা হয়েছে</option>
                                    <?php } else { ?>
                                    <option value="no">করা হয়নি</option>
                                    <option value="yes"
                                            selected>করা হয়েছে</option>
                                    <?php  } ?>
                                </select></td>

                            <td><select name="is_delivered"
                                        style="margin: 0; width:max-content;padding: 11px;
    background-color: #093d09;
    text-align: center; border-radius: 8px;box-shadow: inset 8px 8px 8px #198754, inset -8px -8px 8px black;"
                                        id=""
                                        class="bttn">
                                    <?php if ($order['is_delivered'] == 'no') { ?>
                                    <option value="no"
                                            selected>করা হয়নি</option>
                                    <option value="yes">করা হয়েছে</option>
                                    <?php } else { ?>
                                    <option value="no">করা হয়নি</option>
                                    <option value="yes"
                                            selected>করা হয়েছে</option>
                                    <?php  } ?>

                                </select></td>
                            <td style="display:flex ; flex-direction:column;"><input type="submit"
                                       class="bttn"
                                       style="margin: 5px 0px;
    padding: 11px;
    border-radius: 8px;"
                                       name="update_order"
                                       value="আপডেট">

                                <a href="orderHandler.php?delete_id=<?php echo $order['e_order_id']; ?>"
                                   class="dlt-btn"
                                   style="margin: 0; padding: 11px; border-radius: 8px;">ডিলেট</a>
                            </td>
                        </form>
                    </tr>
                    <?php }
                    }
                } ?>

                </table>
            </div>
        </section>
    </body>






    <?php

include 'footer.php';
?>