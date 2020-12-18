<?php 
// xampp
header('Access-Control-Allow-Origin: *');
if (isset($_GET["id"])) {
	$id =  $_GET["id"];

	$arr = [
			  [
			  	"id" => 1,
			    "value" => "How are you",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",
			  ],
			  [
			  	"id" => 2,
			    "value" => "How are you",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",
			  ],
			  [
			  	"id" => 3,
			    "value" => "How are you",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",
			   
			  ],
			  [
			  	"id" => 4,
			    "value" => "I'm fine",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",
			  ]
			  ,
			  [
			  	"id" => 5,
			    "value" => "I'm ok",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",
			  ],
			  [
			  	"id" => 6,
			    "value" => "How are you",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",			   
			  ],
			  [
			  	"id" => 7,
			    "value" => "I'm fine",
			    "meaning"=> "bạn có khoẻ không",
			    "slug"=> "how-are-you",	   
			  ]
		];
		    

	$keyDelete = null;
	foreach ($arr as $key => $value) {
		// unset($arr[$value['id']])
		if ($value['id'] == $id) {
			$keyDelete = $key;
		}
	}
	unset($arr[$keyDelete]);
    echo $id;
}else {
	$arr = [
		  [
		  	"id" => 1,
		    "value" => "How are you",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		  ],
		  [
		  	"id" => 2,
		    "value" => "How are you",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		  ],
		  [
		  	"id" => 3,
		    "value" => "How are you",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		   
		  ],
		  [
		  	"id" => 4,
		    "value" => "I'm fine",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		  ]
		  ,
		  [
		  	"id" => 5,
		    "value" => "I'm ok",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		  ],
		  [
		  	"id" => 6,
		    "value" => "How are you",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		   
		  ],
		  [
		  	"id" => 7,
		    "value" => "I'm fine",
		    "meaning"=> "bạn có khoẻ không",
		    "slug"=> "how-are-you",
		   
		  ]
		];
	
	echo json_encode($arr);
	}

	// print_r($arr);
?>
