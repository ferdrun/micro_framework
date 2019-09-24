<?php
$this->get('noticias', function($arg){
	$tpl = $this->core->loadModule('template');
	$news  = $this->core->loadModule('news');

	$array = array();
	$array['news'] = $news->getNewsList();

	$tpl->render('noticias_lista', $array);
	 
});

$this->post('noticias', function($arg){
echo "Enviou o POST....";
});
	
$this->get('noticias/{id}', function($arg) {
	$tpl = $this->core->loadModule('template');
	$news  = $this->core->loadModule('news');

	$array = array();
	$array['info'] = $news->getNewsInfo($arg['id']);

	$tpl->render('noticias_item', $array);
});


 