<?php
    $title= "Cash IN";
    include('header.php');
?>

<body style="background-color:rgb(255, 255, 255);">

    <table style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" align="center" width="70%">

        <tr>

            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" colspan="2" align="right">

                <img align="left" src="../assets/flycash.png" alt="Logo" width="200" height="100">
                <br><br>

                <b style=" font-size: xx-large; color: rgb(0, 0, 0);">Logged in as </b>
                <a href="../view/dashboard.php"><b
                        style=" font-size: xx-large; color: rgb(116, 168, 64);"><?php echo $name ?></b></a>
        </tr>

        <tr>
            <td valign="top" width="20%">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b style="font-size:xx-large; color: rgb(199, 0, 0);">Merchant</b>
                <hr align="left" width="100%">
                <ul style="color: rgb(0, 0, 0);" align="left">
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href=" dashboard.php">Dashboard</a>
                    </li><br>
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href=" addmoney.php">Add Money</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="viewProfile.php">View Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="editProfile.php">Edit Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="profilePicture.php">Change Profile
                            Picture</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepassword.php">Change
                            Password</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepin.php">Change FlyCash PIN</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="feedBack.php">Feedback</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="../controller/logout.php">Logout</a>
                    </li>
                </ul>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="publicHome.html"><img src="../assets/home.png" style="width:40px; height:40px" title="Home"
                        alt="home"></a><br>
            </td>
            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" width="68%" height="698px">
                <table style="border:2px solid rgb(0, 0, 0);" width="70%" height="88%" align="center">
                    <tr>
                        <td height=30px colspan="2">
                            <div align="center">
                                <b style="font-size: x-large; color: rgb(0, 0, 0);">Add Money</b>
                            </div>
                            <hr width="50%">
                        </td>
                    </tr>

                    <tr>
                        <td height=30px colspan="2">
                            <div align="center">
                                <b style="font-size: x-large; color: rgb(0, 0, 0);"> Balance :
                                    <?=$balance?>&nbsp;&nbsp;TK</b>
                            </div>
                            <hr width="100%">
                        </td>
                    </tr>

                    <tr>

                        <td align="center">
                            <a href="bkash.php"><img src="../assets/BKash.png" style="width:150px; height:100px"
                                    title="Bkash" alt="bkash"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Bkash</b>
                        </td>

                        <td align="center">
                            <a href="nagad.php"><img src="../assets/Nagad.png" style="width:100px; height:100px"
                                    title="Nagad" alt="nagad"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Nagad</b>
                        </td>
                    </tr>


                    <tr>
                        <td align="center">
                            <a href="roket.php"><img src="../assets/Roket.png" style="width:100px; height:100px"
                                    title="Roket" alt="roket"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Roket</b>
                        </td>

                        <td align="center">
                            <a href="bank.php"><img src="../assets/CreditCard.png" style="width:100px; height:100px"
                                    title="Bank" alt="bank"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Bank</b>
                        </td>

                    </tr>
                </table>
            </td>


        </tr>

        <?php
    include('footer.php');
    ?>