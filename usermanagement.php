<?php
session_start();

include ("dbcon.php");
include("adminauth.php");
include("navbar.php");


?>
<html>
<style>
    .deletebutton{
        border: none;
        background-color: inherit;
        text-decoration: underline;
        cursor: pointer;
    }
</style>
<body>
<br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-container w3-xlarge">USER MANAGEMENT</h1>
    <p class="w3-container" style="color: black; font-size: 20px;">EDIT INFORMATION OF EXISTING USERS</p>
    <table>
    <tr>
        <td style="width: 117px; border-bottom: 1px solid black;">
            <p style="font-size: 20px; text-align:left;">NO.</p>
        </td>
        <td style="width: 351px; border-bottom: 1px solid black;">
            <p style="font-size: 20px; text-align:left;">USERNAME</p>
        </td>
        <td style="width: 351px; border-bottom: 1px solid black;">
            <p style="font-size: 20px; text-align:left;">EMAIL</p>
        </td>
        <td style="width: 175.5px; border-bottom: 1px solid black;">
            <p style="font-size: 20px; text-align:left;">EDIT</p>
        </td>
        <td style="width: 175.5px; border-bottom: 1px solid black;">
            <p style="font-size: 20px; text-align:left;">DELETE</p>
        </td>
    </tr>
    <tbody>
        <?php
        
        $users = $auth->listUsers();
        
        $i=1;
        foreach ($users as $user)
        {
            ?>
            <tr style="font-size: 20px; text-align: left;">
                <td><?=$i++;?></td>
                <td><?=$user->displayName ?></td>
                <td><?=$user->email ?></td>
                <td>
                    <a href="useredit.php?id=<?=$user->uid; ?>">Edit</a>
                </td>
                <td>
                <form action="updateuser.php" method="post">
                    <button class="deletebutton" type="submit" value="<?=$user->uid;?>" name="deleteuser">Delete</button>
                </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    <br>
    </div>
    </body>
</html>

<?php
include('footer.php');
?>
