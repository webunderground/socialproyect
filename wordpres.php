<?php
	require_once('common.php');
	checkUser();
?>
<?php
/*************************************************
 * Micro News
 *
 * Version: 1.0
 * Date: 2007-07-12
 *
 * Usage:
 *
 ****************************************************/

// This function reads all available news
function getNewsList(){
	
   $fileList = array();
   
	// Open the actual directory
	if ($handle = opendir("news")) {
		// Read all file from the actual directory
		while ($file = readdir($handle))  {
		    if (!is_dir($file)) {
		       $fileList[] = $file;
      	}
		}
	}	
	
	rsort($fileList);
	
	return $fileList;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="w3css/w3.css">
<title>blog personal  </title>

<meta name="generator" content="WordPress 1.5.1.2" /> <!-- leave this for stats -->

<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/default/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://localhost/wordpress/?feed=rss2" />
<link rel="alternate" type="text/xml" title="RSS .92" href="http://localhost/wordpress/?feed=rss" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://localhost/wordpress/?feed=atom" />
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php" />

<link rel="stylesheet" href="w3css/w3.css">
<style type="text/css" media="screen">
/*	To accomodate differing install paths of WordPress, images are referred only here,
	and not in the wp-layout.css file. If you prefer to use only CSS for colors and what
	not, then go right ahead and delete the following lines, and the image files. */
		
	body { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbgcolor.jpg"); }	
	#page { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbg.jpg") repeat-y top; border: none; }
	#header { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickheader.jpg") no-repeat bottom center; }
	#footer { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickfooter.jpg") no-repeat bottom; border: none;}

/*	Because the template is slightly different, size-wise, with images, this needs to be set here
	If you don't want to use the template's images, you can also delete the following two lines. */
		
	#header 	{ margin: 0 !important; margin: 0 0 0 1px; padding: 1px; height: 198px; width: 758px; }
	#headerimg 	{ margin: 7px 9px 0; height: 192px; width: 740px; } 

/* 	To ease the insertion of a personal header image, I have done it in such a way,
	that you simply drop in an image called 'personalheader.jpg' into your /images/
	directory. Dimensions should be at least 760px x 200px. Anything above that will
	get cropped off of the image. */
	/*
	#headerimg { background: url('http://localhost/wordpress/wp-content/themes/default/images/personalheader.jpg') no-repeat top;}
	*/
</style>

	<link rel='archives' title='October 2019' href='http://localhost/wordpress/?m=201910' />

</head>
<body>

<div id="page">


<div id="header">
	<div id="headerimg">
		<h1><a href="http://localhost/wordpress">el blog de sprinfiel</a></h1>
		<div class="description">con tecnologia wordpress chimbo</div>
	</div>
</div>
<hr />

	<div id="content" class="narrowcolumn">

			
						
			<div class="post" id="post-1">
			<h2> <?php echo $_SESSION['userName']; ?></h2>
				<small><?php date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
    setlocale(LC_ALL,"es_ES");
     echo date('d F Y ' );?> <!-- by Administrator --></small>
				
				<div class="entry">
						<p>Este blog tiene como finalidad informar sobre las actividades  y aficiones de los usuarios de sprinfielface red social
</p>
				</div>
				<div class="entry">
		        
    <table width="100%">
    <?php
    
      $list = getNewsList();
      foreach ($list as $value) {
      	$newsData = file("news/".$value);
      	$newsTitle  = $newsData[0];
         $submitDate = $newsData[1];	
         unset ($newsData['0']);
         unset ($newsData['1']);
      	
         $newsContent = "";
         foreach ($newsData as $value) {
    	       $newsContent .= $value;
         }
      	
      	echo "<tr><th align='left'>$newsTitle</th><th align='right'>$submitDate</th></tr>";
      	echo "<tr><td colspan='2'>".$newsContent."<br/><hr size='1'/></td></tr>";
      }
    ?>
    </table>
	
		 
		 </div>
				<p class="postmetadata">Posted in <a href="http://localhost/wordpress/?cat=1" title="View all posts in Uncategorized" rel="category tag">Uncategorized</a> <strong>|</strong>   <a href="http://localhost/wordpress/?p=1#comments">2 Comments &#187;</a></p>
			</div>
	
		
		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>
		
	
	</div>

	<div id="sidebar">
		<ul>
			
			<li>
				<form method="get" id="searchform" action="/wordpress/index.php">
<div><input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>			</li>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<li>
						</li>

			
			<li><h2>Archives</h2>
				<ul>
					<li><a href='http://localhost/wordpress/?m=201910' title='October 2019'>October 2019</a></li>
				</ul>
			</li>

			<li><h2>Categories</h2>
				<ul>
					<li><a href="http://localhost/wordpress/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a> (1)
</li>
				</ul>
			</li>

							
					<li id="linkcat-1"><h2>Blogroll</h2>
	<ul>
<li><a href='http://localhost/sphider/search.php' title='buscador de la intranet'>Sphider</a></li>
<li><a href='http://localhost/cmsimple/' title='cms gestor de contenido'>cmsimple</a></li>

<li><a href='index.php' title='red social de los simpson'>sprinfielface</a></li>
	</ul>
</li>
				
				<li><h2>Meta</h2>
				<ul>
										<li><a href="blog.php">entry</a></li>
					<li><a href="edit.php">edit</a></li>
					<li><a href="logout.php">salir</a></li>
									</ul>
				</li>
						
		</ul>
	</div>



<hr />
<div id="footer">
	<p>
		blog personal is proudly powered by 
		<a href="http://wordpress.org">WordPress</a>
		<br /><a href="feed:http://localhost/wordpress/?feed=rss2">Entries (RSS)</a>
		and <a href="feed:http://localhost/wordpress/?feed=comments-rss2">Comments (RSS)</a>.
		<!-- 16 queries. 0.094 seconds. -->
	</p>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->

		
</body>
</html>