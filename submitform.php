
<?php
include_once './congfi.php';
/*if(!$conn){
	echo "Does not connect";
}
else{
	echo "<script>alert('Connect Successful')</script>";
} */

If(isset($_POST["submit"])){
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$sqli = "SELECT * FROM `employee` WHERE `Email` = '$email' AND `Password` = '$password'";
	$result = $conn->query($sqli);
    if($result){
           if($result->num_rows>0){
                while ($r = $result->fetch_assoc()){
                   //echo json_encode($r);
				   $full = $r['Fullname'];
				   echo "<script>alert('You are welcome: $full to Healthy Life website')</script>";
                   //echo $r['Email']. "<br>";
                   //echo $r['Phone number'];
                   //echo '<br/>';
                   //echo '<br/>';
                    //header("location:index.php");
                }

           }else {
               echo "<script>alert('Account not found, sign in and register')</script>";
           }
    }else {
        echo 'error';
    }
} //dhhehdjkek
    $conn->close();
?>
	

<!DOCTYPE html>
<html>
<head>
    <title>healthy living</title>
    <link rel="stylesheet" type="text/css" href="submitform.css">
    </head>
    <body>
        <div> 
            <div id="header">
                <div>
                    <a href="#"><img src="practice%202/logo.gif"></a>
                </div>
                <div id="nav">
                    <ul>
                        <li class="selected"><a href="#" style="border-radius: 10px 0px 0px 10px">Home</a></li>
                        <li><a href="#">Recipe</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#" style="border-radius: 0px 10px 10px 0px">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div id="section">
            </div>
			 <div id="wrap-image">
			    <div id="list_text">
				   <ol>
				     <li><a href="#"><img id="img1" src="practice 2/vegetables.jpg"></a>
					    <p id="text_p">Lorem ipsum dolor sit</p>
					 </li>
				     <li><a href="#"><img id="img2" src="practice 2/pastries.jpg"></a>
					    <p id="text_p2">Mirum est notare quam</p>
					 </li>
				   </ol>
				   <div id="food">
				     <a href="#"><img src="practice 2/food.jpg"></a>
				   </div>
				     <div id="text_only">
					   <p><span id="text1"><i>Secrets of</i></span><br><span id="text_3"><i>Healthy eating</i></span><br>If you decide to belong to something, you must make your decision based on principles and not feelings loyalty is broken when the word and it's principles are set aside. e.g. Jonathan 1 Sam 20:13 (The Lord do so and much more to Jonathan; but if it please my father to do thee evil, then I will shew it thee, and send thee away that thou mayest go in peace; and the Lord be with thee, as he hath been with my father.)If you decide to belong to something, you must make your decision based on principles and not feelings loyalty is broken when the word and it's principles are set aside. e.g. Jonathan 1 Sam 20:13 (The Lord do so and much more to Jonathan; but if it please my father to do thee evil, then I will shew it thee, and send thee away that thou mayest go in peace; and the Lord be with thee, as he hath been with my father.)If you decide to belong to something, you must make your decision based on principles and not feelings loyalty is broken when the word and it's principles are set aside. e.g. Jonathan 1 Sam 20:13 ... <a href="#">Read more.</a>
					   </p>
					 </div>
				</div>
			 </div>
			    <div id="ground">
				   <ul id="list">
				     <li><a href="#"><img src="practice 2/baking-fruits.jpg"></a>
					    <h2><i><a href="#">Banking Fruit</a></i></h2>
						<p>Whenever Your loyalty is tested, you will have<br> to analyze many things in order to stay loyal.... <br><a href="#">Read more</a></p>
					 </li>
				     <li><a href="#"><img src="practice 2/health-benefits.jpg"></a>
					      <h2><i><a href="#">Health Benefits</a></i></h2>
						<p>Whenever Your loyalty is tested, you will have<br> to analyze many things in order to stay loyal... <br><a href="#">Read more</a></p>
					 </li>
				     <li><a href="#"><img src="practice 2/vitamins.jpg"></a>
					    <h2><i><a href="#">Vitamins in them</a></i></h2>
						<p>Whenever Your loyalty is tested, you will have to<br> analyze many things in order to stay loyal... <br><a href="#">Read more</a></p>
					 </li>
				   </ul>
				   <div id="footer"><p>Copyright &copy; <span id="year"></span> Kelex.com - All Rights Reserved | Powered by Elite Sam
				   </p>
				  </div>
		        </div>
        </div>
    </body>
</html>
<script>
document.getElementById("year").textContent= new Date().getFullYear();

</script>