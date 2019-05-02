
<?php 
		$sitename="Xie PDX Furnitures"; 
      	$sitedescription="eCommerce Website"; 
     	$siteowner="Jason Ye";
     	$sitepath="http://people.oregonstate.edu/~yeja/eCom/";  
?>

<link href="<?php echo $sitepath; ?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom styles for this template -->
<link href="<?php echo $sitepath; ?>css/style.css" rel="stylesheet">

<nav class="navbar-default">
	<div class="container">
	<div class="container-nav">
		<div class="navbar-header page-scroll">
			<a class="navbar-brand page-scroll" href="<?php echo $sitepath;?>index.php">
				<img src="<?php echo $sitepath; ?>img/logo.png" alt="Title logo">
			</a>
		</div>	
		<!--Navigation bar-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a  href="<?php echo $sitepath;?>form/uploads/antiques/antiques.php">Antiques</a>
				</li>
				<li>
                    <a  href="<?php echo $sitepath;?>form/uploads/artscraft/artscraft.php">Arts & Crafts</a>
                    
                </li>
                <li>
					<a href="<?php echo $sitepath;?>form/uploads/furnitures/furnitures.php">Furnitures</a>
				</li>
                <li>
					<a href="<?php echo $sitepath;?>form/uploads/household/household.php">Household</a>
				</li>
				<li>
					
						<a class="page-scroll" href="<?php echo $sitepath; ?>form/contact.php">Contact</a>

				</li>
			</ul>
		</div>
	</div>
	</div>
</nav>
<section>
<div id="portfolio">
    <div class="container">
        <div class="description">
            <?php echo file_get_contents("title.txt"); ?>
            <legend>$<?php echo file_get_contents("price.txt"); ?></legend>           
        </div>
     	    
    <?php  
       
        $d = dir(".");
       
        while (false !== ($entry = $d->read()))
        {
            $dir_path="$entry/";
            //echo "$dir_path";

            if (is_dir($entry) && ($entry != '.') && ($entry != '..'))

            $description_item;
            //echo file_get_contents("description.txt");
            
            $extensions_array=array('jpg','png','jpeg', 'JPG', 'PNG');

            if(is_dir($dir_path)){
                $files=scandir($dir_path);

                $folder=scandir($dir_path);
                //echo $folder['filename'], "\n";

                //echo "$file";

        
                for($i=0; $i < count($files); $i++){
                    
                    if($files[$i] != '.' && $files[$i] != '..'){
                        
                        //get file extension
                        $file=pathinfo($files[$i]);
                        $extension=$file['extension'];
                        
                        //check file extension
                        if(in_array($extension, $extensions_array)){
                        

                        

                        
                        //$file_name = scandir("../uploads/furnitures");
                        //print_r($file_name);
                        //echo $file_name['filename'], "\n"; 
                        //$file_name = pathinfo("../form/uploads/furnitures/$dir_path");
                     
                        //echo "$file_name";
                        
                        echo "
                        <div class=\"item-col-md-3\">
                            <div class=\"team-item\">

                                
                                <a href=\"$dir_path$files[$i]\" data-toggle=\"modal\" data-target=\"#modal\">
                                            <figure class=\"effect-bubba\">
                                                <div class=\"team-image\">
                                                    <div class=\"image-container\">                                                
                                                        <img src='$dir_path$files[$i]' class=\"img-responsive\" alt=\"author\">
                                                    </div>
                                                </div>    
                                                <figcaption>
                                                    <h2></h2>
                                                    <p>view more</p>

                                                                                                   
                                                </figcaption>
                                            </figure>
                                </a>                                                        
                            </div>
                        </div>
                        
                        ";

                        //echo file_get_contents("description.txt");
                        //echo "<p>$description</p>";

                        //Modal for item $files[$i]
                            
                        }
                    }
                }
            } 
        }

        
    ?>

       
  </div>
</div>

<div class="container">
	
    <div class="section-title">
        <h3> <?php echo file_get_contents("description.txt"); ?> </h3>
    </div>
</div>
</div>
</section>


