<?php
$TotalUser = App\User::count();
$TotaPackage = App\Package::count();

?>

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Oggy!!<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="<?php echo url('logout');?>"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo url('admin');?>" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>









                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Package </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
<li><a href="<?php echo url('admin/viewpackage');?>">All package <span class="badge badge-primary"><?php echo $TotaPackage;?></span> </a></li>
<li><a href="<?php echo url('admin/addpackage');?>">Add New package</a></li>
                                </ul>
                            </li>






                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Users </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
    <li><a href="<?php echo url('admin/viewuser');?>">All Users <span class="badge badge-primary"><?php echo $TotalUser;?></span> </a></li>
    <li><a href="<?php echo url('admin/useractivity');?>">User Activity</a></li>
                                </ul>
                            </li>
                            




                            


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
