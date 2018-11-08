<TITLE>Home</TITLE>
<h1>Welcome</h1>
<?Php
  $erreur = @$_GET['erreur'];
  echo $_SERVER['REMOTE_ADDR'];
?>

<div id="box">
<h2><u>Ecran de connexion</u></h2>
<p align="center">
  <font color="red"><? if(@$erreur == 1) echo"VOUS N'AVEZ PAS ACCES A CETTE PAGE"; ?></font>
</p>
<FORM action="./login.php" method="POST">
  <TABLE align="center" border=0 name="login">
  <tr>
    <td>
      Nom D'utilisateur : 
    </td>
    <td>
      <input type="text" name="Login" value="<?Php echo @$_GET['user']; ?>">
      <?Php if(@$_GET['error'] == "user"){ echo "<font color=red>Nom d'utilisateur &eacute;rron&eacute;</font>";} ?>
    </td>
   <tr>
    <td>
      Mot de passe :
    </td>
    <td>
       <input type="password" name="Password" value="">
       <?Php if(@$_GET['error'] == "pass"){ echo "<font color=red>Mot de passe &eacute;rron&eacute;</font>";} ?>
    </td>
   </tr>
   <tr>
    <td>
    </td>
    <td>
      <input type="submit" value="Connexion">
    </td>
   </tr>
</TABLE name="login">
 
</FORM>

</div id="box">

