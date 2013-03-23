<div class="row">
	<div class="five columns">
		<h1 class="logo">Joseph Luzquinos</h1>
	</div>
	<div class="seven columns">
		<ul class="nav-bar right">
	    <?foreach($cats as $cat):?>
	      <li class="<?=($this->uri->segment(1) == $cat->slug)?'active':''?>"><a href="<?=base_url($cat->slug)?>"><?=$cat->link?></a></li>
	    <?endforeach?>
	      <li class="<?=($this->uri->segment(1) == 'contact')?'active':''?>"><a href="<?=base_url('contact')?>">Contact</a></li>
	    </ul>
	</div>
</div>