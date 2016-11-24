<?php 
include_once 'dbconnect.php';
include 'header.php';
session_start();
echo'
    
            <a name="men"><h3 style="color:#F1684E;">Men</h3></a>
            <div id="men" style="color:#222930;"> ' ; 
            //Retrived from db///////////////////
            $sql = mysql_query("SELECT * FROM product where category_id=5");
            while ($row = mysql_fetch_array($sql)){
                echo
                '<div id="item" style="float:left; margin:auto; margin-right:20px; margin-bottom:20px;border-radius:10px;
                 border:solid 2px #4EB1BA;background-color:#ECEAE0; " >'.
                "<b><pre>". $row['product_name']." </b> <b>Price: </b>". $row['price'].'&euro;</pre>
                <p><img src="'.$row['source'].'" height=400px; width=380px; >
                <form name="toCart" action="cart.php" method="post">
                <input type="hidden" name="product_id" value="'.$row['product_id'].'">
                <input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'">
                <table>
                    <tr><td><input type="number" name="quantity" placeholder="Quantity" required></td> 
                    <td><input type="submit" name="to_cart" value="Add to Cart"> </td></tr>
                </table>

            </form> </div>';
        }
            echo '</div>
            <a name="women"><h3 style="color:#F1684E;">Women</h3></a>
            <div id="women" style="color:#222930;" > ' ; 
            //Retrived from db///////////////////
            $sql = mysql_query("SELECT * From product where category_id=6");
            while ($row = mysql_fetch_array($sql)){
                echo
                '<div id="item" style="float:left; margin:auto; margin-right:20px;margin-top:20px;margin-bottom:20px;
                 border-radius:10px; border:solid 2px #4EB1BA;background-color:#ECEAE0; ">'.
               "<b><pre>". $row['product_name']." </b> <b>Price: </b>". $row['price'].'&euro;</pre>
                <p><img src="'.$row['source'].'" height=400px; width=380px; margin-top:20px;>
                <form name="toCart" action="cart.php" method="post">
                <input type="hidden" name="product_id" value="'.$row['product_id'].'">
                <input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'">
                <table>
                    <tr><td><input type="number" name="quantity" placeholder="Quantity" required></td> 
                    <td><input type="submit" name="to_cart" value="Add to Cart"> </td></tr>
                </table>

            </form> </div>';
        }
             echo '</div>
             <a name="kids"><h3 style="color:#F1684E;">Kids</h3>
             <div id="kids" style="color:#222930;"></a>' ; 
            //Retrived from db///////////////////
            $sql = mysql_query("SELECT * FROM product where category_id=7");
            while ($row = mysql_fetch_array($sql)){
                echo
                '<div id="item" style="float:left; margin:auto; margin-right:10px;margin-top:20px; border-radius:10px;
                 border:solid 2px #4EB1BA;background-color:#ECEAE0;  ">'.
                "<b><pre>". $row['product_name']." </b> <b>Price: </b>". $row['price'].'&euro;</pre>
                <p><img src="'.$row['source'].'" height=400px; width=380px; >
                <form name="toCart" action="cart.php" method="post">
                <input type="hidden" name="product_id" value="'.$row['product_id'].'">
                <input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'">
                <table>
                    <tr><td><input type="number" name="quantity" placeholder="Quantity" required></td> 
                    <td><input type="submit" name="to_cart" value="Add to Cart"> </td></tr>
                </table>

            </form> </div>';
        }          //////////////
            echo '</div>'; 
        echo'
    </div></div>

</div>

</div>

</div>
<!-- /.container -->

<div class="container">

    <hr style="border-color:#F1684E;">

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 3S Fashion</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>';
unset($_SESSION['unset']);
?>