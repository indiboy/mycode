<?php
if (!defined('InEmpireCMS')) {
	exit();
}
//位置
$url = "$spacename &gt; $mr[qmname]";
include ("header.temp.php");
?>
<?=$spacegg ?>
<div class="panel">
	<div class="panel-head">
      <h3 class="text-big"><?=$mr['qmname'] ?> <small><a href="../DoInfo/ChangeClass.php?mid=<?=$mid ?>" target="_blank">增加<?=$mr['qmname'] ?></a></small></h3>
   </div>
	<ul class="list-group">
		<?php
	while($r=$empire->fetch($sql))
	{
		$titleurl=sys_ReturnBqTitleLink($r);//链接
	?>
          <li><span class="float-right">(<?=date("Y-m-d H:i:s", $r[newstime]) ?>)</span><a href="<?=$titleurl ?>" target="_blank"><?=$r[title] ?></a></td>
	<?php
	}
	?>
		</ul>
	</div>
	<div class="padding">
    <ul class="pagination pagination-group">
    <?=$returnpage ?>
    </ul>
    </div>
<?php
include ("footer.temp.php");
?>
