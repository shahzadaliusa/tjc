<?php $this->xcontroller = new controller();
                    $placeOfHotel = $data[0]['in_hotel_place'];
                    $visitingOfHotel = $data[0]['in_hotel_vp'];
                    $zoneOfHotel = $data[0]['in_hotel_zone'];
                    $keywordOfHotel = $data[0]['in_hotel_seo'];
                    $nameOfHotel = $data[0]['in_hotel_name'];
                    $locationPost = $data[0]['in_hotel_locpost'];
                    $ratingOfHotel = $data[0]['in_hotel_rating'];
?>	
<div class="wrapper">
    <div class="irow">
        <div class="icolumn icolumn-12" style="margin : 0!important;padding: 0 !important; box-shadow: none !important;">
                <a class="item"  href="#"><img style="width:100%;" src="<?php echo URL;?>img/hotels/<?php echo $zoneOfHotel.'/'.$nameOfHotel?>/banner/1.jpg" alt="Corbett National Park"></a>
        </div>
    </div>
    
    <article class="page-article">
        <div class="row">
            <div class="column column-8 booking-block" style="background : none; border : none; box-shadow : none;">
                <?php echo $data[0]['in_hotel_about']; echo $data[0]['in_hotel_services'];?>
            </div>
            
            <div class="column column-4 booking-form" style = "background : none;border : none; box-shadow : none; display : inline-block; text-align:center;">
                <h1 class="package-title">
                    <?php echo $nameOfHotel." Booking";?>
                </h1>
                
                <div class="circle-block" style="display :block; width:250px; height : 250px; position:relative; top : auto; left : auto; right : auto; margin : 20px auto;">
                    <div class="circle">
                        <div class="discount">
                            <span>20% OFF</span>
                        </div>
                        
                        <div class="mrp">
                            <span class="strike"> 5000 INR</span>
                        </div>
                        
                        <div class="discounted">
                            <span>6000 INR</span>
                        </div>
                        
                        <div class="service" style="color : #ffffff;">
                            <p>Breakfast &amp; Lunch Included</p>
                            <p>Standard Room Suite</p>
                            <p>Double Bed</p>
                        </div>
                    </div>
                </div>

                <div class="pack-info">
                    <button class="add-to-cart">Add To Cart</button>
                </div>
                <div class="row">
                    <div class="column column-12 sticky-note" style="padding : 5%;">
                        <h2 style="text-align : center; font-family : 'Abel'; font-size : 2em;padding : 10px 0; border-bottom : 3px solid #ff6767;">Need Help?</h2>
                        <p>Call Us at Our 24X7 Helpline Number</p>
                        <p style="font-size : 3vw; color : #3cb878;">+91-8171151719<br/>+91-8126491043</p>
                        <div class="form-container">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--END OF DIV.ROW-->
        
        <div class="cd-tabs cd-tabs--vertical container js-cd-tabs">
		    <nav class="cd-tabs__navigation">
		        <ul class="cd-tabs__list">
                    <li><a href="#tab-location" class="cd-tabs__item cd-tabs__item--selected"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path></svg></div><span>Location</span></a></li>
                    <li><a href="#tab-services" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.498,11.697c-0.453-0.453-0.704-1.055-0.704-1.697c0-0.642,0.251-1.244,0.704-1.697c0.069-0.071,0.15-0.141,0.257-0.22c0.127-0.097,0.181-0.262,0.137-0.417c-0.164-0.558-0.388-1.093-0.662-1.597c-0.075-0.141-0.231-0.22-0.391-0.199c-0.13,0.02-0.238,0.027-0.336,0.027c-1.325,0-2.401-1.076-2.401-2.4c0-0.099,0.008-0.207,0.027-0.336c0.021-0.158-0.059-0.316-0.199-0.391c-0.503-0.274-1.039-0.498-1.597-0.662c-0.154-0.044-0.32,0.01-0.416,0.137c-0.079,0.106-0.148,0.188-0.22,0.257C11.244,2.956,10.643,3.207,10,3.207c-0.642,0-1.244-0.25-1.697-0.704c-0.071-0.069-0.141-0.15-0.22-0.257C7.987,2.119,7.821,2.065,7.667,2.109C7.109,2.275,6.571,2.497,6.07,2.771C5.929,2.846,5.85,3.004,5.871,3.162c0.02,0.129,0.027,0.237,0.027,0.336c0,1.325-1.076,2.4-2.401,2.4c-0.098,0-0.206-0.007-0.335-0.027C3.001,5.851,2.845,5.929,2.77,6.07C2.496,6.572,2.274,7.109,2.108,7.667c-0.044,0.154,0.01,0.32,0.137,0.417c0.106,0.079,0.187,0.148,0.256,0.22c0.938,0.936,0.938,2.458,0,3.394c-0.069,0.072-0.15,0.141-0.256,0.221c-0.127,0.096-0.181,0.262-0.137,0.416c0.166,0.557,0.388,1.096,0.662,1.596c0.075,0.143,0.231,0.221,0.392,0.199c0.129-0.02,0.237-0.027,0.335-0.027c1.325,0,2.401,1.076,2.401,2.402c0,0.098-0.007,0.205-0.027,0.334C5.85,16.996,5.929,17.154,6.07,17.23c0.501,0.273,1.04,0.496,1.597,0.66c0.154,0.047,0.32-0.008,0.417-0.137c0.079-0.105,0.148-0.186,0.22-0.256c0.454-0.453,1.055-0.703,1.697-0.703c0.643,0,1.244,0.25,1.697,0.703c0.071,0.07,0.141,0.15,0.22,0.256c0.073,0.098,0.188,0.152,0.307,0.152c0.036,0,0.073-0.004,0.109-0.016c0.558-0.164,1.096-0.387,1.597-0.66c0.141-0.076,0.22-0.234,0.199-0.393c-0.02-0.129-0.027-0.236-0.027-0.334c0-1.326,1.076-2.402,2.401-2.402c0.098,0,0.206,0.008,0.336,0.027c0.159,0.021,0.315-0.057,0.391-0.199c0.274-0.5,0.496-1.039,0.662-1.596c0.044-0.154-0.01-0.32-0.137-0.416C17.648,11.838,17.567,11.77,17.498,11.697 M16.671,13.334c-0.059-0.002-0.114-0.002-0.168-0.002c-1.749,0-3.173,1.422-3.173,3.172c0,0.053,0.002,0.109,0.004,0.166c-0.312,0.158-0.64,0.295-0.976,0.406c-0.039-0.045-0.077-0.086-0.115-0.123c-0.601-0.6-1.396-0.93-2.243-0.93s-1.643,0.33-2.243,0.93c-0.039,0.037-0.077,0.078-0.116,0.123c-0.336-0.111-0.664-0.248-0.976-0.406c0.002-0.057,0.004-0.113,0.004-0.166c0-1.75-1.423-3.172-3.172-3.172c-0.054,0-0.11,0-0.168,0.002c-0.158-0.312-0.293-0.639-0.405-0.975c0.044-0.039,0.085-0.078,0.124-0.115c1.236-1.236,1.236-3.25,0-4.486C3.009,7.719,2.969,7.68,2.924,7.642c0.112-0.336,0.247-0.664,0.405-0.976C3.387,6.668,3.443,6.67,3.497,6.67c1.75,0,3.172-1.423,3.172-3.172c0-0.054-0.002-0.11-0.004-0.168c0.312-0.158,0.64-0.293,0.976-0.405C7.68,2.969,7.719,3.01,7.757,3.048c0.6,0.6,1.396,0.93,2.243,0.93s1.643-0.33,2.243-0.93c0.038-0.039,0.076-0.079,0.115-0.123c0.336,0.112,0.663,0.247,0.976,0.405c-0.002,0.058-0.004,0.114-0.004,0.168c0,1.749,1.424,3.172,3.173,3.172c0.054,0,0.109-0.002,0.168-0.004c0.158,0.312,0.293,0.64,0.405,0.976c-0.045,0.038-0.086,0.077-0.124,0.116c-0.6,0.6-0.93,1.396-0.93,2.242c0,0.847,0.33,1.645,0.93,2.244c0.038,0.037,0.079,0.076,0.124,0.115C16.964,12.695,16.829,13.021,16.671,13.334 M10,5.417c-2.528,0-4.584,2.056-4.584,4.583c0,2.529,2.056,4.584,4.584,4.584s4.584-2.055,4.584-4.584C14.584,7.472,12.528,5.417,10,5.417 M10,13.812c-2.102,0-3.812-1.709-3.812-3.812c0-2.102,1.71-3.812,3.812-3.812c2.102,0,3.812,1.71,3.812,3.812C13.812,12.104,12.102,13.812,10,13.812"></path></svg></div><span>Services</span></a></li>
                    <li><a href="#tab-cat" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.431,2.156h-3.715c-0.228,0-0.413,0.186-0.413,0.413v6.973h-2.89V6.687c0-0.229-0.186-0.413-0.413-0.413H6.285c-0.228,0-0.413,0.184-0.413,0.413v6.388H2.569c-0.227,0-0.413,0.187-0.413,0.413v3.942c0,0.228,0.186,0.413,0.413,0.413h14.862c0.228,0,0.413-0.186,0.413-0.413V2.569C17.844,2.342,17.658,2.156,17.431,2.156 M5.872,17.019h-2.89v-3.117h2.89V17.019zM9.587,17.019h-2.89V7.1h2.89V17.019z M13.303,17.019h-2.89v-6.651h2.89V17.019z M17.019,17.019h-2.891V2.982h2.891V17.019z"></path></svg></div><span>Category</span></a></li>
                    <li><a href="#tab-price" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M4.3,15.249H3.428c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,15.444,4.541,15.249,4.3,15.249 M6.916,15.249H6.044c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,15.444,7.157,15.249,6.916,15.249 M13.894,8.271h0.872c0.241,0,0.437-0.195,0.437-0.437c0-0.241-0.195-0.436-0.437-0.436h-0.872c-0.241,0-0.437,0.194-0.437,0.436C13.457,8.077,13.652,8.271,13.894,8.271 M4.3,7.399H3.428c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,7.594,4.541,7.399,4.3,7.399 M15.638,11.324c-0.241,0-0.436,0.194-0.436,0.436s0.194,0.437,0.436,0.437s0.437-0.195,0.437-0.437S15.879,11.324,15.638,11.324 M14.766,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.241,0,0.437-0.195,0.437-0.437C15.202,15.444,15.007,15.249,14.766,15.249 M12.149,7.399h-0.872c-0.241,0-0.437,0.194-0.437,0.436c0,0.242,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,7.594,12.39,7.399,12.149,7.399 M17.818,9.144V5.655c0-0.939-0.745-1.7-1.676-1.737l-0.104-0.859L9.276,3.88L2.824,2.151l-0.471,1.76H2.119c-0.963,0-1.744,0.781-1.744,1.744v10.466c0,0.963,0.781,1.744,1.744,1.744h13.955c0.963,0,1.744-0.781,1.744-1.744v-1.744c0.963,0,1.744-0.781,1.744-1.745v-1.744C19.562,9.925,18.781,9.144,17.818,9.144 M16.946,5.655v0.242c-0.18-0.104-0.377-0.178-0.589-0.213L16.25,4.801C16.646,4.882,16.946,5.234,16.946,5.655 M15.277,4.029l0.184,1.507l-3.929-1.052L15.277,4.029z M3.44,3.219l9.09,2.436H2.788L3.44,3.219z M1.247,5.655c0-0.481,0.39-0.872,0.871-0.872l-0.24,0.896C1.65,5.711,1.438,5.786,1.247,5.897V5.655z M16.946,16.121c0,0.48-0.392,0.872-0.872,0.872H2.119c-0.482,0-0.872-0.392-0.872-0.872V7.399c0-0.481,0.39-0.872,0.872-0.872h13.955c0.48,0,0.872,0.391,0.872,0.872v1.744h-1.744c-0.964,0-1.745,0.781-1.745,1.744v1.744c0,0.964,0.781,1.745,1.745,1.745h1.744V16.121z M18.69,12.632c0,0.481-0.392,0.873-0.872,0.873h-2.616c-0.482,0-0.873-0.392-0.873-0.873v-1.744c0-0.481,0.391-0.872,0.873-0.872h2.616c0.48,0,0.872,0.391,0.872,0.872V12.632z M12.149,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,15.444,12.39,15.249,12.149,15.249 M9.533,15.249H8.661c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,15.444,9.774,15.249,9.533,15.249 M6.916,7.399H6.044c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,7.594,7.157,7.399,6.916,7.399 M9.533,7.399H8.661c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,7.594,9.774,7.399,9.533,7.399"></path></svg></div><span>Pricing</span></a></li>	
                    <li><a href="#tab-review" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z"></path></svg></div><span>Reviews</span></a></li>
                </ul> <!-- cd-tabs__list -->
		    </nav>

		    <ul class="cd-tabs__panels">
			    <li id="tab-location" class="cd-tabs__panel cd-tabs__panel--selected text-component">
                    <h2 class="c-title" ><?php echo $data[0]['in_hotel_name'];?></h2>
                    <div class="rating">
                        <?php
                            if($ratingOfHotel=='5'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>';
                            }
                            else if($ratingOfHotel=='4'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;&#x2605;</span><span>☆</span>';
                            }
                            else if($ratingOfHotel=='3'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;</span><span>☆☆</span>';
                            }
                            else if($ratingOfHotel=='2'){
                                echo '<span class="filled">&#x2605;&#x2605;</span><span>☆☆☆</span>';
                            }
                            else {
                                echo '<span class="filled">&#x2605;</span><span>☆☆☆☆</span>';
                            }
                        ?>
                    </div>
				    <?php echo $data[0]['in_hotel_locpost'];?>
                </li>

                <li id="tab-services" class="cd-tabs__panel text-component">
                    <?php echo $data[0]['in_hotel_services'];?>
                    <p class="tab-note">Quality of Service is the responsibility of <?php echo $nameOfHotel?> Department Only.</p>
                </li>

			    <li id="tab-cat" class="cd-tabs__panel text-component">
                    <div class="row">
                        <div class="column column-4 tab-col">
                            <p class="tab-content"> <span class="content-title">Available Room Types</span><span class="content-value">Double Bed <br/>Single Bed <br/>Doormetry</span> </p>
                        </div>
                        <div class="column column-4 tab-col">
                            <p class="tab-content"> <span class="content-title">Available Packages</span><span class="content-value">1 Night Stay Package <br/>2Night Stay Package <br/>3 Night Stay Package</span> </p>
                        </div>
                        <div class="column column-4 tab-col">
                            <p class="tab-content"> <span class="content-title">Available Suite</span><span class="content-value">None</span> </p>                   
                        </div>
                    </div>

                    <div class="outer-xcard" style="position : relative;">
		                <div class="img-xcard" style="position : relative;">
			                <img src="<?php echo URL;?>images/sss.jpg" />
                            <a href="#0" class="chit-trigger"><i class="fa fa-plus"></i></a>
                            <ul class="x-links" style="position:absolute; bottom : 0; border-bottom-left-radius : 15px; width : 100%; height : 50px; background : #ebebeb; ">
				                <li><a href="#" title="View Images"><svg class="svg-icon" viewBox="0 0 20 20">
							        <path d="M18.555,15.354V4.592c0-0.248-0.202-0.451-0.45-0.451H1.888c-0.248,0-0.451,0.203-0.451,0.451v10.808c0,0.559,0.751,0.451,0.451,0.451h16.217h0.005C18.793,15.851,18.478,14.814,18.555,15.354 M2.8,14.949l4.944-6.464l4.144,5.419c0.003,0.003,0.003,0.003,0.003,0.005l0.797,1.04H2.8z M13.822,14.949l-1.006-1.317l1.689-2.218l2.688,3.535H13.822z M17.654,14.064l-2.791-3.666c-0.181-0.237-0.535-0.237-0.716,0l-1.899,2.493l-4.146-5.42c-0.18-0.237-0.536-0.237-0.716,0l-5.047,6.598V5.042h15.316V14.064z M12.474,6.393c-0.869,0-1.577,0.707-1.577,1.576s0.708,1.576,1.577,1.576s1.577-0.707,1.577-1.576S13.343,6.393,12.474,6.393 M12.474,8.645c-0.371,0-0.676-0.304-0.676-0.676s0.305-0.676,0.676-0.676c0.372,0,0.676,0.304,0.676,0.676S12.846,8.645,12.474,8.645"></path>
						            </svg></a>
                                </li>
				                <li><a href="#" title="Available Add On" class="addon-trigger"><svg class="svg-icon" viewBox="0 0 20 20">
							        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
						            </svg></a>
                                </li>
				                <li><a href="#0" title="Hotel's Amenities" class="amenity-trigger"><svg class="svg-icon" viewBox="0 0 20 20">
							        <path d="M10,1.529c-4.679,0-8.471,3.792-8.471,8.471c0,4.68,3.792,8.471,8.471,8.471c4.68,0,8.471-3.791,8.471-8.471C18.471,5.321,14.68,1.529,10,1.529 M10,17.579c-4.18,0-7.579-3.399-7.579-7.579S5.82,2.421,10,2.421S17.579,5.82,17.579,10S14.18,17.579,10,17.579 M14.348,10c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.446,0.446-0.446h5C14.146,9.554,14.348,9.755,14.348,10 M14.348,12.675c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.445,0.446-0.445h5C14.146,12.229,14.348,12.43,14.348,12.675 M7.394,10c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.446,0.446-0.446h0.849C7.194,9.554,7.394,9.755,7.394,10 M7.394,12.675c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.445,0.446-0.445h0.849C7.194,12.229,7.394,12.43,7.394,12.675 M14.348,7.325c0,0.246-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.2-0.446-0.446c0-0.245,0.2-0.446,0.446-0.446h5C14.146,6.879,14.348,7.08,14.348,7.325 M7.394,7.325c0,0.246-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.2-0.446-0.446c0-0.245,0.201-0.446,0.446-0.446h0.849C7.194,6.879,7.394,7.08,7.394,7.325"></path>
						            </svg></a>
                                </li>
				                <li><a href="#0" title="Policy" class="policy-trigger"><svg class="svg-icon" viewBox="0 0 20 20">
							        <path d="M18.344,16.174l-7.98-12.856c-0.172-0.288-0.586-0.288-0.758,0L1.627,16.217c0.339-0.543-0.603,0.668,0.384,0.682h15.991C18.893,16.891,18.167,15.961,18.344,16.174 M2.789,16.008l7.196-11.6l7.224,11.6H2.789z M10.455,7.552v3.561c0,0.244-0.199,0.445-0.443,0.445s-0.443-0.201-0.443-0.445V7.552c0-0.245,0.199-0.445,0.443-0.445S10.455,7.307,10.455,7.552M10.012,12.439c-0.733,0-1.33,0.6-1.33,1.336s0.597,1.336,1.33,1.336c0.734,0,1.33-0.6,1.33-1.336S10.746,12.439,10.012,12.439M10.012,14.221c-0.244,0-0.443-0.199-0.443-0.445c0-0.244,0.199-0.445,0.443-0.445s0.443,0.201,0.443,0.445C10.455,14.021,10.256,14.221,10.012,14.221"></path>
						            </svg></a>
                                </li>
			                </ul>
		                </div>
        
		            <div class="data-xcard">
			            <h3 class="xcard-heading">Standard Room Suite</h3>
			            <ul class="table-box">
				            <li>
					            <legend class="x-legend">Suite Details</legend>
				                <table style="width:auto" class="xtable">
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td> 
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>:</td> 
                                        <td>Double Bed</td>
                                    </tr>
                                    <tr>
                                        <td>Meal</td>
                                        <td>:</td> 
                                        <td>Breakfast</td>
                                    </tr>
                                    <tr>
                                        <td>Guest</td>
                                        <td>:</td> 
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Room</td>
                                        <td>:</td> 
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Room Size</td>
                                        <td>:</td> 
                                        <td>13ftX17ft</td>
                                    </tr>
                                    <tr>
                                        <td>Room Type</td>
                                        <td>:</td> 
                                        <td>King Size</td>
                                    </tr>
                                </table>
				            </li>
                
                            <li>
                                <legend class="x-legend">Inclusions</legend>
                                    <table style="width:auto" class="xtable">
                                    <tr>
                                        <td>Room's Kitchen</td>
                                    </tr>
                                    <tr>
                                        <td>Separate Bathroom</td>
                                    </tr>
                                    <tr>
                                        <td>Room's Dinning Table</td>
                                    </tr>
                                    <tr>
                                        <td>LED TVs</td>
                                    </tr>
                                </table>
                            </li>

                            <li>
                                <legend class="x-legend">Add On</legend>
                                <table style="width:auto" class="xtable">
                                    <tr>
                                        <td>Extra Meal</td>
                                    </tr>
                                    <tr>
                                        <td>Extra Guest</td>
                                    </tr>
                                    <tr>
                                        <td>Dinning Table</td>
                                    </tr>
                                    <tr>
                                        <td>Swimming Pool</td>
                                    </tr>
                                </table>
                            </li>
				
			            </ul>

			
		            </div>

                    <div class="amenities">
                        <a href="#0" class="btn-close"><span><i class="fa fa-close"></i></span></a>
                        <h3>Amenities</h3>
                        <ul class="amenity-section">
                            <li class="amenity-title">Dining
                                <ul>
                                    <li>Restaurant</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Activities
                                <ul>
                                    <li>Darts</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Transfers
                                <ul>
                                    <li>Airport Transfers</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Front Desk Reception Services
                                <ul>
                                    <li>Luggage Storage</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Internet / Wifi
                                <ul>
                                    <li>Wi-Fi</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Pool
                                <ul>
                                    <li>Swimming Pool</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Business
                                <ul>
                                    <li>Business Center</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Outdoors
                                <ul>
                                    <li>Lawn</li>
                                </ul>
                            </li>
                            <li class="amenity-title">Kitchen
                                <ul>
                                    <li>Kitchen</li>
                                </ul>
                            </li>
                            <li class="amenity-other">General
                                <ul>
                                    <li>Caretaker</li>
                                    <li>Air Coditioning</li>
                                    <li>Library</li>
                                    <li>Power Backup</li>
                                    <li>Telephone</li>
                                    <li>Multilingual Staff</li>
                                    <li>Room Service</li>
                                    <li>Wake Up Call</li>
                                </ul>
                            </li>
                        </ul>
                    </div>    

                    <div class="policies">
                        <a href="#0" class="btn-close"><span><i class="fa fa-close"></i></span></a>
                        <h3>Policies</h3>
                        <p>1. Non Refundable Booking Charges</p>
                        <p>2. Check in Time : 01:00</p>
                        <p>3. Check Out Time : 11:00</p>
                        <p>4. Add On Charges are non refundable if booked.</p>
                    </div>
                    <div class="circle-block js-circle">
                        <div class="circle small-circle">
                            <div class="discount">
                                <span>20% OFF</span>
                            </div>
                            <div class="mrp">
                                <span class="strike"> 5000 INR</span>
                            </div>
                            <div class="discounted">
                                <span>6000 INR</span>
                            </div>     
                        </div>
                        <button class="add-to-cart" style="font-size : 0.8em;">Add To Cart</button>
                    </div>                
	    
                            
                </li>

                <li id="tab-price" class="cd-tabs__panel text-component">
                    <p class="tab-about">
                        See Our Night Stay Packages. Separate Pricing is not available. You need to book the complete package.
                    </p>
                </li>

                <li id="tab-review" class="cd-tabs__panel text-component">
                    <p class="tab-about">
                        Under Development
                    </p>
                </li>

		    </ul> <!-- cd-tabs__panels -->
	    </div> <!-- cd-tabs -->
        <div class="row">
            <div class="column column-12">
                <div class="caro-title">
                    <p><span class="title"><?php echo $nameOfHotel;?> Images</span></p>
                </div>
                <div class="caro owl-carousel owl-theme column-3">
                    <?php
                        $dirname = "c:/xampp/htdocs/inv/public/"."img/hotels/".$data[0]['in_hotel_zone']."/".$data[0]['in_hotel_name']."/gallery/thumbs";
                        $images = scandir($dirname);
                        $ignore = Array(".", "..");
                        foreach($images as $curimg){
                            if(!in_array($curimg, $ignore)) {
                                $link = URL.'img/hotels/'.$data[0]['in_hotel_zone'].'/'.$data[0]['in_hotel_name'].'/gallery/'.$curimg;
                                $string = URL.'img/hotels/'.$data[0]['in_hotel_zone'].'/'.$data[0]['in_hotel_name'].'/gallery/thumbs/'.$curimg;
						        echo '<div class="caro-card caro-inline">
                                            <a href="'.$link.'" data-lightbox="mygallery" class="caro-card-anchor">
                                                <div class="card-img"><img class="lazy" data-src="'.$string.'" width="100%"></div>                
                                            </a>
                                        </div>';
                                    }
                                }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-12">
                <div class="caro-title">
                    <p><span class="title">Suggested Hotels</span></p>
                </div>
                <div class="caro owl-carousel owl-theme column-3">
                    <?php 
                        $query = "SELECT * FROM `in_hotels` WHERE `in_hotel_place` = '$placeOfHotel' OR `in_hotel_seo` LIKE '%$visitingOfHotel%'";
                        $sData = $this->xcontroller->searchQuery($query);
					    foreach($sData as $key=>$val){
						    echo   '<div class="caro-card caro-inline">
                                        <a href="'.HOME.'hotels/'.$val['in_hotel_name'].'" class="caro-card-anchor">
                                            <div class="card-img"><img src="'.URL."img/hotels/".$val['in_hotel_zone']."/".$val['in_hotel_name']."/thumbs/".$val['in_hotel_name'].'.jpg" width="100%"></div>
                                            <div class="card-info">
                                                <h1 class="item-title">'.$val['in_hotel_name'].'</h1>
                                                <div class="item-info">
                                                    <p align="center">'.$val['in_hotel_vp'].'</p>
                                                    <p align="center">'.$val['in_hotel_rating'].'</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>';}
                    ?>
							
			</div>
        </div>
    </article>
</div>

    