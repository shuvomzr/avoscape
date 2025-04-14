<head>
<style type="text/css">
	.autohide{
		position: fixed;
	    top: 0;
	    right: 0;
	    left: 0;
	    width: 100%;
	    z-index: 1030;
	}
	.scrolled-down{
		transform:translateY(-100%); transition: all 0.3s ease-in-out;
	}
	.scrolled-up{
		transform:translateY(0); transition: all 0.3s ease-in-out;
	}
</style>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		el_autohide = document.querySelector('.autohide');
		
		// add padding-top to bady (if necessary)
		navbar_height = document.querySelector('.navbar').offsetHeight;
		document.body.style.paddingTop = navbar_height + 'px';

		if(el_autohide){
			
			var last_scroll_top = 0;
			window.addEventListener('scroll', function() {
	       		let scroll_top = window.scrollY;
		       if(scroll_top < last_scroll_top) {
		            el_autohide.classList.remove('scrolled-down');
		            el_autohide.classList.add('scrolled-up');
		        }
		        else {
		            el_autohide.classList.remove('scrolled-up');
		            el_autohide.classList.add('scrolled-down');
		        }
		        last_scroll_top = scroll_top;

			}); 
			// window.addEventListener

		}
		// if
		
	}); 
	// DOMContentLoaded  end


</script>

</head>
<body>
<?php global $user;?>
    <nav id="navb" class="autohide navbar navbar-expand-lg navbar-light" style="backgroud:linear-gradient(-135deg, #0CC0DF, #71EF81)">
        <div class="container col-lg-9 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12">
                <a class="navbar-brand" href="?">
                    <img id="imgs" src="assets/images/icon.png" alt="" height="44" style="margin-right:80px;">

                </a>

                <form class="d-flex" id="searchform">
                    <input class="form-control" type="text" id="search" placeholder="Find someone"
                        aria-label="Search" width="300" autocomplete="off">
<div class="text-end rounded-bottom shadow mt-5" style="display:none;position:absolute;z-index:+99;background:linear-gradient(-135deg, #0CC0DF, #71EF81);width:180px;margin-left:15px;" id="search_result" data-bs-auto-close="true">
<button type="button" class="btn-close" aria-label="Close" id="close_search" style="margin-right:90%!important;"></button>
<div id="sra" class="text-start">
<p class="text-center text-muted">Name/Username</p>

</div>
</div>
                </form>

            </div>


            <ul class="navbar-nav ms-auto flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0">

                <li class="nav-item">
                    <a class="nav-link text-dark" href="?"><i class="bi bi-house-door-fill"></i></a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#addpost" href="#"><i class="bi bi-plus-square-fill"></i></a>
                </li>
                
                <li class="nav-item">
                  
                    
                    <?php
if(getUnreadNotificationsCount()>0){
    ?>
 <a class="nav-link text-dark position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-bell-fill"></i>
  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
   <small><?=getUnreadNotificationsCount()?></small>
  </span>
</a>

    <?php
}else{
    ?>
  <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample"><i class="bi bi-bell-fill"></i></a>
    <?php
}
                    ?>
                   

                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-left-text-fill"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
                </span></a>
                </li>


                
                
                <li class="nav-item">
                    <a class="nav-link text-dark"  href="?shortVid"><i class="bi bi-play-btn-fill"></i></a>
                </li>



                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="28" width="28" class="rounded-circle border">
                    </a>

                    <ul class="dropdown-menu position-absolute top-100 end-50" aria-labelledby="navbarDropdown" style="background: linear-gradient(-135deg, #0CC0DF, #71EF81);">
                    <li><a class="dropdown-item" href="?u=<?=$user['username']?>"><i class="bi bi-person"></i> My Profile</a></li>
                    <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?followers"><i class="bi  bi-people"></i> Follow Suggestions</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?active_list"><i class="bi  bi-person"></i> Active Users</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                    </ul>

                </li>

            </ul>


        </div>
    </nav>