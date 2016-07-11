<?php

namespace App\Models;
use App\Models\BaseModel;

class Api extends BaseModel
{
	public function getcity() 
	{
	return $this->curlApiCall("http://192.168.124.53:9000/realestate/v1/cities", 'GET');
	} 

	public function getlocality($locality, $city)
	{
		return $this->curlApiCall("http://192.168.124.53:9000/realestate/v1/locality/search?query=".urlencode($locality). "&cityId=" . $city, 'GET');
	}
	public function fetchLocality ($input)
	{
		return $this->curlApiCall("http://192.168.124.53:7000/getSuggestion", 'POST', $input);
	}
	public function fetchLocalityDetails ($query, $cityId, $limit=20) {
		//$cityId=23;$query='mag';
		return $this->curlApiCall("http://192.168.124.53:9000/realestate/v1/locality/search?query=" . $query . '&cityId=' . $cityId . '&limit=' . $limit , 'GET');
	
	//return $this->curlApiCall("http://192.168.124.53:9000/realestate/v1/locality/search?query=Road&cityId=23&limit=15",'Get');
	}
	public function fetchprojectDetails ($city_id, $category, $search_term)
	{
		return $this->curlApiCall("http://192.168.124.53:9000/realestate/v1/project/find?cityId=".$city_id.'&category='.$category.'&query='.urlencode($search_term),'GET');
	}
}
