<div class="tpl_project_top">
    <h2><?=$cat->title?></h2>
    <p><?=$cat->description?></p>
</div>
<div class="row">
	<?foreach($projects as $project):?>
	<div class="three mobile-two column left">
		<h4 href="#"><?=$project->title?></h4>
		<a href="<?=base_url($cat->slug.'/'.url_title($project->title))?>" class="th"><img src="<?=$project->thumb?>" alt="<?=$project->title?>" /></a>
	</div>
	<?endforeach?>
</div>