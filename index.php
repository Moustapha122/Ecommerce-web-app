
    <!DOCTYPE html>

    <?php 
    include ("functions/function.php");


?>
<html lang="en">
<head>
    
   
    <title>Ma Boutique En Ligne</title>
    <link rel="stylesheet" href="styles/style.css" media="all"/>
        
</head>


<body>
    <!--debut main container -->
    <div class="main_wrapper">
        <!--debut de header-->
        <div lass="header_wrapper">

            <img id="logo" src="imgs/im.jpg"/>
            <img id="banner" src="imgs/im.jpg"/>
            </div>
            <!--fin de header-->
            <!--debut de bar de navigation-->
            <div class="menubar">
               <ul id="menu">
                   <li><a href="#">Home</a><li>
                    <li><a href="#">All Products</a><li>
                    <li><a href="#">My Account</a><li>
                    <li><a href="#">Sign Up</a><li>
                    <li><a href="#">Shopping Cart</a><li>
                    <li><a href="#">Contact Us</a><li>



               </ul>

               <div id="form">
                   <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="search a product"/>
                    <input type="submit" name="search" value="search"/>

                </form>


               </div>


            </div>
             <!--fin de bar de navigation-->

              <!--debut wrapper -->

        <div class="content_wrapper">

            
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            
            <ul id="cats">
               <?php getCats();?>
            </ul>
            <div id="sidebar_title">Brands</div>
            
            <ul id="cats">
               <?php getBands();?>
            </ul>
           

            

            </div>

        <div id="content_area">this is content area</div>
    </div>
      <!--fin de wrapper -->


        <div id="footer">

        <h2 style="text-align:center;padding-top:30px">	&copy; 2021 By MOUSTAPHA MAHAMAT </h2>

        </div>
       
</footer>
        

    </div>
</body>
</html>


