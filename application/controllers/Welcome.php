<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $original_filter_arr = ['city', 'bodyType', 'brand', 'model', 'color', 'fuelType', 'transmissionType'];

	private function getList($type){
		// type = city, body_type, brand, model, color, fuel_type, transmission
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/".$type."/list");
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
		$result = curl_exec($ch);
		
		$r = json_decode($result);

		$result_array = [];
		if(isset($r->statusCode) && $r->statusCode == '200'){
			foreach ($r->data as $key => $value) {
				$value = (array)($value);
				
				if($value['status']){
					$result_array[] = 
						[
							'id' => $value['id'],
							'name' => $value['name']
						];
				}
			}
		}		
		curl_close($ch);
		return $result_array;
	}

	private function getCarImageList($type, $car_id){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/".$type."/list/".$car_id);
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
		$result = curl_exec($ch);
		
		$r = json_decode($result);

		$result_array = [];
		if(isset($r->statusCode) && $r->statusCode == '200'){
			foreach ($r->data as $key => $value) {
				$value = (array)($value);
				
				if($value['status']){
					$result_array[] = 
						[
							'id' => $value['id'],
							'image' => $value['image'],
							'type' => strtolower($value['lookupCarImageView']->tag)
						];
				}
			}
		}		
		curl_close($ch);
		return $result_array;
	}

	private function get_compare_car_data($query_params){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/car/compare?".$query_params);
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
		$result = curl_exec($ch);
		
		$r = json_decode($result);

		curl_close($ch);
		return $r;
	}
	
	public function index(){ //home page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('home');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/city');
		$this->load->view('customjs/home_js');
	}

	public function shop(){
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('shop_0');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/city');
	}

	public function shop_next(){	//shop page view
		$this->destroy_filter_session();
		$data_header = [
			'city' => $this->getCityList(),
		];

		// $data = [
		// 	'body_type' => $this->getBodyType(),
		// 	'brand'=> $this->getBrandList(),
		// 	'model' => $this->getModelList(),
		// 	'fueltype' => $this->getFuelTypeList(),
		// 	'transmissiontype' => $this->getTransmissionTypeList(),
		// 	'color' => $this->getColorList()
		// ];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data_header);
		$this->load->view('shop');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/city');
	}

	public function finance(){ //finance page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('finance');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/finance_js');
	}

	public function autoteilee(){
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('autoteilee');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
	}

	public function article(){ //article page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('article');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
	}

	public function carvenience(){ //carvenience page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('carvenience');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/carv_rto_js');
	}

	public function rto(){ //rto page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('rto');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/carv_rto_js');
	}

	public function sell(){ //sell form page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('sell');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/sell_js');
	}

	public function insurance(){ //sell form page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('renew');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/insurance_js');
	}
	
	public function download(){ //sell form page view
		$data = [
			'city' => $this->getCityList()
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('download');
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
	}

	public function show_car_list($filter_cars = []){
		if($filter_cars != []){
			//this if block works when filter option works for car filteration
			$cars = $this->getCarList($this->input->get('page'),$filter_cars);
		}else{ 
			//normal fetch car lists
			$cars = $this->getCarList($this->input->get('page'));
		}
		
        if(isset($cars) && !empty($cars)){
            $i=0;
            foreach($cars as $key => $value){
            	if(isset($value['pagination'])){
            		$this->session->set_userdata('pagination', $value['pagination']);
            		echo "<script>document.getElementById(\"select_matches\").innerHTML=".$value['pagination']->totalElements."</script>";
            		continue;
            	}
            	$added_in_wishlist = ($this->session->has_userdata('wishlist') && in_array($value['id'], $this->session->userdata('wishlist') ))?true:false;
                $i++;
                if($i % 5 == 0){
		            echo '
			            <div class="col-lg-3 col-md-6">
			                <div class="prodthmbcon">
			                    <img src="'.base_url().'assets/images/inrico.png" alt="">
			                    <h4>See what you can afford</h4>
			                    <p>Get pre-approved to find cars that fit your budget</p>
			                    <a href="#" class="btn1outline">GET PRE-APPROVED</a>
			                </div>
			            </div>';         
		            }
		            
	            echo '
		            <div class="col-lg-3 col-md-6">
		                <div class="prodthmb">
		                    <div class="prodthmbimgwrp">
		                        <a href="'.base_url().'details/'.$value['id'].'" class="prodthmbimg d-block" style="background-image:url('.$value['image'].');"></a>
		                        <a id="btndot_'.$value['id'].'" class="btndot" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg fill="#6984b4" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="proddrop">
                                    <li class="compare">
                                        <input type="checkbox" class="comparebtn_'.$value['id'].'" onclick="add_compare(\''.$value['id'].'\',\''.$value['image'].'\')">
                                    <svg width="21" height="15" viewBox="0 0 21 15" xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true"><g id="Getting-Into-It-Three-Dots" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Search-Results-Desktop---Compare-ON_none" transform="translate(-575 -480)" fill="#053361"><g id="comparetoggles" transform="translate(562 467)"><g id="comparetoggle" transform="translate(3)"><g id="comparegreytry2" transform="translate(10 13)"><path id="Fill-1" d="M7.647 9.376H0v2.25h7.647V15L12 10.501 7.647 6z"></path><path id="Fill-2" d="M13.353 0L9 4.501 13.353 9V5.626H21v-2.25h-7.647z"></path></g></g></g></g></g></svg> Compare
                                    </li>
                                    <li class="share"> 
                                        <button type="button" class="shbtn_'.$value['id'].'" onclick="share_car(\''.base_url().'details/'.$value['id'].'\',\''.$value['id'].'\')">
                                            <svg height="20" width="20" fill="#e74141" class="share-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M0 0h24v24H0z" fill="none"></path><path class="icon" d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"></path></svg> Share</button></li>
                                    <li class="features">
                                        <button type="button" onclick="show_featuers(\''.$value['id'].'\')">
                                            <svg height="20" width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true"><path d="M12.613 3.34a.996.996 0 00-.946-.673H4.333c-.44 0-.806.28-.946.673L2 7.333v5.334c0 .366.3.666.667.666h.666c.367 0 .667-.3.667-.666V12h8v.667c0 .366.3.666.667.666h.666c.367 0 .667-.3.667-.666V7.333L12.613 3.34zM4.333 10c-.553 0-1-.447-1-1 0-.553.447-1 1-1 .554 0 1 .447 1 1 0 .553-.446 1-1 1zm7.334 0c-.554 0-1-.447-1-1 0-.553.446-1 1-1 .553 0 1 .447 1 1 0 .553-.447 1-1 1zM3.333 6.667l1-3h7.334l1 3H3.333z" id="path-1"></path></svg>  Features & Specs</button></li>                                
                                </ul>
                            </div>
                            <button class="wishbtn" type="button" onclick="add_to_wishlist('.$value['id'].')">';
                            if($added_in_wishlist){
                            echo'
                                <svg id="wishlist_'.$value['id'].'" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 178.243 145.154">
								  <g id="heart-svgrepo-com" transform="translate(1.121 -49.881)">
								    <path id="Path_53_'.$value['id'].'" class="love_fill_red" data-name="Path 53" d="M144.809,53.209a45.367,45.367,0,0,0-56.79,28.407A45.241,45.241,0,0,0,2.228,110.37c7.417,22.746,76.2,83.665,85,83.665s79.116-60.845,86.533-83.665A45.292,45.292,0,0,0,144.809,53.209Z" fill="#fff" stroke="#ff0606" stroke-width="10" />
								  </g>
								</svg>';
							}else{
								echo '
                                <svg id="wishlist_'.$value['id'].'" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 178.243 145.154">
								  <g id="heart-svgrepo-com" transform="translate(1.121 -49.881)">
								    <path id="Path_53_'.$value['id'].'" data-name="Path 53" d="M144.809,53.209a45.367,45.367,0,0,0-56.79,28.407A45.241,45.241,0,0,0,2.228,110.37c7.417,22.746,76.2,83.665,85,83.665s79.116-60.845,86.533-83.665A45.292,45.292,0,0,0,144.809,53.209Z" fill="#fff" stroke="#ff0606" stroke-width="10"/>
								  </g>
								</svg>';
							}
							echo'
                            </button>
		                    </div>
		                    <div class="prodcaption">
		                        <a href="'.base_url().'details/'.$value['id'].'"><h3>'.$value['title'].'</h3></a>
		                        <div class="prodcat">'.$value['fueltype'].'  |  '.$value['color'].'</div>
		                        <div class="prodthmbprc">&#8377; '.$value['price'].'</div>
		                        <small class="shipinfo d-block">Free Shipping from Car2Day</small>
		                    </div>
		                </div>
		            </div>';
            }
            echo '<nav aria-label="Page navigation example" style="width:100%">
			  <ul class="pagination justify-content-center">';
			  for($i = 1; $i <= $this->session->userdata('pagination')->totalPages; $i++){
			  	if($i == ($this->input->get('page') + 1)) echo '<li class="page-item active"><span class="page-link" onclick="get_all_cars(\''.($i-1).'\')">'.$i.'</span></li>';		    
			  	else	    
			  		echo '<li class="page-item"><span class="page-link" onclick="get_all_cars(\''.($i-1).'\')">'.$i.'</span></li>';		    
			}
			    echo '
			  </ul>
			</nav>';

        }else{
        	echo "<script>document.getElementById(\"select_matches\").innerHTML=0</script>";
        	echo "<center><h3>No Cars Found</h3></center>";
        }        
	}

	public function getCarList($page_no = 0, $filter_cars = []){ //get all car lists

		//Start Adding City as filter - This section always add city if city choose by any user //
		if($this->session->has_userdata('city') && $this->session->userdata('city') != "Select City"){
			$city = $this->session->userdata('city');

			if($filter_cars != []){
				$filter_cars = json_decode($filter_cars);
				
				$city_data = ["filterKey" => "city.name", "operation" => "cn", "value" => $city];

				array_push($filter_cars->searchCriteriaList, $city_data);
				$filter_cars = json_encode($filter_cars);
			}else{
				$searchCriteriaList[] = [
					"filterKey" => "city.name",
					"operation" => "cn",
					"value" => $city
				];
				$final_array = [
					"dataOption" => "all",
					"searchCriteriaList" => $searchCriteriaList
				];
				$filter_cars = json_encode($final_array);
			}
		}

		//End Adding City as filter - //

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/car/all?pageSize=10&pageNo=".$page_no."&sortBy=id&sortDir=asc");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json'
			)
		);

		if($filter_cars != []){ 
			//this if block works when filter option works for car filteration
			curl_setopt($ch, CURLOPT_POSTFIELDS, $filter_cars);
		}

		// print_r($filter_cars);

		$result = curl_exec($ch);
		
		$r = json_decode($result);

		$result_array = [];
		if($r->statusCode == '200'){
			foreach ($r->data->cars as $key => $value) {
				$value = (array)($value);
				
				// id, title, image, price

				$result_array[] = 
					[
						'id'=>$value['id'],
						'title' => $value['title'],
						'image' => $value['variant']->carImage,
						'price' => $value['price'],
						'fueltype' => $value['fuelType']->name,
						'color' => $value['color']->name					
					];
			}
			array_push($result_array, ['pagination' => $r->data->pagination]);
		}
		curl_close($ch);
		return $result_array;
	}

	public function getCarDetails($car_id){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/car/find/".$car_id);
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json'
			)
		);

		$result = curl_exec($ch);
		
		$r = json_decode($result);

		$result_array = [];
		if($r->statusCode == '200'){
			$value = $r->data->car;
			$value = (array)($value);

			$result_array[] = 
				[
					'id' => $value['id'],
					'title' => $value['title'],
					'carAvailableAt' => $value['carAvailableAt'],
					'vehicleNo' => $value['vehicleNo'],
					'kilometers' => $value['kilometers'],
					'year' => $value['year'],
					'noofowner' => $value['noofowner'],
					'image' => $value['variant']->carImage,
					'engine' => $value['engine'],
					'seat' => $value['seat'],
					'mileage' => $value['mileage'],
					'warranty' => $value['warranty'],
					'description' => $value['description'],
					'price' => $value['price'],
					'rcValidity' => $value['rcValidity'],
					'insuranceValidity' => $value['insuranceValidity'],
					'isCertified' => $value['isCertified'],
					'certifiedRefNo' => $value['certifiedRefNo'],
					'isVerified' => $value['isVerified'],
					'verifiedRefNo' => $value['verifiedRefNo'],
					'status' => $value['status'],
					'variant' => $value['variant'],
					'city' => $value['city'],
					'lookupCarStatus' => $value['lookupCarStatus'],
					'lookupInsuranceType' => $value['lookupInsuranceType'],
					'bodyType' => $value['bodyType'],
					'brand' => $value['brand'],
					'categoryMap' => $value['categoryMap'],
					'fuelType' => $value['fuelType'],
					'model' => $value['model'],
					'color' => $value['color'],
					'transmissionType' => $value['transmissionType']
				];
		}
		curl_close($ch);
		return $result_array;
	}

	public function getCarDetails_forlist_in_homepage($car_id){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/car/find/".$car_id);
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json'
			)
		);

		$result = curl_exec($ch);
		
		$r = json_decode($result);

		$result_array;
		if($r->statusCode == '200'){
			$value = $r->data->car;
			$value = (array)($value);

			$result_array = 
				[
					'id' => $value['id'],
					'title' => $value['title'],
					'kilometers' => $value['kilometers'],
					'year' => $value['year'],
					'image' => $value['variant']->carImage,
					'price' => $value['price'],
					'bodyType' => $value['bodyType']->name,
					'brand' => $value['brand']->name,
					'fuelType' => $value['fuelType']->name,
					'model' => $value['model']->name,
					'color' => $value['color']->name,
				];
		}
		curl_close($ch);
		return $result_array;
	}

	public function getCityList(){
		return $this->getList('city');
	}

	private function getBodyType(){		
		return $this->getList('bodytype');
	}

	public function get_bodytype(){
		$body_type = $this->getBodyType();
		if(!empty($body_type)){
            foreach ($body_type as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='bodyType@".$value['name']."' value='".$value['id']."' 
                onclick='filter_cars(\"bodyType@".$value['name']."\")'>
                <label class='cursor-pointer pad-left-20' for='bodyType@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	private function getBrandList(){		
		return $this->getList('brand');
	}

	public function get_brand(){
		$brand = $this->getBrandList();
		if(!empty($brand)){
            foreach ($brand as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='brand@".$value['name']."' value='".$value['id']."'
                onclick='filter_cars(\"brand@".$value['name']."\")' ".(($this->session->has_userdata('brand') && $this->session->userdata('brand') == $value['name'] )?'checked':'').">
                <label class='cursor-pointer pad-left-20' for='brand@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	private function getModelList(){		
		return $this->getList('model');
	}

	public function get_model(){
		$model = $this->getModelList();
		if(!empty($model)){
            foreach ($model as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='model@".$value['name']."' value='".$value['id']."'
                onclick='filter_cars(\"model@".$value['name']."\")'>
                <label class='cursor-pointer pad-left-20' for='model@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	private function getFuelTypeList(){		
		return $this->getList('fueltype');
	}

	public function get_fueltype(){
		$body_type = $this->getFuelTypeList();
		if(!empty($body_type)){
            foreach ($body_type as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='fuelType@".$value['name']."' value='".$value['id']."' 
                onclick='filter_cars(\"fuelType@".$value['name']."\")'>
                <label class='cursor-pointer pad-left-20' for='fuelType@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	private function getTransmissionTypeList(){		
		return $this->getList('transmissiontype');
	}

	public function get_transmissiontype(){
		$transmissiontype = $this->getTransmissionTypeList();
		if(!empty($transmissiontype)){
            foreach ($transmissiontype as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='transmissionType@".$value['name']."' value='".$value['id']."'
                onclick='filter_cars(\"transmissionType@".$value['name']."\")'>
                <label class='cursor-pointer pad-left-20' for='transmissionType@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	private function getColorList(){		
		return $this->getList('color');
	}

	public function get_color(){
		$color = $this->getColorList();
		if(!empty($color)){
            foreach ($color as $key => $value) {
                echo "<div>
                <input class='cursor-pointer' type='checkbox' id='color@".$value['name']."' value='".$value['id']."'
                onclick='filter_cars(\"color@".$value['name']."\")'>
                <label class='cursor-pointer pad-left-20' for='color@".$value['name']."'>".$value['name']."</label></div>";
            }
        }
	}

	public function filter_car(){	 //filter_car	
		$filter = $this->input->get('filter_name');

		$arr = explode("@", $filter);	//explode filter key and value

		if($arr[0] == 'price'){
			$this->filter_price($arr[1]);
		}else{		
			$session_array = ($this->session->has_userdata('session_array'))?$this->session->userdata('session_array'):[]; 
			
			if(!empty($session_array)){
				if(array_key_exists($arr[0], $session_array)){
					if( !in_array( $arr[1], $session_array[$arr[0]]) )
						array_push($session_array[$arr[0]], $arr[1]);
				}else{
					$session_array[$arr[0]] = [ $arr[1] ];
				}
			}else{
				$session_array = [$arr[0] => [ $arr[1]] ];
			}

			$this->session->unset_userdata('session_array');
			$this->session->set_userdata('session_array', $session_array);

			$searchCriteriaList = [];
			$original_filter_arr = $this->original_filter_arr;

			foreach($session_array as $key => $value){
				$filter_type = "";	

				if(in_array($key, $original_filter_arr)){
					$filter_type = $key;				

					foreach($value as $k => $v){
						$searchCriteriaList[] = [
							"filterKey" => $filter_type.".name",
							"operation" => "cn",
							"value" => $v
						];
					}
				}
			}
			$final_array = [
				"dataOption" => "all",
				"searchCriteriaList" => $searchCriteriaList
			];

			//send JSON encoded data to show_car_list() for fetching and showing car list in website
			$this->show_car_list(json_encode($final_array));
		}
	}

	public function unfilter_car(){	 //unfilter_car	
		$filter = $this->input->get('filter_name');

		$arr = explode("@", $filter);	//explode filter key and value
		
		$session_array = ($this->session->has_userdata('session_array'))?$this->session->userdata('session_array'):[]; 
		
		if(!empty($session_array)){
			if(array_key_exists($arr[0], $session_array)){
				if( in_array( $arr[1], $session_array[$arr[0]]) ){
					$key = array_search($arr[1] , $session_array[$arr[0]]);
					unset($session_array[$arr[0]][$key]);
				}
			}
		}

		$this->session->unset_userdata('session_array');
		$this->session->set_userdata('session_array', $session_array);

		$searchCriteriaList = [];
		$original_filter_arr = $this->original_filter_arr;

		foreach($session_array as $key => $value){
			$filter_type = "";	

			if(in_array($key, $original_filter_arr)){
				$filter_type = $key;				

				foreach($value as $k => $v){
					$searchCriteriaList[] = [
						"filterKey" => $filter_type.".name",
						"operation" => "cn",
						"value" => $v
					];
				}
			}
		}
		$final_array = [
			"dataOption" => "all",
			"searchCriteriaList" => $searchCriteriaList
		];
		// print_r($session_array);
		//send JSON encoded data to show_car_list() for fetching and showing car list in website
		$this->show_car_list(json_encode($final_array));		
	}

	public function car_details($car_id){ //car details details view page
		$recently_viewed = [];

		$recently_viewed = ( $this->session->has_userdata('recently_viewed') ) ? $this->session->userdata('recently_viewed') : [];

		if(!empty($recently_viewed)){
			$key = array_search($car_id, $recently_viewed);
			if($key === FALSE){
		        //Not Found
		        array_push($recently_viewed, $car_id);
		    }else{
		        //$key contains the index you want
		        
		    }
		}else{
			array_push($recently_viewed, $car_id);
		}
		$this->session->set_userdata('recently_viewed', $recently_viewed);

		$data = [
			'city' => $this->getCityList()
		];

		$car_details = [
			'car_details' => $this->getCarDetails($car_id),
		];

		$this->load->view('inc/header_links');
		$this->load->view('inc/header', $data);
		$this->load->view('car-details', $car_details);
		$this->load->view('inc/footer');
		$this->load->view('inc/footer_links');
		$this->load->view('customjs/city');
		$this->load->view('customjs/car-details_js');
	}

	public function filter_price($price){
		$prices = explode(' ', $price);

		$searchCriteriaList = [];

		$number_of_price = count($prices);

		foreach ($prices as $key => $price){
			if($number_of_price == 1){
				$searchCriteriaList[] = [
					"filterKey" => "price",
					"operation" => "le",
					"value" => $price
				];
			}else if($number_of_price == 2){
				if($key == 0){
					$searchCriteriaList[] = [
						"filterKey" => "price",
						"operation" => "gt",
						"value" => $price
					];
				}
				if ($key == 1) {
					$searchCriteriaList[] = [
						"filterKey" => "price",
						"operation" => "le",
						"value" => $price
					];
				}
			}
		}

		
		$final_array = [
			"dataOption" => "all",
			"searchCriteriaList" =>  $searchCriteriaList
		];	
		// echo "<pre>";
		// print_r($final_array);	
		// echo "</pre>";
		$this->show_car_list(json_encode($final_array));
	}

	public function destroy_filter_session(){
		$this->session->unset_userdata('session_array');
	}

	public function destroy_all_session(){
		$this->session->sess_destroy();
	}

	public function add_city_in_session(){
		$this->session->set_userdata('city', $this->input->get('city'));
	}

	public function add_wishlist_in_session(){

		$car_id = $this->input->get('id');
		$data = [];
		$data = ( $this->session->has_userdata('wishlist') ) ? $this->session->userdata('wishlist') : [];

		if(!empty($data)){
			$key = array_search($car_id, $data);
			if($key === FALSE){
		        //Not Found
		        array_push($data, $car_id);
		    }else{
		        //$key contains the index you want
		        unset($data[$key]);
		    }
		}else{
			array_push($data, $car_id);
		}
		
		$this->session->set_userdata('wishlist', $data);
	}

	public function fetch_car_images(){
		$car_id = $this->input->get('car_id');
		$image_data = $this->getCarImageList('carimage', $car_id);
		echo json_encode($image_data);
	}

	public function get_car_count_session_data(){
		$pagination = ($this->session->has_userdata('pagination'))?$this->session->userdata('pagination'):[];
		echo json_encode($pagination);
	}

	public function get_recently_viewed(){
		$data = ($this->session->has_userdata('recently_viewed'))?$this->session->userdata('recently_viewed'):[];
		$car_data = [];
		if(!empty($data)){
			foreach($data as $key => $value){
				array_push($car_data, $this->getCarDetails_forlist_in_homepage($value));
			}
		}
		echo json_encode($car_data);
	}

	public function get_wishlisted_cars(){
		$data = ($this->session->has_userdata('wishlist'))?$this->session->userdata('wishlist'):[];
		$car_data = [];
		if(!empty($data)){
			foreach($data as $key => $value){
				array_push($car_data, $this->getCarDetails_forlist_in_homepage($value));
			}
		}
		echo json_encode($car_data);
	}

	public function compare_cars(){
		$cars_to_compare_ids = $_GET['cars'];	
		$query_params = "";
		$cars_to_compare_ids = explode(",",$cars_to_compare_ids);
		foreach($cars_to_compare_ids as $key => $value){
			$query_params .= "car".($key+1)."=".$value."&";
		}
		
		$data = [
			'compare_data' => $this->get_compare_car_data($query_params)
		];

		$this->load->view('inc/header_links');
		$this->load->view('compare-details', $data);
		$this->load->view('inc/footer_links');
		$this->load->view('inc/compare_links');
	}

	public function get_first_ten_cars(){
		$cars = $this->getCarList();
		echo json_encode($cars);
	}

	public function get_car_city_wise(){
		$cars = $this->getCarList();
		foreach($cars as $key => $value){
			if (!array_key_exists("pagination",$value)){
				echo '<div class="productslideinr">
	                    <div class="prodthmb">
	                        <div class="prodthmbimgwrp">
	                            <a href="'.base_url().'details/'.$value['id'].'" class="prodthmbimg d-block">
	                                <img src="'.$value['image'].'">
	                            </a>
	                        </div>
	                        <div class="prodcaption">
	                            <a href="'.base_url().'details/'.$value['id'].'"><h3>'.$value['title'].'</h3></a>
	                            <div class="prodcat">'.$value['fueltype'].'  |  '.$value['color'].'</div>
	                            <div class="prodthmbprc">&#8377; '.$value['price'].'</div>
	                            <small class="shipinfo d-block">Free Shipping from Car2Day</small>
	                        </div>
	                    </div>
	                </div>';
			}
		}		
	}

	public function get_car_featuers(){
		$car_id = $this->input->get('car');
		$car_details = $this->getCarDetails($car_id);
		echo json_encode($car_details);

	}

}
