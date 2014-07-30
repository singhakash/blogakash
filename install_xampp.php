<!DOCTYPE html>
<html lang=en>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/design.css">
<body>
<div class="container">
<h2>Akash Blog</h2>
<div class="navbars">
<ul>
<li><a href="/" >Home</a></li>
<li><a href="tutorials.php" class="currentlink">Tutorial</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
<div class="topic">

<a href="install_virtualbox.php">Download and install XAMPP in Ubuntu:</a><hr>
<h4>These steps are for installing xamp from both .run or .tar.gz package.Every a part( like 1a, 2a, 3a) are for .tar.gz xampp package and every b( like 1b,2b,3b) are for .run zamp package.Follow any one process.</h4>
<ol>
<li>
	
<ol type="a">
<li>
<h5>Press Ctrl+Shift+T and open a terminal and paste "wget http://www.apachefriends.org/download.php?xampp-linux-1.7.3a.tar.gz" command in terminal and enter.Then enter your root password. </h5>
</li>
<a href="./images/install_xampp1a.png"><img src="./images/install_xampp1a.png" height="450" width="700"></a>
<br>
OR
<li>

<h5>To download xampp visit the <a href="https://www.apachefriends.org/download.html" target="_blank">link</a> and  on "XAMPP for Linux 1.8.2 & 1.8.3" click on download(64 bit) button or select accoding to your system bits.A xampp-linux-1.8.2.0-installer.run will be downloaded. </h5>
</li>
<a href="./images/install_xampp1.png"><img src="./images/install_xampp1.png" height="450" width="700"></a>
</ol>
</li>

<li>
<ol type="a">
<li>
<h5>Then enter "sudo ./xampp-linux-1.8.2.0-installer.run" in the terminal and press enter.</h5>
</li>
<a href="./images/install_xampp2a.png"><img src="./images/install_xampp2a.png" height="450" width="700"></a>
OR(next step after 1b)
<li>
<h5>Then enter "sudo tar xvfz xampp-linux-1.7.3a.tar.gz -C /opt" in the terminal and press enter.</h5>
</li>
<a href="./images/install_xampp2.png"><img src="./images/install_xampp2.png" height="450" width="700"></a>

</ol>	
</li>


<li>
<ol type="a"> 
<li><h5>Then after installation enter "/opt/lampp/lampp start" interminal to start xampp server.</h5>	</li>

<a href="./images/install_xampp3a.png"><img src="./images/install_xampp3a.png" height="450" width="700"></a>
OR(next step after 2b)
	<li><h5>Then after installation enter "/opt/lampp start" interminal to start xampp server.</h5>	</li>

<a href="./images/install_xampp3.png"><img src="./images/install_xampp3.png" height="450" width="700"></a>
</ol>	
</li>
<br>
<li>You can check by entering <a href="http://localhost" target="_blank">http://localhost</a> and <a href="http://localhost/phpmyadmin" target="_blank">http://localhost/phpmyadmin</a></li>

</ol>





</div>



</div>
	

</body>
</html>