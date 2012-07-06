<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('bootstrap-responsive.css'); ?>
        <?php echo Asset::js('jquery-1.7.2.min.js'); ?>
        <?php echo Asset::js('bootstrap.js'); ?>

	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container">

    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>

    <!-- Be sure to leave the brand out there if you want it shown -->
     <?php echo Html::anchor('top', 'Idea Board', array("class"=>"brand")); ?>

    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class="nav-collapse">
    <!-- .nav, .navbar-search, .navbar-form, etc -->
        <ul class="nav">
          <li class="active"><?php echo Html::anchor('top', 'Home'); ?></li>
          <li><?php echo Html::anchor('top/idealist', 'IdeaList'); ?></li>
          <li><a href="#contact">IdeaMans</a></li>
          <li><?php echo Html::anchor('top/ideapost', 'IdeaPost'); ?></li>
        </ul>

          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </div>
    </div>
    </div>
    </div>
    </div>
		<div class="row">
			<div class="span16">
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="span16">
<?php echo $content; ?>
			</div>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
  </div>
</body>
</html>
