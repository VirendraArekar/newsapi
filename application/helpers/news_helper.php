<?php

define('top_headline',NEWS_API.'/'.NEWS_API_TOP_HEADLINE.'?country='.NEWS_API_COUNTRY.'&apikey='.NEWS_API_TOKEN);

define('all_sources',NEWS_API.'/sources?language='.NEWS_API_LANG.'&country='.NEWS_API_COUNTRY.'&apiKey='.NEWS_API_TOKEN);

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array());
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

function top_headlines(){
	$get_data = callAPI('GET', top_headline, false);
	$response = json_decode($get_data, true);
	if($response){
		if($response['status'] == 'ok'){
		return json_encode($response);
		}
		else{
			$data = array('status' => 'error','message' => 'Feching top headline error');
			return json_encode($data);
		}
	}
}

function news($topic,$pageSize,$page){
	$all_news = NEWS_API.'/everything?q='.$topic.'&pageSize='.$pageSize.'&page='.$page.'&sortBysAvailable=top&apikey='.NEWS_API_TOKEN;
	$get_data = callAPI('GET', $all_news, false);
	$response = json_decode($get_data, true);
	if($response){
		if($response['status'] == 'ok'){
		return json_encode($response);
		}
		else{
			$data = array('status' => 'error','message' => 'Feching all news error');
			return json_encode($data);
		}
	}
}


function news_dubug($topic){
	$all_news = NEWS_API.'/everything?q='.$topic.'&sortBysAvailable=top&apikey='.NEWS_API_TOKEN;
	$get_data = callAPI('GET', $all_news, false);
	$response = json_decode($get_data, true);
	if($response){
		if($response['status'] == 'ok'){
		return json_encode($response);
		}
		else{
			$data = array('status' => 'error','message' => 'Feching all news error');
			return json_encode($data);
		}
	}
}

function news_sources(){
	$get_data = callAPI('GET', all_sources, false);
	$response = json_decode($get_data, true);
	if($response){
		if($response['status'] == 'ok'){
		return json_encode($response);
		}
		else{
			$data = array('status' => 'error','message' => 'Feching sources error');
			return json_encode($data);
		}
	}
}
