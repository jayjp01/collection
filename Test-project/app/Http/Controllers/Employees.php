<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\BaseModel;
use App\Models\Api;
use Request;

class Employees extends Controller
{
	private $apiModel;
	public function __construct()
	{
		header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		header("Pragma: no-cache");
		$this->middleware('guest');
		$this->apiModel = new Api();
	}

     public function index(){
    	return view('welcome');
    }
    public function postAdTreeJson()
	{
		return file_get_contents(base_path() . '/public/js/constant.js');
	}
	
	public function cities()
	{
		$result = $this->apiModel->getcity();
		$result = array_key_exists('response', $result) ?
				json_decode($result['response'], TRUE) : array();
			if (is_array($result)) {
				//$data = $result['topCities'];
				//$data1 = $result['allCities'];
				 $allcities = array_merge($result['topCities'],$result['allCities']);
			} 
			return $allcities;
	}
	public function newLocalityDetail() {
		$localityDetail = Request::all();

		if (array_key_exists('query', $localityDetail) && array_key_exists('cityId', $localityDetail) &&
			$localityDetail['query'] && $localityDetail['cityId']) {

			$limit = array_key_exists('limit', $localityDetail) ? $localityDetail['limit'] : '';

			if ($limit) {
				$response = $this->apiModel->fetchLocalityDetails($localityDetail['query'], $localityDetail['cityId'], $limit);
			} else {
				$response = $this->apiModel->fetchLocalityDetails($localityDetail['query'], $localityDetail['cityId']);
			}

			$localityResponse = json_decode($response['response'], TRUE);

			if (array_key_exists('data', $localityResponse) && $localityResponse['data']) {
				return json_encode($localityResponse['data']);
			}
		}

		return json_encode(array());
	}
	public function getProjectDetails()
	{
		$input = Request::all();
		$categoryIdNameMapping = array(1=>'Residential',2=>'Commercial',3=>'Agricultural');

		$category = preg_replace('/[^a-zA-Z0-9]/', '', $input['rca']);
		$category = empty($category) ? "" : $category;

		$search_term = preg_replace('/[^a-zA-Z0-9 ]/', '', $input['st']);
		$search_term = empty($search_term) ? "" : $search_term;

		$city_id = preg_replace('/[^a-zA-Z0-9]/', '', $input['ci']);
		$city_id = empty($city_id) ? 23 : $city_id;

		//$user_snippet_url="http://192.168.124.53:9000/realestate/v1/project/find?cityId=".$city_id.'&category='.$categoryIdNameMapping[$category].'&query='.urlencode($search_term);
		$response = $this->apiModel->fetchprojectDetails($city_id, $categoryIdNameMapping[$category], $search_term );
		/*This will take anything and make sure that it only contains letters, numbers.*/
		
		return $response;
	}

}
