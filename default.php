<!DOCTYPE html>
<html>

<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8"/>



<style>
body { font-family: 'ubuntulight';}
</style>


<body>
<style>

body, html {
  height: 100%;
}

body {
  /* The image used */
  background-image: url('/ubuntu-20.10-wallpaper-750x422.jpg');

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

div.screen {
  color: white;
  font-weight: normal;
  font-size: 64;
  background-color: #300A24;
}



</style>
<table border="0">
<tr><td>
<div class='screen'>
<h2>
<table border='0' padding='3' spacing='10'>
  <tr><td valign='top'>OS</td><td>&nbsp;&nbsp;</td><td valign='top'><?php echo php_uname('v');?></td></tr>
  <tr><td valign='top'>Kernel</td><td>&nbsp;&nbsp;</td><td valign='top'><?php echo php_uname('r');?></td></tr>
  <tr><td valign='top'>Chipset</td><td>&nbsp;&nbsp;</td><td valign='top'><?php echo php_uname('m');?></td></tr>
  <tr><td valign='top'>IP</td><td>&nbsp;&nbsp;</td><td valign='top'><?php echo $_SERVER['SERVER_ADDR'];?></td></tr>
</table>
</h2>
</td>

<td width="40%">&nbsp;</td>



<td>
<font color='#FFFFFF'>
<h1>Welcome to Canonical</h1>
<h3>Files under /var/snap/iotdevice-lighttpd/current/www/</h3>
</font>

</font>
</body>
</html>
