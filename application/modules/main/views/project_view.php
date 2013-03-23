<div class="tpl_project_top">
    <h2><?=$project->project->title?></h2>
    <p><?=$project->project->description?></p>
</div>

<?foreach($project->images as $image):?>
<div class="twelve column tpl_project">
	<div class="panel tpl_project_box">
	<?if($image->title):?>
		<h4 href="#"><?=$image->title?></h4>
	<?endif?>
	<?if($image->description):?>
		<p><?=$image->description?></p>
	<?endif?>
	<?if($image->name):?>
		<img src="<?=$image->name?>" class="lazy" alt="<?=($image->title)?$image->title:''?>" />
	<?endif?>
	</div>
</div>
<?endforeach?>