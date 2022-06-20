<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="<?=(!$this->uri->segment(1)=='')?'inrpg':''?>">
<header class="header" id="header">
    <section class="hdrtop">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="<?=base_url()?>" class="logo">
                    <img src="<?=base_url()?>assets/images/logo.png" alt="logo">
                </a>
                <nav class="nav">
                    <div class="menu-main-menu-container">
                        <ul class="primary-menu">
                            
                            <li class="<?=($this->uri->segment(1) == 'store')?'active':''?>">
                                <a href="<?=base_url()?>store">Store</a>
                            </li>
                            <li class="<?=($this->uri->segment(1) == 'sell')?'active':''?>">
                                <a href="<?=base_url()?>sell">Sell</a>
                            </li>
                            <li class="<?=($this->uri->segment(1) == 'finance')?'active':''?>">
                                <a href="<?=base_url()?>finance">Finance</a>
                            </li>
                            <li class="<?=($this->uri->segment(1) == 'premium')?'active':''?>">
                                <a href="<?=base_url()?>">Premium</a>    
                            </li>
                            <li class="<?=( $this->uri->segment(1) == 'insurance' || $this->uri->segment(1) == 'carvenience' || $this->uri->segment(1) == 'autoteilee' || $this->uri->segment(1) == 'article' || $this->uri->segment(1) == 'rto' )?'active':''?>">
                                <a href="">More</a>
                                <ul>
                                    <li class="">
                                        <a href="<?=base_url()?>insurance">
                                        Insurance</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>carvenience">Carvenience service</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>autoteilee">Autoteille Parts</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>article">Research Articles</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>rto">RTO Services Forms</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        
                        
                        
                    </div>
                    <div class="mnucls"></div>
                </nav>
                <?php //print_r($_SESSION) ?>
                <div class="ml-auto">
                    <div class="d-flex align-items-center">
                        <div class="locdropdown">
                          <button class="btnloc collapsed" type="button" data-toggle="collapse" data-target="#locdrop" aria-expanded="false" aria-controls="locdrop">
                            <?php 
                                $city_val = '0';
                                if($this->session->has_userdata('city')){
                                    $city_val = $_SESSION['city'];
                                } 
                            ?>
                            <span id="city_text"><?=($city_val != '0')?$city_val:'Select City'?></span>
                          </button>
                        <div class="collapse locinfo" id="locdrop">
                              <div class="card card-body border-0">                                
                                    <select id="city" class="SlectBox">
                                        <option>Select City</option>
                                        <?php                                            
                                            foreach ($city as $key => $value) {
                                                ?>
                                                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                              </div>
                            
                                
                        </div>
                            
                        </div>
                        <a href="javascript:void(0)" class="mnutog">
                            <svg height="30" width="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                                    <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                                        C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"/>
                                    <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                                        S379.58,180.455,372.939,180.455z"/>
                                    <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
                                        c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="srchsec">
            <div class="container">
                <div class="input-group">
                    <input id="search_c" name="search" type="text" class="form-control" placeholder="Search by Brand">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="search_car">
                            <svg height="26" width="26" fill="#e74141" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 489.713 489.713" style="enable-background:new 0 0 489.713 489.713;" xml:space="preserve">
                                <path d="M483.4,454.444l-121.3-121.4c28.7-35.2,46-80,46-128.9c0-112.5-91.5-204.1-204.1-204.1S0,91.644,0,204.144
                                    s91.5,204,204.1,204c48.8,0,93.7-17.3,128.9-46l121.3,121.3c8.3,8.3,20.9,8.3,29.2,0S491.8,462.744,483.4,454.444z M40.7,204.144
                                    c0-90.1,73.2-163.3,163.3-163.3s163.4,73.3,163.4,163.4s-73.3,163.4-163.4,163.4S40.7,294.244,40.7,204.144z"/>
                            </svg>
                        </button>                    
                    </div>
                </div>
            </div>
        </section>
    </section>
</header>

