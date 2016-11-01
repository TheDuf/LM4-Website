<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form Registration</title>
<head>
<body>
<form id="register" action="athomeregister.php" method="post" name=form1>
<table style="margin-left:auto; margin-right:auto; width:400px">
  <tbody>
    <tr style="text-align:center">
        <td colspan="2"><h1>Register Now!</h1></td>
    </tr>
    <tr>
        <td>First name:* </td>
        <td><input type="text" name="firstname" required="required"><br></td>
    </tr>
    <tr>
        <td>Last name:* </td>
        <td><input type="text" name="lastname" required="required"><br></td>
    </tr>
    <tr>
        <td>Email:* </td>
        <td><input type="text" name="email" required="required"><br></td>
    </tr>
    <tr>
        <td>Do you have any experience with Computer Science?*<br></td>
        <td><input type="radio" name="experience" value="yes" required="required">Yes<br></td>
        <td><input type="radio" name="experience" value="no" required="required">No<br></td>
    </tr>
    <tr>
        <td>Have you been to WHack before?*<br></td>
        <td><input type="radio" name="beento" value="yes" required="required">Yes<br></td>
        <td><input type="radio" name="beento" value="no" required="required">No<br></td>
    </tr>
    
    /* <tr>
        <td>Check off any computer science classes you have taken.<br></td>
        <td><input type="checkbox" name="class" value="Intro to Computer Science">Intro to CS<br></td>
        <td><input type="checkbox" name="class" value="AP Computer Science">AP CS<br></td>
        <td><input type="checkbox" name="class" value="Advanced Topics in Computer Science">Advanced CS<br></td>
        <td><input type="checkbox" name="class" value="Honors Principles in Computer Science">Honors Principles<br></td>
        <td><input type="checkbox" name="class" value="Alice">Alice<br></td>
    </tr> */
    <tr style="text-align:center">
        <td colspan="2"><input type="submit" name="Submit" value="Submit"</td>
        <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
    <tr>
        <td colspan = "2"></td>
    </tr>
    <tr stlye="text-align:center">
        <td colspan="2">
            <?php
                if(isset($_GET['msg']))
                {
                    $message = $_GET['msg'];
                    if($message == 1)
                        echo"<span style='color:green'>Your entry has been successfully inserted!</span>"
                }
            ?>
        </td>
    </tr>
<div><p>*required field</p></div>
    </tbody>
</table>
</form>
</body>
</html> 