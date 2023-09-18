<html>

<body style="@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');font-family: 'Roboto', sans-serif;">
    <div style="        width: 85%;
    margin: 0 auto;
    background-color: #fbfbfb;">
        <div style="background-color:#094a6c;
    padding: 15px 20px;
    display: flex;
    align-items: center;">

            <h1 style="    text-align: center;
    margin: 0 auto;
    color: #fff;">New Order # <?php echo $booking_id;?></h1>
        </div>
        <div style="padding: 20px; ">
           <div>
                <p>Hi You have received the following order from - <?php echo $first_name.' '.$last_name;?>,</p>
               
                <strong>[Order #<?php echo $booking_id;?>] (<?php echo $travel_date;?>)</strong>
            </div>
            <div>
                <h1 style="    color: #5a5ac1;
    font-size: 24px;
    margin-top: 30px;
    margin-bottom: 5px;">Order Details</h1>
                <table style="width: 100%; font-size: 14px;">
                    <tr style="background-color: #f1f1f1;">
                        <th style="    padding: 15px; border: 1px solid #d2d2d2; font-size: 16px;">Product</th>
                        <th style="border: 1px solid #d2d2d2; font-size: 16px;">Qty</th>
                        <th style="border: 1px solid #d2d2d2; font-size: 16px;">Price</th>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Vehicle Name</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $vehicle;?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"> </td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Travel Type</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $travel_type?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;">£<?php echo $sub_total?></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Passengers</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $passenger?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Suitcase</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $suitcase?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;">‎</td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Hand Lagguage</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $hand_lagguage?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;">‎</td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">ChildSeat</td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $child_seat?>
                    
                    </td>
                        <td style="border: 1px solid #d2d2d2; background-color: #fff;">£ <?php echo $child_seat_cost;?></td>
                    </tr>
                    <?php if($greet_status == 1){?>
                        <tr style="text-align: center;">
                        <td style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">MEET AND GREET & DROP OFF - YES, PLEASE MEET ME IN ARRIVALS</td>
                
                <td style="border: 1px solid #d2d2d2; background-color: #fff;"><?php echo $greet_status?>   
                <td style="border: 1px solid #d2d2d2; background-color: #fff;">£ <?php echo $greeting_cost;?></td>
                    </tr>
                    <?php }?>
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">PromoCode Discount</td>
                        <td style="border: 1px solid #d2d2d2; font-weight: bolder; background-color: #fff;">‎£ <?php echo $promocode_discount; ?></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">‎Grand Total:</td>
                        <td style="border: 1px solid #d2d2d2; font-weight: bolder; background-color: #fff;">‎£ <?php echo $total; ?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">‎Payment Method</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $type?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">‎Customer Name</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $first_name.' '.$last_name;?></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">‎Pickup date and time</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $travel_date; ?> - <?php echo $travel_time; ?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">‎Phone Number</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $phone;?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Email Address</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $email;?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Flight Number</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $flight_no;?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;"><h1 style="font-size: 16px; margin-top: 25px;">Route Locations</h1></td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Pickup Point</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $source;?>
                        	<?php if($way_point_1 != ''){?> <br><div style="padding-top: 10px;"><?php echo $way_point_1;?></div><?php }?>
                            <?php if($way_point_2 != ''){?><br><div style="padding-top: 10px;"><?php echo $way_point_2;?></div><?php }?>
                            <?php if($way_point_3 != ''){?><br><div style="padding-top: 10px;"><?php echo $way_point_3;?></div><?php }?>
                            </td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Dropoff Point</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $destination;?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">Pickup Door Name / Home Number</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $pick_up;?></td>
                    </tr>
                    
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #d2d2d2;    text-align: left;
    border: 1px solid #f5f5f5;
    padding: 15px 10px;     background-color: #fff; font-weight: bold; border: 1px solid #d2d2d2;">COMMENTS OR SPECIAL INSTRUCTIONS</td>
                        <td style="border: 1px solid #d2d2d2; padding-top: 20px; background-color: #fff;"><?php echo $scomments_special_inst;?></td>
                    </tr>
                    
                </table>
            </div>
           <?php /*?> <div>
                <div style="background-color: #999; margin-top: 25px;height: 50px;"></div>
                <div style="padding: 35px; border: 1px solid #d2d2d2;">
                    <h1 style="font-size: 16px;">GENERAL</h1>
                    <table style="border-top: 1px dotted  #d2d2d2; width: 100%; font-size: 14px;">
                        <tr>
                            <td style="padding-top: 10px;">Title</td>
                            <td style="padding-top: 10px;">Booking ID <?php echo $booking_id; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">Transfer type</td>
                            <td style="padding-top: 10px;"><?php echo $travel_type;?></td>
                        </tr>
                     
                        <tr>
                            <td style="padding-top: 10px;">Pickup date and time</td>
                            <td style="padding-top: 10px;"><?php echo $travel_date; ?> - <?php echo $travel_time; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">Order total amount</td>
                            <td style="padding-top: 10px;">£ <?php echo $total; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">COMMENTS OR SPECIAL INSTRUCTIONS</td>
                            <td style="padding-top: 10px;"><?php echo $scomments_special_inst; ?></td>
                        </tr>
                      
                    </table>
                    <h1 style="font-size: 16px; margin-top: 25px;">Route Locations</h1>
                    <table style="border-top: 1px dotted  #d2d2d2; width: 100%; font-size: 14px;">
                        <tr>
                            <td style="padding-top: 10px;"><?php echo $source;?></td>
                            <?php if($way_point_1 != ''){?> <td style="padding-top: 10px;"><?php echo $way_point_1;?></td><?php }?>
                            <?php if($way_point_2 != ''){?> <td style="padding-top: 10px;"><?php echo $way_point_2;?></td><?php }?>
                            <?php if($way_point_3 != ''){?> <td style="padding-top: 10px;"><?php echo $way_point_3;?></td><?php }?>
                            <td style="padding-top: 10px;"><?php echo $destination;?></td>
                        </tr>
                    </table>
                    <h1 style="    color: #5a5ac1;
    font-size: 24px;
    margin-top: 30px;
    margin-bottom: 5px;">VEHICLE</h1>
            <div style="border:1px solid #d2d2d2; padding: 20px;">
                <p style="margin-top: 0;">Vehicle name-<?php echo $vehicle;?></p>
                <p style="margin-top: 0;">Bag Count-<?php echo $suitcase;?></p>
                <p style="margin-top: 0;">Passengers count-<?php echo $passenger;?></p>
                
            </div>
                    <h1 style="font-size: 16px; margin-top: 25px;">EXTRA</h1>
                    <table style="border-top: 1px dotted  #d2d2d2; width: 100%; font-size: 14px;">
                        <tr>
                    <?php if($child_seat != 0){?> <td style="padding-top: 10px;">1.<?php echo $child_seat?> x Child Seat - £<?php echo $child_seat_cost?></td><?php }?>
                    <?php if($greet_status == 1){?> <td style="padding-top: 10px;">2.<?php echo $greet_status?> x Meet and greet  - Yes, please meet me in arrivals - £<?php echo $greeting_cost?></td><?php }?>
                        </tr>
                    </table>
                </div>
                <div style="background-color: #999; height: 50px;"></div>
            </div>
            <h1 style="    color: #5a5ac1;
    font-size: 24px;
    margin-top: 30px;
    margin-bottom: 5px;">CLIENT DETAILS</h1>
            <div style="border:1px solid #d2d2d2; padding: 20px;">
                <p style="margin-top: 0;"><?php echo $first_name.' '.$last_name;?></p>
                <p><?php echo $email;?></p>
                <p><?php echo $phone;?></p>
                
            </div><?php */?>

            
        </div>
    </div>
</body>

</html>