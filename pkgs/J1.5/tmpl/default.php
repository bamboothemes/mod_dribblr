<?php 
/**
 *
 *
 * @package   mod_dribbleshots
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
 defined('_JEXEC') or die('Direct Access to this location is not allowed.');
?>
<script>
var playername = "<?php echo $userName; ?>";
var shotcount ="<?php echo $shotCount; ?>";
jQuery.jribbble.getShotsByPlayerId(playername, function (playerShots) {
    var html = [];

    jQuery.each(playerShots.shots, function (i, shot) {
	    if (i === (<?php echo $shotsPerRow; ?>)) {
	    	i = 0;
	    	// new row
	    }
	    
	    if (i === (2*<?php echo $shotsPerRow; ?>)) {
	    	i = 0;
	    	// new row
	    }
	    
	    if (i === (3*<?php echo $shotsPerRow; ?>)) {
	    	i = 0;
	    	// new row
	    }
	    
	    if (i === (4*<?php echo $shotsPerRow; ?>)) {
	    	i = 0;
	    	// new row
	    }
	    
	    
	    
	    if(i=== 0){
	    	html.push('<div class="row-fluid">');
	    }
        html.push('<div class="zen-shot span<?php echo 12/$shotsPerRow; ?>">');
       
        html.push('<a href="' + shot.url + '">');
        html.push('<img src="' + shot.image_teaser_url + '" ');
        html.push('title="' + shot.title + ' by ' + shot.player.name + '" ');
		html.push('alt="' + shot.title + '" ></a></div>');
		
		if(i === <?php echo $shotsPerRow - 1; ?>){
			html.push('</div>');
		}
		
		if(i === <?php echo (2*$shotsPerRow - 1); ?>){
			html.push('</div>');
		}
		
		if(i === <?php echo (3*$shotsPerRow - 1); ?>){
			html.push('</div>');
		}
		
		if(i === <?php echo (4*$shotsPerRow - 1); ?>){
			html.push('</div>');
		}

    });

    jQuery('#dribbleshots').html(html.join(''));
}, {page: 1, per_page: shotcount});
</script>
<div class="zen-dribble <?php echo $moduleclass_sfx; ?>">
<div id="dribtext" >
<p><?php echo $txtAbove; ?></p>
</div>
<div id="dribbleshots">


</div>
</div>