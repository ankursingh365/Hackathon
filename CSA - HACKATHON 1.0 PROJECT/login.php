<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    
</head>
<link rel="stylesheet" href="style.css">
<body>

<!-------------------------HEADER-------------------->

<header class="text-gray-600 body-font" style="background-color:#F0F7D4;">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      
      </svg>
      <span class="ml-3 text-xl">Manorama Dabral Kalyan Samiti</span>
    </a>
    <a href="index.html"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">HOME<a>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>

<!---------------------BODY-------------------------->
    <div class="backgroud">
    <div class="content">
<h1>LOGIN </h1>
<form action="field.php" method="post">
<div class="feild">
   <span class=" fa fa-user"></span>
   <input type="text" placeholder="username" name="username" required>
</div>
<div class="feild space">
    <span class=" fa fa-lock"></span>
    <input type="password" placeholder="password" name="password" required>
    <span class="show"></span>
 </div>

 <div class="feild">
     <input type="submit"  required>
 </div>
</form>

</div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>