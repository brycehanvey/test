<?php

require_once('db.php');
$opts = [
    'http' => [
        'method' => 'GET',
        'header' => [
            'User-Agent: PHP'
        ]
    ]
];
$k=1;
$url="https://api.github.com/search/repositories?q=language:php&page='$k'&per_page=100";

$opts = [
    'http' => [
        'method' => 'GET',
        'header' => [
            'User-Agent: PHP'
        ]
    ]
];

$context = stream_context_create($opts);
#for ($k=1; $k <=10; $k++) { 

$data = file_get_contents("https://api.github.com/search/repositories?q=language:php&page='$k'&per_page=100", false, $context);

if($data){
    $data=json_decode($data,true);
    $data=$data['items'];
  
    for($i=0;$i<count($data);$i++)
    {
		$repository_id=$data[$i]['id'];
		$name=$data[$i]['name'];
        $url=$data[$i]['html_url'];
        $description=$data[$i]['description'];
        $created_at=$data[$i]['created_at'];
        $updated_at=$data[$i]['updated_at'];
        $star=$data[$i]['watchers_count'];

	    print_r($repository_id);
		print_r($name);
        print_r($url);
        print_r($description);
        print_r($created_at);
        print_r($updated_at);
        print_r($star);		

    #$sql=mysqli_query($conn,"SELECT * FROM `test`.`repositories` WHERE `repository_id`='$repository_id'");
        #$num=mysqli_num_rows($sql);
		#$num=mysqli_query($sql);
        #if($num>=0)
		#if($num>count($data));	
        #{
            $query="INSERT INTO `test`.`repositories`(`repository_id`, `repository_name`, `repository_url`, `repository_created_date`, `repository_last_push_date`, `repository_description`, `number_of_stars`) VALUES ('".$repository_id."','".$name."','".$url."','".$created_at."','".$updated_at."','".$description."','".$star."')";
           # if (mysqli_query($conn, $query)) {
            #    echo "New record created successfully";
       #     } else {
              #  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            #}

          require_once('db.php');
				
				#$repo="SELECT * FROM `test`.`repositories`";
				$repo_query=mysqli_query($conn,$query);
				if(mysqli_query($conn, $repo_query)){
        	 echo "New record created successfully";
		}
            //echo '<br>';
        }
        #else{
         #   echo "Project Already Available in Database";
        #}
    #}

}

 mysqli_close($conn);




?>