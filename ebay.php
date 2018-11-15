<?php 

include_once 'eBaySession.php';

if(isset($_POST['item_title']) && $_POST['item_title']!=""){

		$product_info = (object) array();

		$product_info->itemId = "";
		$product_info->item_title = $_POST['item_title'];
		$product_info->UPC = $_POST['UPC'];
		$product_info->brand = $_POST['brand'];
		$product_info->ISBN = $_POST['ISBN'];
		$product_info->startprice = $_POST['startprice'];
		$product_info->listingDuration = $_POST['listingDuration'];
		$product_info->sku = $_POST['sku'];
		$product_info->Quantity = $_POST['quantity'];
		$product_info->item_description = $_POST['item_description'];
		$product_info->condition = $_POST['condition'];
		$product_info->image = $_POST['image'];//localiamge
		$product_info->listingtype = $_POST['listingtype'];

		$product_info->id = "10";
		$product_info->search_keyword = "";
		$product_info->template = "mytmp"; //this is your template name
		//$listingDuration = 'Days_7';
		$product_info->categoryid = "377";

		//Production
		$credential = (object) array();
		/*
		$credential->userToken = "AgAAAA**AQAAAA**aAAAAA**znq2WQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wJnYShCZCHpg6dj6x9nY+seQ**L+MDAA**AAMAAA**VrOG9TkZ3Vrtbb7aOP8OWmNfwNM28BeFoPzWxeprKYXH/aqWPH6IcYqRnebzbzMmuhH44zFEkkij1JDV44VMWjP6UqQXXHgTyEDx4ePJ4PiD2YjrVzZjZymY+jb2mphPQzcx2DyAbRUyGI554e1vPB9fOyBY8pvG86MnMXdgrQF46jvkRjFGbuc8yvMJ8CfEG5kxBaQj038ZmBY8N2T2Nx/+hTVtqFEigBEqSyVWIjLprvk3MCzSpIxhn/aKNlfKZ8GLh5fj6Th68njcbRO4dbsqa228Swqaft16QuLw0ZZub03il5j+YBn3ptc9tlMeBaQDGAYlB0hJBqP+h9S8t9C6OBsfkEpmVeKlY/gXXI0I6PVRd8MkXsQKhWaOmveD5+NImciBmuNkcFhz5kftL/tt6qAHxeGR/v/OXyyFAxwOTKfe5i2tF/6LjwI8neDywGLqriJJJiAEHo0C+n4gICHdZKk+CgJyeD9bNfNn+nu7K4+qbP5OEaoyspxLr+9X1UJd92BbHVQOgwk+LpZbO2sZDtJXqZl8gGjqW0GXOCH20blBKxGpZpSqWTbeAvW4TADde0RRE7tw+31ZpB8bY5581dPZ+ocyL1r3W/S9j4edD0HX4xbVTuA/1ql3vqjtFsKX6Fs50Q9pHa2yJZcs5f3ns416SZrk84LMyw6V/iQmLZ3hYJIMtKNOC/p1xYqm7Q4VX/WbRBnPxvNY9gTQFNXnmxu639piAyvZ1YleJJZFAcZafzEvF5bGwG5tUSZc";

		$credential->devID = "c5301cce-7aab-4188-852e-6f70342c11fc";
		$credential->appID ="Pushpend-Pushpend-PRD-b6e078fcf-b624f6c5";
		$credential->certID ="PRD-6e078fcfa9f0-f744-4ad8-8887-5fb2";
		$credential->serverUrl ="https://api.ebay.com/ws/api.dll";	
		$credential->paypalEmailAddress ="example@example.com";
		$credential->mode = "";
		*/

		//Sandbox 


		$credential->userToken = "AgAAAA**AQAAAA**aAAAAA**bcrWWw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4ajD5KHogydj6x9nY+sdreQ**cSUEAA**AAMAAA**IlMk8je55Gv7DcqKScMtOlG2/lX6flm/EBkgqEwksAIqWhmlQ8/mA6KFSFlQbfCh1u/qIqJ+eC0jI72ijC8rZXU2zN6A/jqs9b1728Xg/okVnQQJuB/V3V9wmfrJfbnF4pB7ySfhzSB1qnvKF2/8UzhSRjKjBEFspkosMANMojv8TjHt6RVhLK2VzxyBgUVq29AzfFYbIKsaYSgTqXHBegss2WpTwZMzXmRaVM0UUE0Fs3xxLf14FRkNuc2nsRwi6PUkOJIrrNNNf5c8HiAdCMi+nOcbAvletfF5fNf9UdhNdfs9CXgsG7AYq46uXqBpnuHEA/uz7AWBh1cA/UUf7yIDD/OOZ6UI/wcJvtlQrjqnns6QWdGNq7BjVggH9N2GRPDoVFACjkLP+rQYe5DYZ7mLrbo1cFZHkE0EcIEaorYWZJ9isGhJbRBOqo60zaL/GILJeN9vJ4ZNVK7xqoXL+o3pd6cxtoaYFwI4hNH+yq8j52m2mgZTY8SynYJpsZ721y+0pjcJ8x3X5G4raiij+I+bUoW5apcngq7ShPF5/saN1MOHt1GGOtpIg5iCyNqwD4E5xsXy5rtd8mxTyj1rGrn0Z2pzXWF+1DZeOar/fp42WahjKAjtBdlHQdPpoba8IcZ2wLvyKtsIhW1s2+3YwKtSo2mr8jEoXdn16lhzHxmaFpYUuZZH5nKQ8KBESwwGwd0+sDq8a6Tc2Nf0nLOSpVZXaCLS4UhIbpYC5hY4NZK5rz6dHHP9lhMnEO8B+yZ8";
		$credential->devID = "8c58d35ff-e367-4a68-901d-d0f15e950282";	
		$credential->appID ="Jitendrap-AddProdu-SBX-a08f655c9-1e7cc2ae";
		$credential->certID ="SBX-08f655c9c301-fd94-4b29-9bff-9afd";
		$credential->serverUrl ="https://api.sandbox.ebay.com/ws/api.dll";
		$credential->paypalEmailAddress ="example@example.com";
		$credential->mode = "Sandbox";



		$ebay_setting = (object) array();

		$ebay_setting->SiteID = "0";
		$ebay_setting->Currency ="USD";
		$ebay_setting->error_ID ="en_US";
		$ebay_setting->Country = "US,United States";


		if(isset($_POST['item_title']))
		{
			//$product_id = 1170;
			if($product_info->id!="")
			{

				
			 if(isset($product_info->itemId) && $product_info->itemId==''){
                  
				if($product_info)
				{

					$product_images = array();
					$picture_array =array();				
					$picture_details ='';
					ini_set('magic_quotes_gpc', false);    // magic quotes will only confuse things like escaping apostrophe
					$img_name =array();
					//Get the item entered
					$listingType = $product_info->listingtype;
					//$listingType = 'Chinese';
					if($credential->mode=='Sandbox')
					{	
						$primaryCategory = '377';
					}else{						
						$primaryCategory = $product_info->categoryid;
					}

					$itemTitle = $product_info->item_title;
					$upc = $product_info->UPC;
					$sku = $product_info->sku;
					$brand = $product_info->brand;
					$isbn = $product_info->ISBN;
					$startPrice = $product_info->startprice;
					$listingDuration = $product_info->listingDuration;
					//$listingDuration = 'Days_7';
					$Quantity = $product_info->Quantity;
					$safequery = $product_info->search_keyword;
					if(get_magic_quotes_gpc()) {
					// print "stripslashes!!! <br>\n";
						$itemDescription = html_entity_decode(html_entity_decode($product_info->item_description));
					} else {
						$itemDescription = html_entity_decode(html_entity_decode($product_info->item_description));
					}
					$file_name = $product_info->template.".html";
					$file_content = file_get_contents(getcwd()."/mytmp/".$file_name);					

					$itemCondition = $product_info->condition;
					$product_images = explode(',', $product_info->image);
					/*******setting variable******/	
					//$siteID = 0;
					$siteID = $ebay_setting->SiteID;
					$Currency = $ebay_setting->Currency;
					$error_ID = $ebay_setting->error_ID;
					$Countryarr = explode(',', $ebay_setting->Country);
					$Country_short_codde = $Countryarr[0];
					$Country_name = $Countryarr[1];
					$startPrice_c = $startPrice." ".$Currency;
					//the call being made:
					$verb = 'AddItem';					
					$compatabilityLevel = 967; 
					$userToken = $credential->userToken;					
					$devID = $credential->devID;					
					$appID = $credential->appID;					
					$certID = $credential->certID;					
					$serverUrl = $credential->serverUrl;					
					$paypalEmailAddress = $credential->paypalEmailAddress;					
					/*image upload */
					
					$picture_details = '';
					if(!empty($product_images))
					{
						foreach($product_images as $img)
						{

							$requestBody = '<?xml version="1.0" encoding="utf-8"?>';
							$requestBody .= '<UploadSiteHostedPicturesRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
							$requestBody .= '<RequesterCredentials>
							<eBayAuthToken>'. $userToken .'</eBayAuthToken>';							
							$requestBody .= '</RequesterCredentials>';
							$requestBody .= '<WarningLevel>High</WarningLevel>';
							$requestBody .= '<ExternalPictureURL><![CDATA['.$img.']]></ExternalPictureURL>';
							$requestBody .= '<PictureName>product image</PictureName>';
							$requestBody .= '</UploadSiteHostedPicturesRequest>';							 
					        
							$headers = array(
							'X-EBAY-API-COMPATIBILITY-LEVEL:967',
							'X-EBAY-API-CALL-NAME:UploadSiteHostedPictures',
							'X-EBAY-API-DEV-NAME:'.$devID,
							'X-EBAY-API-APP-NAME:'.$appID,
							'X-EBAY-API-CERT-NAME:'.$certID,
							'X-EBAY-API-SITEID:'.$siteID,
							'Content-Type:text/xml;charset=utf-8'
							);

							$session  = curl_init($serverUrl);
							curl_setopt($session, CURLOPT_POST, true);
							curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
							curl_setopt($session, CURLOPT_POSTFIELDS, $requestBody);
							curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

							$responsexml = curl_exec($session);

							curl_close($session);         
							$response = new SimpleXMLElement($responsexml);
							//print_r($response);exit;

							//$response = $this->request('UploadSiteHostedPictures', $requestBody);
							//print_r($response);exit;
							//print_r($response);exit;
							if(!empty($response->Ack) && $response->Ack != 'Failure'){
								$uploaded_img = json_decode(json_encode($response->SiteHostedPictureDetails->PictureSetMember[0]->MemberURL), true);
								$picture_details .= '<PictureURL>' . $uploaded_img[0] . '</PictureURL>';
								//print_r($uploaded_img);exit;
								$picture_array[] = $uploaded_img[0];
							}elseif(count($response)==0){
								
									$upload_error_log = array(
										'product_id' => $product_info->id,
										'item_title' => $product_info->item_title,
										'shortmessage' => "Image Error",
										'longmessage' => "Please upload image size above 500px",
										'action' => "failed"
									);
								   
								echo 0;exit;
							}
						}

						//print_r($picture_array);exit;

						/****end***/
						/**start replacement**/	

						$count = count($picture_array);

						if($count==1)
						{					
							$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
							$dynamic = array($picture_array[0],$itemTitle,$startPrice_c,$itemDescription);
							$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}						
						elseif($count==2)
						{
							$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
							$dynamic = array($picture_array[0],$picture_array[1],$itemTitle,$startPrice_c,$itemDescription);
							$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==3)
						{
							$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
							$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$itemTitle,$startPrice_c,$itemDescription);
							$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==4)
						{
							$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{CDNUrl}/productimages/{ProductID}.png{Third}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
							$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$picture_array[3],$itemTitle,$startPrice_c,$itemDescription);
							$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==5)
						{
							$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{CDNUrl}/productimages/{ProductID}.png{Third}','{CDNUrl}/productimages/{ProductID}.png{Fourth}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
							$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$picture_array[3],$picture_array[4],$itemTitle,$startPrice_c,$itemDescription);
							$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						else
						{
							$DynamicTemplate=$file_content;
						}

						//echo $DynamicTemplate;die;
						/**end **/					
						//Build the request Xml string							
	$requestXmlBody = '<?xml version="1.0" encoding="utf-8"?>';
	$requestXmlBody .= '<AddItemRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
		$requestXmlBody .= '<RequesterCredentials>
	<eBayAuthToken>'.$userToken.'</eBayAuthToken>
		</RequesterCredentials>';
	$requestXmlBody .= '<ErrorLanguage>'.$error_ID.'</ErrorLanguage>';
	$requestXmlBody .= '<WarningLevel>High</WarningLevel>';
		$requestXmlBody .= '<Item>';

		$requestXmlBody .= '<BestOfferDetails>'; 
			$requestXmlBody .= '<BestOfferEnabled>true</BestOfferEnabled>';
	$requestXmlBody .= '</BestOfferDetails>';

	$requestXmlBody .= '<Title>'.$itemTitle.'</Title>';
	$requestXmlBody .= '<Description><![CDATA['.$DynamicTemplate.']]></Description>';
	$requestXmlBody .= '<PrimaryCategory>';
	$requestXmlBody .= '<CategoryID>'.$primaryCategory.'</CategoryID>';
	$requestXmlBody .= '</PrimaryCategory>';
	$requestXmlBody .= '<StartPrice currencyID="'.$Currency.'">'.$startPrice.'</StartPrice>';
	/*$requestXmlBody .= '<BuyItNowPrice currencyID="USD">'.($startprice+($startPrice*31)/100).'</BuyItNowPrice>';*/
	$requestXmlBody .= '<CategoryMappingAllowed>true</CategoryMappingAllowed>';

	$requestXmlBody .= '<Country>'.$Country_short_codde.'</Country>';
	$requestXmlBody .= '<Currency>'.$Currency.'</Currency>';

	$requestXmlBody .= '<ConditionID>'.$itemCondition.'</ConditionID>';

	$requestXmlBody .= '<DispatchTimeMax>3</DispatchTimeMax>';

	$requestXmlBody .= '<ListingDuration>'.$listingDuration.'</ListingDuration>';

	$requestXmlBody .= '<ListingType>'.$listingType.'</ListingType>';
	$requestXmlBody .= '<PaymentMethods>PayPal</PaymentMethods>';
	  /*<!--Enter your Paypal email address-->*/
	$requestXmlBody .= '<PayPalEmailAddress>'.$paypalEmailAddress.'</PayPalEmailAddress>';

	$requestXmlBody .= '<PictureDetails>'.$picture_details.'</PictureDetails>';


	$requestXmlBody .= '<PostalCode>95125</PostalCode>';

	$requestXmlBody .= '<ProductListingDetails>';
/*	$requestXmlBody .= '<BrandMPN>';
	$requestXmlBody .= '<Brand>'.$brand.'</Brand>';
	$requestXmlBody .= '</BrandMPN>';*/
	$requestXmlBody .= '<ISBN>Does not apply</ISBN>';
	$requestXmlBody .= '<UPC>'.$upc.'</UPC>';
	$requestXmlBody .= '<IncludePrefilledItemInformation>true</IncludePrefilledItemInformation>';
	$requestXmlBody .= '<IncludeStockPhotoURL>true</IncludeStockPhotoURL>';
	$requestXmlBody .= '</ProductListingDetails>';
	$requestXmlBody .= '<Quantity>'.$Quantity.'</Quantity>';

	$requestXmlBody .= '<ReturnPolicy>';
	$requestXmlBody .= '<ReturnsAcceptedOption>ReturnsAccepted</ReturnsAcceptedOption>';
	$requestXmlBody .= '<RefundOption>MoneyBack</RefundOption>';
	$requestXmlBody .= '<ReturnsWithinOption>Days_30</ReturnsWithinOption>';
	$requestXmlBody .= '<Description>Text description of return policy details</Description>';
	$requestXmlBody .= '<ShippingCostPaidByOption>Buyer</ShippingCostPaidByOption>';
	$requestXmlBody .= '</ReturnPolicy>';

	$requestXmlBody .='<ShippingDetails>';
    $requestXmlBody .='<ShippingType>Flat</ShippingType>';
    $requestXmlBody .='<ShippingServiceOptions>';
    $requestXmlBody .='<ShippingServicePriority>1</ShippingServicePriority>';
    $requestXmlBody .='<ShippingService>USPSPriority</ShippingService>';
    $requestXmlBody .='<ShippingServiceCost currencyID="USD">0.0</ShippingServiceCost>';
    $requestXmlBody .='<ShippingServiceAdditionalCost>0.00</ShippingServiceAdditionalCost>';
    $requestXmlBody .='<FreeShipping>true</FreeShipping>';
    $requestXmlBody .='</ShippingServiceOptions>';
    $requestXmlBody .='</ShippingDetails>';

	/* Jitendar I Added static Shipping profile id please make dynamic */

/*	$requestXmlBody .= '<SellerProfiles>';
	$requestXmlBody .= '<SellerShippingProfile>';
	$requestXmlBody .= '<ShippingProfileID>92820151020</ShippingProfileID>';
	$requestXmlBody .= '</SellerShippingProfile>';
	$requestXmlBody .= '<SellerReturnProfile>';
	$requestXmlBody .= '<ReturnProfileID>84164559020</ReturnProfileID>';
	$requestXmlBody .= '</SellerReturnProfile>';
	$requestXmlBody .= '<SellerPaymentProfile>';
	$requestXmlBody .= '<PaymentProfileID>84164561020</PaymentProfileID>';
	$requestXmlBody .= '</SellerPaymentProfile>';
	$requestXmlBody .= '</SellerProfiles>';*/

	$requestXmlBody .= '<Site>'.$Country_short_codde.'</Site>';
	$requestXmlBody .= '<SKU>'.$sku.'</SKU>';

	$requestXmlBody .= '</Item>';
	$requestXmlBody .= '</AddItemRequest>';
						 //Create a new eBay session with all details pulled in from included keys.php
				        $session = new eBaySession($userToken, $devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID, $verb);

						//send the request and get response
						$responseXml = $session->sendHttpRequest($requestXmlBody);
					/*	print_r($responseXml);exit;*/

						$xml = simplexml_load_string($responseXml) or die("Error: Cannot create object");

						//print_r($xml);exit;
						
						if(isset($xml->ItemID)){	
							$itemid= $xml->ItemID;
						}else{
							$itemid='';
							$error_array_faild_product = $xml->Errors;
							//print_r($error_array_faild_product);exit;
						}   

						  
						if(stristr($responseXml, 'HTTP 404') || $responseXml == '')
							die('<P>Error sending request');

						//Xml string is parsed and creates a DOM Document object
						$responseDoc = new DomDocument();
						$responseDoc->loadXML($responseXml);

						//get any error nodes
						$errors = $responseDoc->getElementsByTagName('Errors');
						//print_r($errors);exit;

						//if there are error nodes
						$my_error_message = "";
						if($errors->length > 0)
						{
							//echo 'item updated';
							$m= '<P><B>eBay returned the following error(s):</B>';
							//display each error
							//Get error code, ShortMesaage and LongMessage
							$code     = $errors->item(0)->getElementsByTagName('ErrorCode');
							$shortMsg = $errors->item(0)->getElementsByTagName('ShortMessage');
							$longMsg  = $errors->item(0)->getElementsByTagName('LongMessage');
							//Display code and shortmessage
							$m.='<P>'.$code->item(0)->nodeValue.' : '.str_replace(">", "&gt;", str_replace("<", "&lt;", $shortMsg->item(0)->nodeValue));
							//if there is a long message (ie ErrorLevel=1), display it
							if(count($longMsg) > 0)
							$m.= '<BR>'.str_replace(">", "&gt;", str_replace("<", "&lt;", $longMsg->item(0)->nodeValue));
							
							if($itemid!='')
							{
								$itemID = $itemid;
							    $data['product_details'] = json_encode($xml); 
								$data['status'] = 'uploaded';
								$data['itemID'] = $itemID;
								
							}else{
							//echo "844";
							$responseXml5 = $session->sendHttpRequest($requestXmlBody);
								$response = new SimpleXMLElement($responseXml5);

								
								foreach ($response->Errors as $value1) {
									$my_error_message .= $value1->LongMessage."<br>";
								}

								if($response->Errors)
								{
									$err=$response->Errors->ShortMessage;

								 	$shortmessage= $response->Errors->ShortMessage;
									$longmessage =  $response->Errors->LongMessage;
									$errorcode = $response->Errors->ErrorCode;


									$upload_error_log = array(
										'product_id' => $product_info->id,
										'item_title' => $product_info->item_title,
										'shortmessage' => "",
										'longmessage' => "$my_error_message",
										'errorcode' => "$errorcode",
										'action'=> 'failed'
									);
								    print_r($upload_error_log);
								}

								$data['status'] = 'failed';								
								

								$err['err']=$response->Errors->ShortMessage;	
								//$err1=array('ShortMesaage'=>$response->Errors->ShortMessage);	

								$error = array(
								'id'=>$product_info->id,
								'title'=>$product_info->item_title,
								'sku'=>$product_info->sku,
								'err'=> $my_error_message
								);
								echo json_encode($error);	
								

							}													
						} 	
						else
						{ //no errors

							//get results nodes
				            $responses = $responseDoc->getElementsByTagName("AddItemResponse");
				            $itemID = "";

				            foreach ($responses as $response)
			             	{
				              $acks = $response->getElementsByTagName("Ack");
				              $ack   = $acks->item(0)->nodeValue;
				              //echo "Ack = $ack <BR />\n";   // Success if successful

				              $endTimes  = $response->getElementsByTagName("EndTime");
				              $endTime   = $endTimes->item(0)->nodeValue;
				              //echo "endTime = $endTime <BR />\n";

				              $itemIDs  = $response->getElementsByTagName("ItemID");
				              $itemID   = $itemIDs->item(0)->nodeValue;
				                 //echo "itemID = $itemID <BR />\n";

				              $linkBase = "http://cgi.sandbox.ebay.com/ws/eBayISAPI.dll?ViewItem&item=";
				              //echo "<a href=$linkBase" . $itemID . ">$itemTitle</a> <BR />";


				              $feeNodes = $responseDoc->getElementsByTagName('Fee');
				              foreach($feeNodes as $feeNode) {
				                $feeNames = $feeNode->getElementsByTagName("Name");
				                if ($feeNames->item(0)) {
				                    $feeName = $feeNames->item(0)->nodeValue;
				                    $fees = $feeNode->getElementsByTagName('Fee');  // get Fee amount nested in Fee
				                    $fee = $fees->item(0)->nodeValue;
				                    if ($fee > 0.0) {
				                        if ($feeName == 'ListingFee') {
				                          //printf("<B>$feeName : %.2f </B><BR>\n", $fee);
				                        } else {
				                          //printf("$feeName : %.2f <BR>\n", $fee);
				                        }
				                    }  // if $fee > 0
				                } // if feeName
				              } // foreach $feeNode

				            } // foreach response

				            //Insert into Database
				            $xml = simplexml_load_string($responseXml);	 
							$total_images = implode(',',$img_name);
							//echo "903";
							//print_r($xml);
							
							if(isset($responses) && $responses->Ack=="Success" || $responses->Ack=="Warning")
							{
								$data['product_details'] = json_encode($xml); 
								$data['status'] = 'uploaded';
								$data['itemID'] = $xml->ItemID;
								
								$this->db->where('id',$product_info->id);
								$query = $this->db->update('syncronize_items',$data);
								if(!$query):
								echo 'There was an Error while inserting data<br/>';
								endif;
								echo 1;exit;							
							}
							else
							{
								$data['status'] = 'failed';								
								$this->db->where('id',$product_info->id);
								$query = $this->db->update('syncronize_items',$data);
								echo 0;exit;				
							}
						}
					}
					else
					{
						$data['status'] = 'failed';								
						$this->db->where('id',$product_info->id);
						$query = $this->db->update('syncronize_items',$data);
						
						$error = array(
						'id'=>$product_info->id,
						'title'=>$product_info->item_title,
						'sku'=>$product_info->sku,
						'err'=> $my_error_message
						);
						echo json_encode($error);exit;
					}
				}
				else
				{
					echo "Upload Failed!";exit;
				}
				

//--------//\\------------Update Product Part--------------------//
//-------//  \\-----------Update Product Part--------------------//
//------//====\\----------Update Product Part--------------------//
//-----//======\\---------Update Product Part--------------------//
//----//        \\--------Update Product Part--------------------//

			     }else{
                  //  echo "Update Item Start code";
                  	$img_name =array();
					//Get the item entered
					$listingType = $product_info->listingtype;
					$itemID=$product_info->itemID;
					//$listingType = 'Chinese';
					if($credential->mode=='Sandbox')
					{	
						$primaryCategory = '377';
					}else{						
						$primaryCategory = $product_info->categoryid;
					}

					$itemTitle = $product_info->item_title;
					$startPrice = $product_info->startprice;
					$listingDuration = $product_info->listingDuration;
					//$listingDuration = 'Days_7';
					$Quantity = $product_info->Quantity;
					$safequery = $product_info->search_keyword;
					if(get_magic_quotes_gpc()) {
					// print "stripslashes!!! <br>\n";
						$itemDescription = html_entity_decode(html_entity_decode($product_info->item_description));
					} else {
						$itemDescription =  html_entity_decode(html_entity_decode($product_info->item_description));
					}

					$file_name = $product_info->template.".html";
					$file_content = file_get_contents("./mytemp/".$file_name);					

					$itemCondition = $product_info->condition;
				//	$product_images = explode(',', $product_info->image);
					
					/*******setting variable******/	
					//$siteID = 0;
					$siteID = $ebay_setting->SiteID;
					$Currency = $ebay_setting->Currency;
					$error_ID = $ebay_setting->error_ID;
					$Countryarr = explode(',', $ebay_setting->Country);
					$Country_short_codde = $Countryarr[0];
					$Country_name = $Countryarr[1];
					$startPrice_c = $startPrice." ".$Currency;
					//the call being made:
					//$verb1 = 'AddItem';					
					//$verb2 = 'AddItem';					
					$compatabilityLevel = 967; 
					$userToken = $credential->userToken;					
					$devID = $credential->devID;					
					$appID = $credential->appID;					
					$certID = $credential->certID;					
					$serverUrl = $credential->serverUrl;
					   

						/**start replacement**/	
						$requestXmlBodyimg ='<?xml version="1.0" encoding="utf-8"?>';
						$requestXmlBodyimg .= '<GetItem xmlns="urn:ebay:apis:eBLBaseComponents">';
						$requestXmlBodyimg .= '<RequesterCredentials><eBayAuthToken>'.$userToken.'</eBayAuthToken></RequesterCredentials>';
						$requestXmlBodyimg .= '<ItemID>'.$itemID.'</ItemID>';
						$requestXmlBodyimg .= '<ErrorLanguage>en_US</ErrorLanguage>';
						$requestXmlBodyimg .= ' <MessageID>1</MessageID>';
						$requestXmlBodyimg .= ' <OutputSelector>Item.PictureDetails.PictureURL</OutputSelector>';

						$requestXmlBodyimg .= '<Version>837</Version>';
						$requestXmlBodyimg .= '<WarningLevel>High</WarningLevel>';
						$requestXmlBodyimg .= '</GetItem>';		
						$headers2img = array(
						'X-EBAY-API-COMPATIBILITY-LEVEL:837',
						'X-EBAY-API-CALL-NAME:GetItem',
						'X-EBAY-API-DEV-NAME:'.$devID,
						'X-EBAY-API-APP-NAME:'.$appID,
						'X-EBAY-API-CERT-NAME:'.$certID,
						'X-EBAY-API-SITEID:'.$siteID,
						'Content-Type:text/xml;charset=utf-8'
						);						

						$sessionimg  = curl_init($serverUrl);
						curl_setopt($sessionimg, CURLOPT_POST, true);
						curl_setopt($sessionimg, CURLOPT_HTTPHEADER, $headers2img);
						curl_setopt($sessionimg, CURLOPT_POSTFIELDS, $requestXmlBodyimg);
						curl_setopt($sessionimg, CURLOPT_RETURNTRANSFER, true);

						$responsexmlimg  = curl_exec($sessionimg);
						curl_close($sessionimg);         
						$responseimg = new SimpleXMLElement($responsexmlimg);
                           // print_r($responseimg);exit;

                            if(isset($responseimg->Item->PictureDetails->PictureURL)){

						foreach ( (array) $responseimg->Item->PictureDetails->PictureURL as $index => $node )
						$picture_array[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;
					//	echo count($picture_array);

						$count = count($picture_array);
						 }else{
                            	$count=0;
                            }

						if(isset($count) && $count==1)
						{					
						$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
						$dynamic = array($picture_array[0],$itemTitle,$startPrice_c,$itemDescription);
						$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}						
						elseif($count==2)
						{
						$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
						$dynamic = array($picture_array[0],$picture_array[1],$itemTitle,$startPrice_c,$itemDescription);
						$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==3)
						{
						$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
						$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$itemTitle,$startPrice_c,$itemDescription);
						$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==4)
						{
						$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{CDNUrl}/productimages/{ProductID}.png{Third}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
						$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$picture_array[3],$itemTitle,$startPrice_c,$itemDescription);
						$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						elseif($count==5)
						{
						$static = array('{CDNUrl}/productimages/{ProductID}.png{Start}','{CDNUrl}/productimages/{ProductID}.png{First}','{CDNUrl}/productimages/{ProductID}.png{Second}','{CDNUrl}/productimages/{ProductID}.png{Third}','{CDNUrl}/productimages/{ProductID}.png{Fourth}','{Title}','{format eBayPrice, eBayCurrency}','{include field="EbayDescription"}');
						$dynamic = array($picture_array[0],$picture_array[1],$picture_array[2],$picture_array[3],$picture_array[4],$itemTitle,$startPrice_c,$itemDescription);
						$DynamicTemplate = str_replace($static,$dynamic,$file_content);
						}
						else
						{
						$DynamicTemplate=$file_content;
						}

                        // print_r($DynamicTemplate);
                        //  exit;

					$requestXmlBody = '<?xml version="1.0" encoding="utf-8"?>';
					$requestXmlBody .= '<ReviseItemRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
					$requestXmlBody .= '<RequesterCredentials><eBayAuthToken>'.$userToken.'</eBayAuthToken></RequesterCredentials>';			

					$requestXmlBody .= '<ErrorLanguage>en_US</ErrorLanguage>';
					$requestXmlBody .= '<Item>';
					$requestXmlBody .= '<ItemID>'.$itemID.'</ItemID>';

				    $requestXmlBody .= '<Description><![CDATA['.$DynamicTemplate.']]>
					    </Description>';
					$requestXmlBody .= '<DescriptionReviseMode>Replace</DescriptionReviseMode>';
					$requestXmlBody .= '<SKU>'.$product_info->sku.'</SKU>';
					$requestXmlBody .= '</Item>';
					$requestXmlBody .= '</ReviseItemRequest>';

					$headers2 = array(
								'X-EBAY-API-COMPATIBILITY-LEVEL:837',
								'X-EBAY-API-CALL-NAME:ReviseItem',
								'X-EBAY-API-DEV-NAME:'.$devID,
								'X-EBAY-API-APP-NAME:'.$appID,
								'X-EBAY-API-CERT-NAME:'.$certID,
								'X-EBAY-API-SITEID:'.$siteID,
								'Content-Type:text/xml;charset=utf-8'
								);						
						
								$session  = curl_init($serverUrl);
								curl_setopt($session, CURLOPT_POST, true);
								curl_setopt($session, CURLOPT_HTTPHEADER, $headers2);
								curl_setopt($session, CURLOPT_POSTFIELDS, $requestXmlBody);
								curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

								$responsexml = curl_exec($session);
								curl_close($session);         
								$response = new SimpleXMLElement($responsexml);

							//	print_r($response);
								//print_r($response->Ack);
					
		  // exit();
						   if(!empty($response->Ack) && $response->Ack !='Failure')
							{
								     
								$data['product_details'] = json_encode($response); 
								$data['status'] = 'uploaded';
								$data['itemID'] = $itemID;
							
								if(!$query):
								echo 'There was an Error while inserting data<br/>';
								endif;
								//$this->session->set_flashdata('success','Upload Successfully!');
								//redirect('products/','refresh');
								echo 1;	
						
							}
							else
							{
								$shortmessage= $response->Errors->ShortMessage;
								$longmessage =  $response->Errors->LongMessage;
								$errorcode = $response->Errors->ErrorCode;


								$upload_error_log = array(
										'product_id' => $product_info->id,
										'item_title' => $product_info->item_title,
										'shortmessage' => "$shortmessage",
										'longmessage' => "$longmessage",
										'errorcode' => "$errorcode",
										'action'=> 'failed'
									);

								$data['status'] = $upload_error_log;
								echo json_encode($error);	
							}											




                       
			    } 
			}
			
		}
		else
		{
			//redirect('/products', 'refresh');
		}		
	//print_r($data);


	function getItemByitemID(){

		$item_id = $this->uri->segment(3);


		$credential = $this->db->where('active',1)->get('setting')->row();
		$ebay_setting = $this->db->where('ebay_setting_id',1)->get('ebay_setting')->row();
		$compatabilityLevel = 967; 
		$userToken = $credential->userToken;					
		$devID = $credential->devID;					
		$appID = $credential->appID;					
		$certID = $credential->certID;					
		$serverUrl = $credential->serverUrl;					
		$paypalEmailAddress = $credential->paypalEmailAddress;	

		/**start replacement**/	


						

						$requestXmlBodyimg ='<?xml version="1.0" encoding="utf-8"?>';
						$requestXmlBodyimg .='<GetItemRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
						$requestXmlBodyimg .='<RequesterCredentials>';
						$requestXmlBodyimg .='<eBayAuthToken>'.$userToken.'</eBayAuthToken>';
						$requestXmlBodyimg .='</RequesterCredentials>';
						$requestXmlBodyimg .='<ErrorLanguage>en_US</ErrorLanguage>';
						$requestXmlBodyimg .='<WarningLevel>High</WarningLevel>';

						$requestXmlBodyimg .='<ItemID>'.$item_id.'</ItemID>';
						$requestXmlBodyimg .='</GetItemRequest>';



						$headers2img = array(
						'X-EBAY-API-COMPATIBILITY-LEVEL:837',
						'X-EBAY-API-CALL-NAME:GetItem',
						'X-EBAY-API-DEV-NAME:'.$devID,
						'X-EBAY-API-APP-NAME:'.$appID,
						'X-EBAY-API-CERT-NAME:'.$certID,
						'X-EBAY-API-SITEID:0',
						'Content-Type:text/xml;charset=utf-8'
						);						

						$sessionimg  = curl_init($serverUrl);
						curl_setopt($sessionimg, CURLOPT_POST, true);
						curl_setopt($sessionimg, CURLOPT_HTTPHEADER, $headers2img);
						curl_setopt($sessionimg, CURLOPT_POSTFIELDS, $requestXmlBodyimg);
						curl_setopt($sessionimg, CURLOPT_RETURNTRANSFER, true);

						$responsexmlimg  = curl_exec($sessionimg);
						curl_close($sessionimg);         
						$responseimg = new SimpleXMLElement($responsexmlimg);
						print_r($responseimg);exit;

	}
}

?>