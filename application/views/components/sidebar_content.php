<div class="sidebar sidebar-dark sidebar-main sidebar-expand">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media align-items-center">
                    <a href="#" class="mr-3 "><!--//d-flex">-->
                        <img src= <?php echo loadVendor("placeholders/placeholder.jpg","images")?> class="rounded-circle"
                            alt="">
                    </a>
                    <div class="media-body">
                        <div class="font-weight-semibold"><?php echo $_SESSION['username']; ?></div>
                        <div class="font-size-xs line-height-sm opacity-50">
                            <?php echo $_SESSION['email']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="/project/" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span href="">Tasks</span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Operations</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="/project/addTask/" class="nav-link">Add Task</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
</div>