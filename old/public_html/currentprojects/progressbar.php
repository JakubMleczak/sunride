<h2 class="" style="font-size:40px;"><span><b><?php echo $activity ?></b></span></h2>

<!--
<div class="progress" style="height:2%">
    <progress id="progress" value="<?php echo $value ?>" min="0" max="100" style="background-color:red;width:100%"><p><?php echo $value ?>%</p></progress>
</div>
-->
<div class="progress" style="height:1.5%;width:<?php echo $value ?>%;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="background-color:#36abc2;"  >
        <span style="font-size:80%;"><b><?php echo $value ?>%</b></span>
    </div>
    
</div>
