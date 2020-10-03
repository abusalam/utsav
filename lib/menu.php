<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
              <li><a href="indexes.php?action=dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
<?php if($_SESSION['cat']==''): ?>
    <?php $checkrecs=$ob->get_rec("application","*","org_name='".$_SESSION['org_club']."' AND ps='".$_SESSION['ps']."'"); ?>
    
            <li><a href="indexes.php?action=organisers"><i class="fa fa-circle-o"></i>Application Submission(Step 1)</a></li>
            <li><a href="indexes.php?action=finalize"><i class="fa fa-circle-o"></i>Application Finalize(Step 2)</a></li>
            <li><a href="indexes.php?action=preview&sendvalue=<?php  echo base64_encode ('id.'.$checkrecs->id.'.val'); ?>" target="_blank"><i class="fa fa-circle-o"></i>Preview & Print</a></li>
            <li><a href="indexes.php?action=pers_preview&sendvalue=<?php  echo base64_encode ('id.'.$checkrecs->id.'.val'); ?>"><i class="fa fa-circle-o"></i>Current Status</a></li>
    
    <?php if($checkrecs->final_per=='Yes'): ?>
    
            <li><a href="indexes.php?action=permission&sendvalue=<?php  echo base64_encode ('id.'.$checkrecs->id.'.val'); ?>" target="_blank"><i class="fa fa-circle-o"></i>Permission Letter</a></li>		
    
    <?php else : ?>	
    
            <li><a href="indexes.php?action=permissionpending"><i class="fa fa-circle-o"></i>Permission Letter</a></li>	
    
    <?php endif ?> 

<?php else : ?>

            <li><a href="indexes.php?action=pendingapp"><i class="fa fa-envelope"></i>Pending Applications</a></li>
            <li><a href="indexes.php?action=approveapp"><i class="fa fa-check-square-o"></i>Approved Applications</a></li>

<?php endif ?> 

            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>