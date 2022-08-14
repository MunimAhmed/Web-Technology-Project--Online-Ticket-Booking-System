<?php
//include ("../View/Header.php");
session_start();

if(!isset($_SESSION["uname"]))
{
    header("location:../View/customerlogin.php");
}

?>

<html>

Hi, User <?php echo $_SESSION["uname"]; ?> <br>

Click Here to Logout <a href="../Control/customerlogout.php"> Logout </a> 

<body>
    <link rel="stylesheet" type="text/css" href="../CSS/customerStyle.css">
    </body>
    
    <hr>
    <h1>
    <div class='main-body'>
 
        <div id='Booking'>
        <div class='form-field'>
            <label> Select Transport: </label> 
            <input type="radio" name='transport' Value='Bus'>Bus
            <input type="radio" name='transport' Value='Air'>Air
            </div>
            <div class='form-field'>
            <label> From: </label> 
            <select name="From" id="From">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                      </select>
            </div>
            <div class='form-field'>
            <label> To: </label> 
            <select name="To" id="To">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                      </select>
            </div>
            <div class='form-field'>
            <label> Select Number of Seats: </label> <br>
                    <label>Adults:</label>
                    <td><select name="Adults" id="Adults">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    <label>Child:</label>
                   <select name="Child" id="Child">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
            </div>

            <div class='form-btns'>
       <input type="submit" name="submit" value="Confirm"> 
        <input type="reset" value="Reset"> 
        </div> 
    </div>
</div>


    </div>
    </body>

</html>


<?php
include ("Footer.php");
?>
