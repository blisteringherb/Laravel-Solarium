<?php

return array(
	'default_core' => 'laravel',
    'models' => array(
	    'Fbf\LaravelPages\Page' => array(
		    'active_cores' => array(
			    'laravel' => array(
				    'id' => 'id',
				    'model_id' => 'model_id',
				    'model_name' => 'model_name',
				    'title' => 'heading',
				    'content' => 'content',
				    'search_content' => array(
					    'heading',
					    'page_title',
					    'content',
					    'meta_description',
					    'meta_keywords',
				    ),
				    'status' => 'status',
				    'published_date' => 'published_date',
				    'url' => 'url',
			    ),
		    ),
		    'url' => function($model, $core)
			    {
				    return $model->getUrl();
			    },
	    ),
//	    'Fbf\LaravelBlog\Post' => array(
//		    'active_cores' => array(
//			    'laravel' => array(
//				    'id' => 'id',
//				    'model_id' => 'model_id',
//				    'model_name' => 'model_name',
//				    'title' => 'title',
//				    'content' => 'content',
//				    'search_content' => array(
//					    'heading',
//					    'summary',
//					    'content',
//					    'meta_description',
//					    'meta_keywords',
//				    ),
//				    'status' => 'status',
//				    'published_date' => 'published_date',
//				    'url' => 'url',
//			    ),
//		    ),
//		    'url' => function($model, $core)
//			    {
//				    return $model->getUrl();
//			    },
//	    ),
    ),
    'solr' => array(
        'endpoint' => array(
            'localhost' => array(
                'host' => '127.0.0.1',
                'port' => 8983,
                'path' => '/solr/',
            ),
        ),
    ),
	'results' => array(
		'view' => 'laravel-solarium::results',
		'items_per_page' => 10,
	),
	'uri' => 'search'
);