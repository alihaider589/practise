<table border="1">
<?php
?><tr>
<td><?php $paragraph ="My name is Ali Haider and this is web engineering practise and wassup my nigga? :D"; ?></tr>
<td><?php echo strlen($paragraph);?></td>
<td><?php echo Strrev($paragraph);?></td>
<td><?php echo Strrev($paragraph);?></td>
<td><?php echo str_word_count($paragraph);?></td>
<td><?php echo strrpos($paragraph,"Ali");?></td>
<td><?php echo str_replace("Ali Haider","DaffyDuck",$paragraph);?></td>
</tr>


</table>