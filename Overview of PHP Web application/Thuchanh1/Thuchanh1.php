<html>
    <head>
       <title>Thời gian hiện tại</title>
    </head>
    <body>
        <?php ?>
        <h1> Bây giờ là: 
        <?php 
        date_default_timezone_set('Asia/Ho_Chi_Minh'); 
        echo date('Y-M-d h:i:s'); ?> </h1>
    </body>
</html>