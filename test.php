<?php 

for ($i=0; $i < 1; $i++) { 
    # code...

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.digikey.com/en/products/detail/tubedepot/NOS-12BA6/10491066');
// curl_setopt($ch, CURLOPT_URL, 'https://www.digikey.com/en/products/filter/heat-tape-heat-blankets-and-heaters/1004?s=N4IgrCBcoA5QTAGhDOl5gL6aA');
// curl_setopt($ch, CURLOPT_URL, 'https://www.digikey.com/en/products');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: www.digikey.com';
$headers[] = 'Sec-Ch-Ua: \" Not;A Brand\";v=\"99\", \"Google Chrome\";v=\"97\", \"Chromium\";v=\"97\"';
$headers[] = 'X-Currency: USD';
$headers[] = 'Accept-Language: en-us';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36';
$headers[] = 'X-Request-Id: a2d71bf5-090e-41ab-afa1-2e65fd0da3ac';
$headers[] = 'Sec-Ch-Ua-Platform: \"Linux\"';
$headers[] = 'Accept: */*';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.digikey.com/en/products/filter/heat-tape-heat-blankets-and-heaters/1005?s=N4IgrCBcoA5QTAGhDOl5gL6aA';
$headers[] = 'Cookie: _ENV["search=%7B%22usage%22%3A%7B%22dailyCount%22%3A1%2C%22lastRequest%22%3A%222022-02-01T08%3A49%3A11.166Z%22%7D%2C%22version%22%3A1%7D; ai_user=SJHUjvnYPIfatdL4BP7+z1|2022-02-01T08:49:11.167Z; EG-U-ID=A9af8c19bc-857b-482d-9bb5-7cdc0073101f; EG-S-ID=E1de85026f-b160-41d1-a950-86492d97672c; pf-accept-language=en-US; ping-accept-language=en-US; dkuhint=false; ASP.NET_SessionId=nx1zqtguxt4ggjlapa5vbudk; SC_ANALYTICS_GLOBAL_COOKIE=1d6c9be2f7a94c9aa48e6c9032332b24|False; _ga=GA1.2.629094884.1643705360; _gid=GA1.2.463282694.1643705360; _gcl_au=1.1.108763355.1643705360; _cs_c=0; _evga_542b=46c996ef59dc514f.; TS0138bc45=01460246b6da0f94e4ffde6a115585757869f08a0db2e6bc46d9d4fb4344a976944a35959cdd82eab941527b4dc5bc4cad638441e4; TS301b3218027=08374f23c1ab2000b589969207ab4e263a31f313e9043fd9ef1950c23e0837e61e6a6cf7c47469d10830d63ce11130008ecf1879877ba4bdc29ce615d874c2c27d5aa4844817da7e155d5f3acbf60e1f9050d0d38b08aa06b4ba78fae338e558; _abck=C9308282A9395BB931DAA46BD52A3830~0~YAAQRoVlX7JZgqV+AQAAjvbStgceH4Ch6vYyXSLz6kg0oR6/JG+fGdLk5YqegtmTdH1Qv5gIqhvgoOj4CNLPnhHqlo4MHnj72leiXbQfh982BHE8FMp5CgZ5+tXMUJwQZ9xdACZKOuRJwTiC8GgJDr8wLAXkZSRrC2FIgZ+/ZbayJSfLPKOEtxW8U+GZ2KBjRwf/T6Adem0wx7IGS59mRm9BB5dnFWA+PhXRt7fOwzzqoHX0Nhm+aI+cExlvJugCDkotChO0iYLunlgVC7uKzqhTBQSm/IuzZtroEnM8R3OwidjXjPweXslHBkxC7hzVKrn/AWt+pLtegOJerT8HC4CKxPIYOdGIT7kgPb4ybpPCGDcBlYy7yZxyzP6V5ftdWET53ZeqdlSQrkbRc5e0blIltArGisct~-1~-1~-1; bm_sz=6AABBD2C4466C30D3508C37D88635B2E~YAAQRoVlX7RZgqV+AQAAjvbStg6THZ8VyNHMKkn8xnEE+7YUFPvRE4yG7m9+kKMrSmhII4S/60Q3+e4w9KRPII9HQE2Kg9iboBqImddpYjAeI6X+++y9OsE2dzSnq/1M24OZjC2ba2LBnZpLbd7qUv9JSHB4UzBGeuXOZszG7jdpUbvbkbE0VdoAXOIjaInG950NyWTWnx96HVDZ0RqVJCLGSDDUESwvV4OD0lZi9cufT3Rkhk4QlZ+xH4k1xy1+Et+o23iJ3XEQ9QICxqAs5BoJFV48JgFo9twDIm7rxTpGhFSk~4538675~3425589; ak_bmsc=F425A8C512D926BF14C8D6EBB5030436~000000000000000000000000000000~YAAQRoVlX/RZgqV+AQAACf7Stg4HUgioiZL87hz9qAyha048m7lgRPgvSZU4dTeMtuQnN5OrNna/mhPr+UbtZUrlRMA5cHW04LS7JhRaAhINNz57FGdkMZdgkmb8b57zpzVkOW90/UBl0FDOSr2jE40o92hsjBg/CI/vlyvK3hZJdTdKRUtc8zr2y/auj48Fc2T8jhBDGE3QIJ417jNloeGD0Ro03ZT/efJA7zH1u7NCKueDVf0n5dsgyT3rOhbH3oM/cEjh7ur5HrlpDG0zKQP7gpYt1m46jOGVdGttkCBcuEYbc3nXc28q49XphUpRx13RGOJ0TcLr/eyWptnO0j+bKa9WcsRW0mKgJyXw0YrYh7705H/FoQF5Ag24qHVTvu/E+nbYoOPqGzzXe3eqfT4hQaDTx5pDWdIx7bXIP7vz785xCHPswboj1Nf6xkbiVIIbrCmZIF+ibmNOYILp1nVRt3spSP3bqW3xsNM1jXKk3KreWVlyW+M/UA==; _cs_mk=0.49906199011257146_1643744788736; TS01173021=01f9ef228d682530360e4e36b2ddbb8b77e9492688b10edaae1a3be977ef2c3e18421812cc4e0ec68bae0f113fa1d50ff9c303906c; TS018060f7=01460246b6bb6855c28bdd810fbbc8e6d4bcf8e3d9b59251982ff0ce7f924ae7d5b1e219200cc56caea6da903fcf5394a0ad822486; sid=180144037251298010xZ2UD946BPLJTARGWKLXVBMP3BGHOSS7BVMVO550IB7UR27U5LDKKYED5O3L6SC7Z; ps-eudo-sid=%7b%22CustomerId%22%3a0%2c%22LoginId%22%3a0%2c%22CustomerClass%22%3a0%2c%22Currency%22%3a%22USD%22%2c%22OrderModel%22%3a-1%2c%22UserIdentity%22%3a0%7d; website#lang=en; TS01d239f3=01460246b67f1e4a8ac5328e8898f230423acd55ec580730289941d8f72a2a8e213fb66ad5ad0cf84661617dd307b83932733b269d; TS016ae541=01460246b67f1e4a8ac5328e8898f230423acd55ec580730289941d8f72a2a8e213fb66ad5ad0cf84661617dd307b83932733b269d; TSe14c7dc7027=08374f23c1ab20003334a3baf1a30b6de88b894e9e8280c0d548d3db27b8547a8cf13fea4f3470f908aba85fba113000efc11e773dd789f3a781013ea6ef4a1d547ce673b351c14e5e07f729c5ae5e320b368442f7ea5bca583f976b5a65e132; TS809e22c5027=08374f23c1ab2000dae70274d8849541de1ad8f3aa0182e059dcfdc7ffdc54488686b238ff61048008cfd2cb0b113000172d39dfa7bc763387f5ec30d251fc3754c8ffd0d978aaaa1ee2b1daac4f0979679f1b8ff821dc6558c1683662537547; TS013c3a0b=01460246b67407f0393442a87f6a31e9509b4b57cd92465e3d98b5c40c906fd5ac5edd54fb7e3dc9f4e5d0c9fc9f42ba9e6a17ed47; TS0184e6b9=01460246b67407f0393442a87f6a31e9509b4b57cd92465e3d98b5c40c906fd5ac5edd54fb7e3dc9f4e5d0c9fc9f42ba9e6a17ed47; TS605a4192027=08374f23c1ab20003cd780598248c82a8dd70272eb3159e87c99f483f2201044f6a5e4c24050f3cb088aebc073113000c931f54fa447feac87f5ec30d251fc37fdbe8366424540e854eba8d007e0970ec05ade228094f851c4d7cdff59eabd90; TS01d5128f=01460246b67755ab9f960f4d27bef8ad7d755d69a037390148dae93433dffe4de07a7e65d2525b03f619c0d41bbf71121a033f4796; TSbafe380b027=08374f23c1ab2000ed0555ff6bfba5efae1ae3b8751ee36573d373ca31512d9fedbde0e565e90b1408532f0202113000f224a31cfd7e8abd87f5ec30d251fc37510ee01ebaecdba772cb7ce21fc5548e4f971d0aab6ff6b4f32850acd4b690d5; TSc580adf4027=08374f23c1ab200056720fde7b325cb4d974cbb272669f4ad8804a5c31a7212e516048a5f509c04f080bc5b81011300056d063fa62640ba387f5ec30d251fc37210fa5eb08bbcd2a801f109d8ea5e5fd8a9d0101419f1c08194f10e6a874c77f; QSI_HistorySession=; RT=\"z=1&dm=digikey.com&si=ylrsb8kt4eo&ss=kz4jk37l&sl=0&tt=0\"; _uetsid=d8d61740833b11ec904dad764b1b48b5; _uetvid=d8d67240833b11ecadd435ad6670dad4; RT=\"z=1&dm=www.digikey.com&si=065f2a4c-9116-412e-abb1-bb4481a04a2d&ss=kz4j7d7i&sl=3&tt=d19&bcn=%2F%2F02179910.akstat.io%2F&ld=azmu&nu=4qm09olb&cl=bun4&ul=dhox&hd=dhpf\"; ai_session=qcp4JXBifm6Cbbcr8RfvzP|1643744785089|1643745417764; TScaafd3c3027=08205709cbab20000a3d7044c56eeeefd9d844d86e52bb0641cfee89cc4c4ed816d169de69ac422308681341d71130004235e73271cad2ea2905237e9bbed2894928ecbdecc9e25604e69a1a37bcf29733d48b3096a34a2a7dd6f4f6e54a78f3; utag_main=v_id:017eb47947a000584e6dcead092805068002306000bd0_sn:2_se:9_ss:0_st:1643747225845ses_id:1643744787341%3Bexp-session_pn:5%3Bexp-session; _gat_Production=1; _cs_cvars=%7B%221%22%3A%5B%22Page%20Title%22%2C%22Part%20Search%20-%20Family%20Page%22%5D%2C%222%22%3A%5B%22Page%20Site%22%2C%22US%22%5D%2C%223%22%3A%5B%22Page%20Type%22%2C%22PS%22%5D%2C%224%22%3A%5B%22Page%20Sub%20Type%22%2C%22FAM%22%5D%2C%225%22%3A%5B%22Page%20Content%20Group%22%2C%22Part%20Search%22%5D%2C%226%22%3A%5B%22PageContentSubGroup%22%2C%22Category%20Page%22%5D%2C%227%22%3A%5B%22Page%20ID%22%2C%221005%22%5D%2C%228%22%3A%5B%22Page%20Language%22%2C%22en%22%5D%2C%2212%22%3A%5B%22Part%20Substitutes%22%2C%22False%22%5D%2C%2216%22%3A%5B%22L1%20cat%22%2C%22Fans%2C%20Thermal%20Management%22%5D%7D; _cs_id=55000474-b256-a956-dca7-3154bf7d3da9.1643705360.2.1643745430.1643744789.1.1677869360416; _cs_s=5.5.0.1643747230587; bm_sv=DA25810F213606E0D5993CAC9E86DE8F~cbeft565dHg7wn+HWTtBorFN+K+Ce19cV9li03aBnECDRalCRsWLMSfOWep14Axu0YogTa5Nt/94kQPnej21z24tD2VJD+IsK4pYu9jjOFQ4xE2Us+iF35ikTGuEZKaVTl5gcVnznNwu5JozNjc9e1Z+/lt1t09adCsJx3cD18I=; utm_data_x=ref_page_event%3DChange%20Page%20in%20Search%20Results%2Chtml_element1%3Dbtn-page-3%2Chtml_element2%3Dpagination-container%2Chtml_element3%3DMuiGrid-root%20MuiGrid-item%2Chtml_element4%3DMuiGrid-root%20MuiGrid-container%20MuiGrid-spacing-xs-2%20MuiGrid-align-items-xs-center%2Cundefined%3DMuiGrid-root%20MuiGrid-item%2CExtRun%3D409.1%2Cpersonalization_program%3D%2Cpersonalization_creative%3D%2Cref_page_type%3DPS%2Cref_page_sub_type%3DFAM%2Cref_page_id%3D1005%2Cccookie%3D2022-02-01T08%3A49%3A19.784Z%2Cref_page_state%3DSort%20Order%20Test%20-%20Default%2Cref_pers_state%3D%7B%22search2%22%3A%22classic%22%40%40%22PAR%22%3A%22Expanded%22%40%40%22PLS%22%3A%22Scrolling%22%7D%2Cref_part_search_term%3D%2Cref_part_search_term_ext%3D%2CExtRun%3D409.1%7C429.2%7C428.1%7C357.5"]';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
var_dump($i);
if ($i > 980) {
}
var_dump($result);
// file_get_contents('https://pushall.ru/api.php?type=self&id=113165&key=bc5ca8c3ff0d7fc5c0fd2ac03cef21f9&text=Тtsdfg');
}
?>