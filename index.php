<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>HIV project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.2/vue-router.min.js"></script>
</head>


<body>
<main>
<div id="app" class="container-fluid">
<!-- router-view 是一个全局组件 可以直接使用 -->



<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.html#/home">

   <!--  HIV&AIDS -->
  </a>

  <div id="routerNav">
<router-link to='/home'  tag='button' class="btn btn-light">Home</router-link>
<router-link to='../sign-up.php' tag='button' class="btn btn-light">Sign Up</router-link>
<router-link to='/video' tag='button' class="btn btn-light">Video</router-link>
<router-link to='/about' tag='button' class="btn btn-light">about</router-link>
<router-link to='/login' tag='button' class="btn btn-light">login</router-link>
	
</div>
</nav>




<transition name="fade" mode="out-in">
	<router-view></router-view>
</transition>
	

	
	<div id="footerArea">

		<div class="container" id="footerInfo">
        <div class="row">

  	 <div class="col">
     
		<p class="copy">
        &copy; 2020 HIV&AIDS website, Inc
        </p>
    </div>

    <div class="col">
          <ul id="socialIcon" class="float-right">
      Follow us on social media.
      put icons here
			<li>  </li>
			<li>  </li>
		  <li>  </li>
			</ul>
    </div>

       </div></div>

		
		
		
	</div>	
	
</div>
	

</main>


<script type="text/javascript" src="js/main.js"></script>
</body>
</html>