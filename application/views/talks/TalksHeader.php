<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>

<link href="<?=$css_path;?>/talks.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=$js_path;?>/talks.js"></script>

</head>

<body>
<div id="wrapper">
	<div id="header">
		<div class="header_logo">
			<div class="wrapper_guide">
				<a href="<?=$main_path;?>"><img src="<?=$img_path;?>/logo.png" width="265" alt="logo" /></a>
			</div>
   	 	</div>
        <div class="header_menu">
   	 		<div class="wrapper_guide">
            	<ul class="topmenu">
                		<li class="topmenu_li"><img src="<?=$img_path;?>/talks/topmenu0.png" /></li>
   					<?php foreach($menu as $item):?>
                    	<li class="topmenu_li"><a href="#"><img src="<?php echo $item;?>" onmouseover="imageOver(this);" onmouseout="imageOut(this);" /></a></li>
               		<?php endforeach;?>
                </ul>
   	 		</div>
       	</div>        
	</div>
</div>
<br /><br />
This is the TalksHeader.php<br /><br />