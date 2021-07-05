<style type="text/css">

	* {
	  border: 0;
	  margin: 0;
	  padding: 0;
	}

	body {
	  background: #0D4260;
	}

	h1 {
		font-family: 'Reem Kufi', sans-serif;
		font-size: 60px;
		color: white;
		text-align: center;
		padding: 80px;
	}

	p {
		font-family: 'Josefin Sans', sans-serif;
		font-size: 20px;
		color: white;
	}

	.menu > ul > li {
	  display: inline-block;
	  position: relative;
	  vertical-align: top;
	  width: 24%;
	  text-align: center;
	  font-family: 'Reem Kufi', sans-serif;
	  font-size: 30px;
	  padding: 5px;
	  text-decoration: none;
	  transition: .3s;
	}

	.menu ul li a {
	  color: black;
	  display: block;
	  padding: 10px;
	  text-decoration: none;
	  transition: .3s;
	}

	.menu ul li a:hover {
	  color: #F58B8B;
	  transition: .3s;
	}

	.menu {
	  max-width: 100%;
	  margin: 0 auto;
	  background: #E5E5E5;
	  padding-left: 10px;
	}

</style>

<header>
	<nav class="menu">
    <ul>
      <li class="menu-item"><a href="index.html">HOME</a></li>
      <li class="menu-item"><a href="about.html">ABOUT</a></li>
      <li class="menu-item"><a href="gallery.html">GALLERY</a></li>
      <li class="menu-item"><a href="contact.html">CONTACT</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
