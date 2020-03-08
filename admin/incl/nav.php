<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="text-align: left" class="navbar-brand navbar-header" href="index.php">Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li class="dropdown">
              <a href="post.php" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-paper-plane"></i> Post <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="adjust" >  <a href="post.php?source="> <i class="fa fa-eye" aria-hidden="true"></i> View Post</a></li>
                <li class="adjust"> <a href="post.php?source=create_post"> <i class="fa fa-edit"></i> Create New Post</a></li>
                <!-- <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li> -->
              </ul>
            </li>

            <li><a href="category.php"><i class="fa fa-list"></i> Categories</a></li>
            <li><a href="tables.html"><i class="fa fa-comments"></i> Comments</a></li>
            <li><a href="forms.html"><i class="fa fa-users"></i> Users</a></li>
            <!-- <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li> -->
            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            
            <br>
            
            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="">
              <a href="/cms/index.php"><i class="fa fa-globe"></i> View Site  </a>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span><b class="caret"></b> </a>
              <ul class="dropdown-menu">
                
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>