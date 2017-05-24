<?php
//Import the SDK 
require_once __DIR__.'/HEapi/sdk/apiConnector.php';

//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => '4e282a8f8bc82dcbceba414a1f58136d987a21bd', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);

//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['file']=$programFile;			//(REQUIRED WHEN YOU ARE USING A SOURCE FILE) Give the complete address to the file
$config['input']='testInput.cpp';     	//(OPTIONAL) Properly Formatted Input against which you have to test your source code
$config['language']='CPP11';   //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY


//Sending request to the API to compile and run and record JSON responses
$response = compile_with_file($hackerearth,$config); // Use this $response the way you want , it consists data in PHP Array
//Printing the response
echo"<pre>".print_r($response,1)."</pre>";
?>