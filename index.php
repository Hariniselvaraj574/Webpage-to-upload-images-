<!DOCTYPE html>
<html>
<head>

	<title>Image Upload Using PHP</title>
       
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction:column;
			min-height: 100vh;
			background-image:url("Untitled_design.v2.png");
	              
		}
             
		button {
  position: fixed;
  top: 10px;
  right: 10px;
  background: #FFFFFF;
  padding: 10px 10px;
  color: #fff;
  border-radius: 20px;
  margin-right: 10px;
  border: none;
}
       button:hover{
	opacity: .7;
       }
       input{
       	width:200px;
       	height:20px;
       	padding::30px 30px;
       	margin:8px 0;
       	box-sizing:border-box;  
       	font-style:italic;     
            }
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input  type="file" 
                  name="my_image"> 

           <input type="submit" 
                  name="submit"
                  value="Upload">
       <br>
            <form action="index1.php"
            method=post>
     <p><button type="submit"><a style="font-size:20px;" href="index1.php"/a>Login</button></p>


     </form>
</body>
</html>