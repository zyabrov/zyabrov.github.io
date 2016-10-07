<?php 

session_start();

$_SESSION['utm_source']='1';
$_SESSION['utm_medium']='2';
$_SESSION['utm_term']='3';
$_SESSION['utm_content']='4';
$_SESSION['utm_campaign']='5';
$_SESSION['ip']='5';

$id = rand (100000, 999999);
$user=array(
  'USER_LOGIN'=>'ivan@vektor-it.ru', 
  'USER_HASH'=>'b0c672a23a97ae7d6f85e459fd5306b2'
);
$subdomain='videomobil'; 
$time=time();


$data['request']['unsorted'] = array(
  'category' => 'forms',
  'add' => array (
    array(
      'source' => 'videomobil.su',
      'data' => array(
        'leads' => array(
          array(
            'custom_fields' => array( 
              array(
                'id' => 219219,
                'values' => array(
                  array(
                    'value' => $_POST['name'],
                  ),
                ),
              ),
              array(
                'id' => 235904,
                'values' => array(
                  array(
                    'value' => $_POST['phone'],
                  ),
                ),
              ),
              array(
                'id' => 236178,
                'values' => array(
                  array(
                    'value' => $_POST['email'],
                  ),
                ),
              ),	
              array(
                'id' => 406696,
                'values' => array(
                  array(
                    'value' => $_POST['quantity'],
                  ),
                ),
              ),			  

              array(
                'id' => 406684,
                'values' => array(
                  array(
                    'value' => $_SESSION['utm_source'],
                  ),
                ),
              ),
              array(
                'id' => 406686,
                'values' => array(
                  array(
                    'value' => $_SESSION['utm_medium'],
                  ),
                ),
              ),
              array(
                'id' => 406688,
                'values' => array(
                  array(
                    'value' => $_SESSION['utm_term'],
                  ),
                ),
              ),
              array(
                'id' => 406690,
                'values' => array(
                  array(
                    'value' => $_SESSION['utm_content'],
                  ),
                ),
              ),
              array(
                'id' => 406692,
                'values' => array(
                  array(
                    'value' => $_SESSION['utm_campaign'],
                  ),
                ),
              ),
              array(
                'id' => 406694,
                'values' => array(
                  array(
                    'value' => $_POST['comment'],
                  ),
                ),
              ),

			  
			  
            ),
            'name' => ''.$_POST['formName'].' (videomobil.su)',
          ),
        ),
        'contacts' => array(
          array(
            'name' => $_POST['name'],
            'custom_fields' => array(
              array(
                'id' => 198966,
                'values' => array(
                  array(
                    'enum' => 461704,
                    'value' => $_POST['phone'],
                  ),
                ),
              ),
              array(
                'id' => 198968,
                'values' => array(
                  array(
                    'enum' => 461716,
                    'value' => $_POST['email'],
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'source_data' => array(
        'data' => array(
          'name_1' => array(
            'type' => 'text',
            'id' => 'name',
            'element_type' => '1',
            'name' => 'Имя',
            'value' => $_POST['name'],
          ),
          '427006_1' => array(
            'type' => 'multitext',
            'id' => '427006',
            'element_type' => '1',
            'name' => 'Телефон',
            'value' => array(
              $_POST['phone'],
            ),
          ),
          '427007_1' => array(
            'type' => 'multitext',
            'id' => '427007',
            'element_type' => '1',
            'name' => 'E-mail',
            'value' => array(
              $_POST['email'],
            ),
          ),
		  '427008_1' => array(
            'type' => 'multitext',
            'id' => '427008',
            'element_type' => '1',
            'name' => 'Цель',
            'value' => array(
              $_POST['formName'],
            ),
          ),
		  '427014_1' => array(
            'type' => 'multitext',
            'id' => '427014',
            'element_type' => '1',
            'name' => 'IP',
            'value' => array(
              $_SESSION['ip'],
            ),
          ),		  
		  '427009_1' => array(
            'type' => 'multitext',
            'id' => '427009',
            'element_type' => '1',
            'name' => 'UTM Source',
            'value' => array(
              $_SESSION['utm_source'],
            ),
          ),
		  '427010_1' => array(
            'type' => 'multitext',
            'id' => '427010',
            'element_type' => '1',
            'name' => 'UTM Medium',
            'value' => array(
              $_SESSION['utm_medium'],
            ),
          ),
		  '427011_1' => array(
            'type' => 'multitext',
            'id' => '427011',
            'element_type' => '1',
            'name' => 'UTM Term',
            'value' => array(
              $_SESSION['utm_term'],
            ),
          ),
		  '427012_1' => array(
            'type' => 'multitext',
            'id' => '427012',
            'element_type' => '1',
            'name' => 'UTM Content',
            'value' => array(
              $_SESSION['utm_content'],
            ),
          ),
		  '427013_1' => array(
            'type' => 'multitext',
            'id' => '427013',
            'element_type' => '1',
            'name' => 'UTM Campaing',
            'value' => array(
              $_SESSION['utm_campaign'],
            ),
          ),		  
        ),
        'form_id' => $id,
        'form_type' => 1,
        'origin' => array(
          'ip' => $_SESSION['ip'],

        ),
        'date' => $time,
        'from' => 'videomobil.su',
        'form_name' => $_POST['formName'],
      ),
    ),
  ),
);

$link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json';

$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($user));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); 
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0); 
$out=curl_exec($curl); 
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE); 
curl_close($curl); 

$link='https://'.$subdomain.'.amocrm.ru/api/unsorted/add/?api_key=b0c672a23a97ae7d6f85e459fd5306b2&login=ivan@vektor-it.ru';
$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_HTTPHEADER,['Accept: application/json']);
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
echo  $out=curl_exec($curl);
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
curl_close($curl);

?>