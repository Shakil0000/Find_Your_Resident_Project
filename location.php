<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="location.css">
</head>
<body>
       <section>
      
       </section>


        <section>
                        <?php 
                            include 'navBar.php';
                        ?>
        </section>
        <section>
                <div class = "box">
                            
                                <div class="container">
                                    <h3>Division</h3>
                                    <ul>
                                       <?php 
                                         include 'connection.php';
                                         $sql = "SELECT * FROM divisions";
                                         $result = $conn->query($sql);
                         
                                         if ($result->num_rows > 0) {
                                         // output data of each row
                                         
                                         while($row = $result->fetch_assoc()) {
                                              $name= $row["name"];
                                              $id = $row["id"];
                                              
                         
                                              echo '
                                                 <li  onclick="myFunction('.$id.')" id="'.$id.'" data-value="'.$name.'">'.$name.'</li>
                                              ';
                                             
                                         }
                                       
                                         } else {
                                         echo "Something wrong";
                                         }
                                       ?>
                                    </ul>
                                </div>
                          
                                <div class="container">
                                <h3>District</h3>
                                    <ul id ="ul2">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li> 
                                    </ul>
                                </div>

                            
                                <div class="container">
                                <h3>Upozila</h3>
                                        <ul id ="ul3">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                </div>
                </div>


                <form action="" method="post" class="boxLocationIndicate">
                <input type="text" name="division" id="division" value="Division">
                <input type="text" name="district" id="district" value="District">
                <input type="text" name="upazila" id="upazila" value="Upazila">
                <button type="submit" class="btn btn-primary" name="locationSubmid">SUBMIT LOCATION</button>
                </form >

                <?php
                //  echo $_POST["division"]; 
                //  echo $_POST["district"]; 
                //  echo $_POST["upazila"]; 

                 if (isset($_POST['locationSubmid'])) {
                    session_start();
                    $_SESSION["division"] = $_POST["division"];
                    $_SESSION["district"] = $_POST["district"]; 
                    $_SESSION["upazila"] = $_POST["upazila"];
                    echo  $_SESSION["division"];
                    echo   $_SESSION["district"];
                    echo  $_SESSION["upazila"];
                    }  
                 ?>
        </section>




        
        <section>
                        <?php 
                            include 'footer.php';
                        ?>
        </section>
        <script>



const divisions = [{"id":"1","name":"Chattagram"},{"id":"2","name":"Rajshahi"},{"id":"3","name":"Khulna"},{"id":"4","name":"Barisal"},{"id":"5","name":"Sylhet"},{"id":"6","name":"Dhaka"},{"id":"7","name":"Rangpur"},{"id":"8","name":"Mymensingh"}];

const districts = [{"id":"1","division_id":"1","name":"Comilla"},{"id":"2","division_id":"1","name":"Feni"},{"id":"3","division_id":"1","name":"Brahmanbaria"},{"id":"4","division_id":"1","name":"Rangamati"},{"id":"5","division_id":"1","name":"Noakhali"},{"id":"6","division_id":"1","name":"Chandpur"},{"id":"7","division_id":"1","name":"Lakshmipur"},{"id":"8","division_id":"1","name":"Chattogram"},{"id":"9","division_id":"1","name":"Coxsbazar"},{"id":"10","division_id":"1","name":"Khagrachhari"},{"id":"11","division_id":"1","name":"Bandarban"},{"id":"12","division_id":"2","name":"Sirajganj"},{"id":"13","division_id":"2","name":"Pabna"},{"id":"14","division_id":"2","name":"Bogura"},{"id":"15","division_id":"2","name":"Rajshahi"},{"id":"16","division_id":"2","name":"Natore"},{"id":"17","division_id":"2","name":"Joypurhat"},{"id":"18","division_id":"2","name":"Chapainawabganj"},{"id":"19","division_id":"2","name":"Naogaon"},{"id":"20","division_id":"3","name":"Jashore"},{"id":"21","division_id":"3","name":"Satkhira"},{"id":"22","division_id":"3","name":"Meherpur"},{"id":"23","division_id":"3","name":"Narail"},{"id":"24","division_id":"3","name":"Chuadanga"},{"id":"25","division_id":"3","name":"Kushtia"},{"id":"26","division_id":"3","name":"Magura"},{"id":"27","division_id":"3","name":"Khulna"},{"id":"28","division_id":"3","name":"Bagerhat"},{"id":"29","division_id":"3","name":"Jhenaidah"},{"id":"30","division_id":"4","name":"Jhalakathi"},{"id":"31","division_id":"4","name":"Patuakhali"},{"id":"32","division_id":"4","name":"Pirojpur"},{"id":"33","division_id":"4","name":"Barisal"},{"id":"34","division_id":"4","name":"Bhola"},{"id":"35","division_id":"4","name":"Barguna"},{"id":"36","division_id":"5","name":"Sylhet"},{"id":"37","division_id":"5","name":"Moulvibazar"},{"id":"38","division_id":"5","name":"Habiganj"},{"id":"39","division_id":"5","name":"Sunamganj"},{"id":"40","division_id":"6","name":"Narsingdi"},{"id":"41","division_id":"6","name":"Gazipur"},{"id":"42","division_id":"6","name":"Shariatpur"},{"id":"43","division_id":"6","name":"Narayanganj"},{"id":"44","division_id":"6","name":"Tangail"},{"id":"45","division_id":"6","name":"Kishoreganj"},{"id":"46","division_id":"6","name":"Manikganj"},{"id":"47","division_id":"6","name":"Dhaka"},{"id":"48","division_id":"6","name":"Munshiganj"},{"id":"49","division_id":"6","name":"Rajbari"},{"id":"50","division_id":"6","name":"Madaripur"},{"id":"51","division_id":"6","name":"Gopalganj"},{"id":"52","division_id":"6","name":"Faridpur"},{"id":"53","division_id":"7","name":"Panchagarh"},{"id":"54","division_id":"7","name":"Dinajpur"},{"id":"55","division_id":"7","name":"Lalmonirhat"},{"id":"56","division_id":"7","name":"Nilphamari"},{"id":"57","division_id":"7","name":"Gaibandha"},{"id":"58","division_id":"7","name":"Thakurgaon"},{"id":"59","division_id":"7","name":"Rangpur"},{"id":"60","division_id":"7","name":"Kurigram"},{"id":"61","division_id":"8","name":"Sherpur"},{"id":"62","division_id":"8","name":"Mymensingh"},{"id":"63","division_id":"8","name":"Jamalpur"},{"id":"64","division_id":"8","name":"Netrokona"}];
console.log(districts);

const upazilas = [{"id":"1","district_id":"1","name":"Debidwar"},{"id":"2","district_id":"1","name":"Barura"},{"id":"3","district_id":"1","name":"Brahmanpara"},{"id":"4","district_id":"1","name":"Chandina"},{"id":"5","district_id":"1","name":"Chauddagram"},{"id":"6","district_id":"1","name":"Daudkandi"},{"id":"7","district_id":"1","name":"Homna"},{"id":"8","district_id":"1","name":"Laksam"},{"id":"9","district_id":"1","name":"Muradnagar"},{"id":"10","district_id":"1","name":"Nangalkot"},{"id":"11","district_id":"1","name":"Comilla Sadar"},{"id":"12","district_id":"1","name":"Meghna"},{"id":"13","district_id":"1","name":"Monohargonj"},{"id":"14","district_id":"1","name":"Sadarsouth"},{"id":"15","district_id":"1","name":"Titas"},{"id":"16","district_id":"1","name":"Burichang"},{"id":"17","district_id":"1","name":"Lalmai"},{"id":"18","district_id":"2","name":"Chhagalnaiya"},{"id":"19","district_id":"2","name":"Feni Sadar"},{"id":"20","district_id":"2","name":"Sonagazi"},{"id":"21","district_id":"2","name":"Fulgazi"},{"id":"22","district_id":"2","name":"Parshuram"},{"id":"23","district_id":"2","name":"Daganbhuiyan"},{"id":"24","district_id":"3","name":"Brahmanbaria Sadar"},{"id":"25","district_id":"3","name":"Kasba"},{"id":"26","district_id":"3","name":"Nasirnagar"},{"id":"27","district_id":"3","name":"Sarail"},{"id":"28","district_id":"3","name":"Ashuganj"},{"id":"29","district_id":"3","name":"Akhaura"},{"id":"30","district_id":"3","name":"Nabinagar"},{"id":"31","district_id":"3","name":"Bancharampur"},{"id":"32","district_id":"3","name":"Bijoynagar"},{"id":"33","district_id":"4","name":"Rangamati Sadar"},{"id":"34","district_id":"4","name":"Kaptai"},{"id":"35","district_id":"4","name":"Kawkhali"},{"id":"36","district_id":"4","name":"Baghaichari"},{"id":"37","district_id":"4","name":"Barkal"},{"id":"38","district_id":"4","name":"Langadu"},{"id":"39","district_id":"4","name":"Rajasthali"},{"id":"40","district_id":"4","name":"Belaichari"},{"id":"41","district_id":"4","name":"Juraichari"},{"id":"42","district_id":"4","name":"Naniarchar"},{"id":"43","district_id":"5","name":"Noakhali Sadar"},{"id":"44","district_id":"5","name":"Companiganj"},{"id":"45","district_id":"5","name":"Begumganj"},{"id":"46","district_id":"5","name":"Hatia"},{"id":"47","district_id":"5","name":"Subarnachar"},{"id":"48","district_id":"5","name":"Kabirhat"},{"id":"49","district_id":"5","name":"Senbug"},{"id":"50","district_id":"5","name":"Chatkhil"},{"id":"51","district_id":"5","name":"Sonaimori"},{"id":"52","district_id":"6","name":"Haimchar"},{"id":"53","district_id":"6","name":"Kachua"},{"id":"54","district_id":"6","name":"Shahrasti"},{"id":"55","district_id":"6","name":"Chandpur Sadar"},{"id":"56","district_id":"6","name":"Matlab South"},{"id":"57","district_id":"6","name":"Hajiganj"},{"id":"58","district_id":"6","name":"Matlab North"},{"id":"59","district_id":"6","name":"Faridgonj"},{"id":"60","district_id":"7","name":"Lakshmipur Sadar"},{"id":"61","district_id":"7","name":"Kamalnagar"},{"id":"62","district_id":"7","name":"Raipur"},{"id":"63","district_id":"7","name":"Ramgati"},{"id":"64","district_id":"7","name":"Ramganj"},{"id":"65","district_id":"8","name":"Rangunia"},{"id":"66","district_id":"8","name":"Sitakunda"},{"id":"67","district_id":"8","name":"Mirsharai"},{"id":"68","district_id":"8","name":"Patiya"},{"id":"69","district_id":"8","name":"Sandwip"},{"id":"70","district_id":"8","name":"Banshkhali"},{"id":"71","district_id":"8","name":"Boalkhali"},{"id":"72","district_id":"8","name":"Anwara"},{"id":"73","district_id":"8","name":"Chandanaish"},{"id":"74","district_id":"8","name":"Satkania"},{"id":"75","district_id":"8","name":"Lohagara"},{"id":"76","district_id":"8","name":"Hathazari"},{"id":"77","district_id":"8","name":"Fatikchhari"},{"id":"78","district_id":"8","name":"Raozan"},{"id":"79","district_id":"8","name":"Karnafuli"},{"id":"80","district_id":"9","name":"Coxsbazar Sadar"},{"id":"81","district_id":"9","name":"Chakaria"},{"id":"82","district_id":"9","name":"Kutubdia"},{"id":"83","district_id":"9","name":"Ukhiya"},{"id":"84","district_id":"9","name":"Moheshkhali"},{"id":"85","district_id":"9","name":"Pekua"},{"id":"86","district_id":"9","name":"Ramu"},{"id":"87","district_id":"9","name":"Teknaf"},{"id":"88","district_id":"10","name":"Khagrachhari Sadar"},{"id":"89","district_id":"10","name":"Dighinala"},{"id":"90","district_id":"10","name":"Panchari"},{"id":"91","district_id":"10","name":"Laxmichhari"},{"id":"92","district_id":"10","name":"Mohalchari"},{"id":"93","district_id":"10","name":"Manikchari"},{"id":"94","district_id":"10","name":"Ramgarh"},{"id":"95","district_id":"10","name":"Matiranga"},{"id":"96","district_id":"10","name":"Guimara"},{"id":"97","district_id":"11","name":"Bandarban Sadar"},{"id":"98","district_id":"11","name":"Alikadam"},{"id":"99","district_id":"11","name":"Naikhongchhari"},{"id":"100","district_id":"11","name":"Rowangchhari"},{"id":"101","district_id":"11","name":"Lama"},{"id":"102","district_id":"11","name":"Ruma"},{"id":"103","district_id":"11","name":"Thanchi"},{"id":"104","district_id":"12","name":"Belkuchi"},{"id":"105","district_id":"12","name":"Chauhali"},{"id":"106","district_id":"12","name":"Kamarkhand"},{"id":"107","district_id":"12","name":"Kazipur"},{"id":"108","district_id":"12","name":"Raigonj"},{"id":"109","district_id":"12","name":"Shahjadpur"},{"id":"110","district_id":"12","name":"Sirajganj Sadar"},{"id":"111","district_id":"12","name":"Tarash"},{"id":"112","district_id":"12","name":"Ullapara"},{"id":"113","district_id":"13","name":"Sujanagar"},{"id":"114","district_id":"13","name":"Ishurdi"},{"id":"115","district_id":"13","name":"Bhangura"},{"id":"116","district_id":"13","name":"Pabna Sadar"},{"id":"117","district_id":"13","name":"Bera"},{"id":"118","district_id":"13","name":"Atghoria"},{"id":"119","district_id":"13","name":"Chatmohar"},{"id":"120","district_id":"13","name":"Santhia"},{"id":"121","district_id":"13","name":"Faridpur"},{"id":"122","district_id":"14","name":"Kahaloo"},{"id":"123","district_id":"14","name":"Bogra Sadar"},{"id":"124","district_id":"14","name":"Shariakandi"},{"id":"125","district_id":"14","name":"Shajahanpur"},{"id":"126","district_id":"14","name":"Dupchanchia"},{"id":"127","district_id":"14","name":"Adamdighi"},{"id":"128","district_id":"14","name":"Nondigram"},{"id":"129","district_id":"14","name":"Sonatala"},{"id":"130","district_id":"14","name":"Dhunot"},{"id":"131","district_id":"14","name":"Gabtali"},{"id":"132","district_id":"14","name":"Sherpur"},{"id":"133","district_id":"14","name":"Shibganj"},{"id":"134","district_id":"15","name":"Paba"},{"id":"135","district_id":"15","name":"Durgapur"},{"id":"136","district_id":"15","name":"Mohonpur"},{"id":"137","district_id":"15","name":"Charghat"},{"id":"138","district_id":"15","name":"Puthia"},{"id":"139","district_id":"15","name":"Bagha"},{"id":"140","district_id":"15","name":"Godagari"},{"id":"141","district_id":"15","name":"Tanore"},{"id":"142","district_id":"15","name":"Bagmara"},{"id":"143","district_id":"16","name":"Natore Sadar"},{"id":"144","district_id":"16","name":"Singra"},{"id":"145","district_id":"16","name":"Baraigram"},{"id":"146","district_id":"16","name":"Bagatipara"},{"id":"147","district_id":"16","name":"Lalpur"},{"id":"148","district_id":"16","name":"Gurudaspur"},{"id":"149","district_id":"16","name":"Naldanga"},{"id":"150","district_id":"17","name":"Akkelpur"},{"id":"151","district_id":"17","name":"Kalai"},{"id":"152","district_id":"17","name":"Khetlal"},{"id":"153","district_id":"17","name":"Panchbibi"},{"id":"154","district_id":"17","name":"Joypurhat Sadar"},{"id":"155","district_id":"18","name":"Chapainawabganj Sadar"},{"id":"156","district_id":"18","name":"Gomostapur"},{"id":"157","district_id":"18","name":"Nachol"},{"id":"158","district_id":"18","name":"Bholahat"},{"id":"159","district_id":"18","name":"Shibganj"},{"id":"160","district_id":"19","name":"Mohadevpur"},{"id":"161","district_id":"19","name":"Badalgachi"},{"id":"162","district_id":"19","name":"Patnitala"},{"id":"163","district_id":"19","name":"Dhamoirhat"},{"id":"164","district_id":"19","name":"Niamatpur"},{"id":"165","district_id":"19","name":"Manda"},{"id":"166","district_id":"19","name":"Atrai"},{"id":"167","district_id":"19","name":"Raninagar"},{"id":"168","district_id":"19","name":"Naogaon Sadar"},{"id":"169","district_id":"19","name":"Porsha"},{"id":"170","district_id":"19","name":"Sapahar"},{"id":"171","district_id":"20","name":"Manirampur"},{"id":"172","district_id":"20","name":"Abhaynagar"},{"id":"173","district_id":"20","name":"Bagherpara"},{"id":"174","district_id":"20","name":"Chougachha"},{"id":"175","district_id":"20","name":"Jhikargacha"},{"id":"176","district_id":"20","name":"Keshabpur"},{"id":"177","district_id":"20","name":"Jessore Sadar"},{"id":"178","district_id":"20","name":"Sharsha"},{"id":"179","district_id":"21","name":"Assasuni"},{"id":"180","district_id":"21","name":"Debhata"},{"id":"181","district_id":"21","name":"Kalaroa"},{"id":"182","district_id":"21","name":"Satkhira Sadar"},{"id":"183","district_id":"21","name":"Shyamnagar"},{"id":"184","district_id":"21","name":"Tala"},{"id":"185","district_id":"21","name":"Kaliganj"},{"id":"186","district_id":"22","name":"Mujibnagar"},{"id":"187","district_id":"22","name":"Meherpur Sadar"},{"id":"188","district_id":"22","name":"Gangni"},{"id":"189","district_id":"23","name":"Narail Sadar"},{"id":"190","district_id":"23","name":"Lohagara"},{"id":"191","district_id":"23","name":"Kalia"},{"id":"192","district_id":"24","name":"Chuadanga Sadar"},{"id":"193","district_id":"24","name":"Alamdanga"},{"id":"194","district_id":"24","name":"Damurhuda"},{"id":"195","district_id":"24","name":"Jibannagar"},{"id":"196","district_id":"25","name":"Kushtia Sadar"},{"id":"197","district_id":"25","name":"Kumarkhali"},{"id":"198","district_id":"25","name":"Khoksa"},{"id":"199","district_id":"25","name":"Mirpur"},{"id":"200","district_id":"25","name":"Daulatpur"},{"id":"201","district_id":"25","name":"Bheramara"},{"id":"202","district_id":"26","name":"Shalikha"},{"id":"203","district_id":"26","name":"Sreepur"},{"id":"204","district_id":"26","name":"Magura Sadar"},{"id":"205","district_id":"26","name":"Mohammadpur"},{"id":"206","district_id":"27","name":"Paikgasa"},{"id":"207","district_id":"27","name":"Fultola"},{"id":"208","district_id":"27","name":"Digholia"},{"id":"209","district_id":"27","name":"Rupsha"},{"id":"210","district_id":"27","name":"Terokhada"},{"id":"211","district_id":"27","name":"Dumuria"},{"id":"212","district_id":"27","name":"Botiaghata"},{"id":"213","district_id":"27","name":"Dakop"},{"id":"214","district_id":"27","name":"Koyra"},{"id":"215","district_id":"28","name":"Fakirhat"},{"id":"216","district_id":"28","name":"Bagerhat Sadar"},{"id":"217","district_id":"28","name":"Mollahat"},{"id":"218","district_id":"28","name":"Sarankhola"},{"id":"219","district_id":"28","name":"Rampal"},{"id":"220","district_id":"28","name":"Morrelganj"},{"id":"221","district_id":"28","name":"Kachua"},{"id":"222","district_id":"28","name":"Mongla"},{"id":"223","district_id":"28","name":"Chitalmari"},{"id":"224","district_id":"29","name":"Jhenaidah Sadar"},{"id":"225","district_id":"29","name":"Shailkupa"},{"id":"226","district_id":"29","name":"Harinakundu"},{"id":"227","district_id":"29","name":"Kaliganj"},{"id":"228","district_id":"29","name":"Kotchandpur"},{"id":"229","district_id":"29","name":"Moheshpur"},{"id":"230","district_id":"30","name":"Jhalakathi Sadar"},{"id":"231","district_id":"30","name":"Kathalia"},{"id":"232","district_id":"30","name":"Nalchity"},{"id":"233","district_id":"30","name":"Rajapur"},{"id":"234","district_id":"31","name":"Bauphal"},{"id":"235","district_id":"31","name":"Patuakhali Sadar"},{"id":"236","district_id":"31","name":"Dumki"},{"id":"237","district_id":"31","name":"Dashmina"},{"id":"238","district_id":"31","name":"Kalapara"},{"id":"239","district_id":"31","name":"Mirzaganj"},{"id":"240","district_id":"31","name":"Galachipa"},{"id":"241","district_id":"31","name":"Rangabali"},{"id":"242","district_id":"32","name":"Pirojpur Sadar"},{"id":"243","district_id":"32","name":"Nazirpur"},{"id":"244","district_id":"32","name":"Kawkhali"},{"id":"245","district_id":"32","name":"Zianagar"},{"id":"246","district_id":"32","name":"Bhandaria"},{"id":"247","district_id":"32","name":"Mathbaria"},{"id":"248","district_id":"32","name":"Nesarabad"},{"id":"249","district_id":"33","name":"Barisal Sadar"},{"id":"250","district_id":"33","name":"Bakerganj"},{"id":"251","district_id":"33","name":"Babuganj"},{"id":"252","district_id":"33","name":"Wazirpur"},{"id":"253","district_id":"33","name":"Banaripara"},{"id":"254","district_id":"33","name":"Gournadi"},{"id":"255","district_id":"33","name":"Agailjhara"},{"id":"256","district_id":"33","name":"Mehendiganj"},{"id":"257","district_id":"33","name":"Muladi"},{"id":"258","district_id":"33","name":"Hizla"},{"id":"259","district_id":"34","name":"Bhola Sadar"},{"id":"260","district_id":"34","name":"Borhan Sddin"},{"id":"261","district_id":"34","name":"Charfesson"},{"id":"262","district_id":"34","name":"Doulatkhan"},{"id":"263","district_id":"34","name":"Monpura"},{"id":"264","district_id":"34","name":"Tazumuddin"},{"id":"265","district_id":"34","name":"Lalmohan"},{"id":"266","district_id":"35","name":"Amtali"},{"id":"267","district_id":"35","name":"Barguna Sadar"},{"id":"268","district_id":"35","name":"Betagi"},{"id":"269","district_id":"35","name":"Bamna"},{"id":"270","district_id":"35","name":"Pathorghata"},{"id":"271","district_id":"35","name":"Taltali"},{"id":"272","district_id":"36","name":"Balaganj"},{"id":"273","district_id":"36","name":"Beanibazar"},{"id":"274","district_id":"36","name":"Bishwanath"},{"id":"275","district_id":"36","name":"Companiganj"},{"id":"276","district_id":"36","name":"Fenchuganj"},{"id":"277","district_id":"36","name":"Golapganj"},{"id":"278","district_id":"36","name":"Gowainghat"},{"id":"279","district_id":"36","name":"Jaintiapur"},{"id":"280","district_id":"36","name":"Kanaighat"},{"id":"281","district_id":"36","name":"Sylhet Sadar"},{"id":"282","district_id":"36","name":"Zakiganj"},{"id":"283","district_id":"36","name":"Dakshinsurma"},{"id":"284","district_id":"36","name":"Osmaninagar"},{"id":"285","district_id":"37","name":"Barlekha"},{"id":"286","district_id":"37","name":"Kamolganj"},{"id":"287","district_id":"37","name":"Kulaura"},{"id":"288","district_id":"37","name":"Moulvibazar Sadar"},{"id":"289","district_id":"37","name":"Rajnagar"},{"id":"290","district_id":"37","name":"Sreemangal"},{"id":"291","district_id":"37","name":"Juri"},{"id":"292","district_id":"38","name":"Nabiganj"},{"id":"293","district_id":"38","name":"Bahubal"},{"id":"294","district_id":"38","name":"Ajmiriganj"},{"id":"295","district_id":"38","name":"Baniachong"},{"id":"296","district_id":"38","name":"Lakhai"},{"id":"297","district_id":"38","name":"Chunarughat"},{"id":"298","district_id":"38","name":"Habiganj Sadar"},{"id":"299","district_id":"38","name":"Madhabpur"},{"id":"300","district_id":"39","name":"Sunamganj Sadar"},{"id":"301","district_id":"39","name":"South Sunamganj"},{"id":"302","district_id":"39","name":"Bishwambarpur"},{"id":"303","district_id":"39","name":"Chhatak"},{"id":"304","district_id":"39","name":"Jagannathpur"},{"id":"305","district_id":"39","name":"Dowarabazar"},{"id":"306","district_id":"39","name":"Tahirpur"},{"id":"307","district_id":"39","name":"Dharmapasha"},{"id":"308","district_id":"39","name":"Jamalganj"},{"id":"309","district_id":"39","name":"Shalla"},{"id":"310","district_id":"39","name":"Derai"},{"id":"311","district_id":"40","name":"Belabo"},{"id":"312","district_id":"40","name":"Monohardi"},{"id":"313","district_id":"40","name":"Narsingdi Sadar"},{"id":"314","district_id":"40","name":"Palash"},{"id":"315","district_id":"40","name":"Raipura"},{"id":"316","district_id":"40","name":"Shibpur"},{"id":"317","district_id":"41","name":"Kaliganj"},{"id":"318","district_id":"41","name":"Kaliakair"},{"id":"319","district_id":"41","name":"Kapasia"},{"id":"320","district_id":"41","name":"Gazipur Sadar"},{"id":"321","district_id":"41","name":"Sreepur"},{"id":"322","district_id":"42","name":"Shariatpur Sadar"},{"id":"323","district_id":"42","name":"Naria"},{"id":"324","district_id":"42","name":"Zajira"},{"id":"325","district_id":"42","name":"Gosairhat"},{"id":"326","district_id":"42","name":"Bhedarganj"},{"id":"327","district_id":"42","name":"Damudya"},{"id":"328","district_id":"43","name":"Araihazar"},{"id":"329","district_id":"43","name":"Bandar"},{"id":"330","district_id":"43","name":"Narayanganj Sadar"},{"id":"331","district_id":"43","name":"Rupganj"},{"id":"332","district_id":"43","name":"Sonargaon"},{"id":"333","district_id":"44","name":"Basail"},{"id":"334","district_id":"44","name":"Bhuapur"},{"id":"335","district_id":"44","name":"Delduar"},{"id":"336","district_id":"44","name":"Ghatail"},{"id":"337","district_id":"44","name":"Gopalpur"},{"id":"338","district_id":"44","name":"Madhupur"},{"id":"339","district_id":"44","name":"Mirzapur"},{"id":"340","district_id":"44","name":"Nagarpur"},{"id":"341","district_id":"44","name":"Sakhipur"},{"id":"342","district_id":"44","name":"Tangail Sadar"},{"id":"343","district_id":"44","name":"Kalihati"},{"id":"344","district_id":"44","name":"Dhanbari"},{"id":"345","district_id":"45","name":"Itna"},{"id":"346","district_id":"45","name":"Katiadi"},{"id":"347","district_id":"45","name":"Bhairab"},{"id":"348","district_id":"45","name":"Tarail"},{"id":"349","district_id":"45","name":"Hossainpur"},{"id":"350","district_id":"45","name":"Pakundia"},{"id":"351","district_id":"45","name":"Kuliarchar"},{"id":"352","district_id":"45","name":"Kishoreganj Sadar"},{"id":"353","district_id":"45","name":"Karimgonj"},{"id":"354","district_id":"45","name":"Bajitpur"},{"id":"355","district_id":"45","name":"Austagram"},{"id":"356","district_id":"45","name":"Mithamoin"},{"id":"357","district_id":"45","name":"Nikli"},{"id":"358","district_id":"46","name":"Harirampur"},{"id":"359","district_id":"46","name":"Saturia"},{"id":"360","district_id":"46","name":"Manikganj Sadar"},{"id":"361","district_id":"46","name":"Gior"},{"id":"362","district_id":"46","name":"Shibaloy"},{"id":"363","district_id":"46","name":"Doulatpur"},{"id":"364","district_id":"46","name":"Singiar"},{"id":"365","district_id":"47","name":"Savar"},{"id":"366","district_id":"47","name":"Dhamrai"},{"id":"367","district_id":"47","name":"Keraniganj"},{"id":"368","district_id":"47","name":"Nawabganj"},{"id":"369","district_id":"47","name":"Dohar"},{"id":"370","district_id":"48","name":"Munshiganj Sadar"},{"id":"371","district_id":"48","name":"Sreenagar"},{"id":"372","district_id":"48","name":"Sirajdikhan"},{"id":"373","district_id":"48","name":"Louhajanj"},{"id":"374","district_id":"48","name":"Gajaria"},{"id":"375","district_id":"48","name":"Tongibari"},{"id":"376","district_id":"49","name":"Rajbari Sadar"},{"id":"377","district_id":"49","name":"Goalanda"},{"id":"378","district_id":"49","name":"Pangsa"},{"id":"379","district_id":"49","name":"Baliakandi"},{"id":"380","district_id":"49","name":"Kalukhali"},{"id":"381","district_id":"50","name":"Madaripur Sadar"},{"id":"382","district_id":"50","name":"Shibchar"},{"id":"383","district_id":"50","name":"Kalkini"},{"id":"384","district_id":"50","name":"Rajoir"},{"id":"385","district_id":"51","name":"Gopalganj Sadar"},{"id":"386","district_id":"51","name":"Kashiani"},{"id":"387","district_id":"51","name":"Tungipara"},{"id":"388","district_id":"51","name":"Kotalipara"},{"id":"389","district_id":"51","name":"Muksudpur"},{"id":"390","district_id":"52","name":"Faridpur Sadar"},{"id":"391","district_id":"52","name":"Alfadanga"},{"id":"392","district_id":"52","name":"Boalmari"},{"id":"393","district_id":"52","name":"Sadarpur"},{"id":"394","district_id":"52","name":"Nagarkanda"},{"id":"395","district_id":"52","name":"Bhanga"},{"id":"396","district_id":"52","name":"Charbhadrasan"},{"id":"397","district_id":"52","name":"Madhukhali"},{"id":"398","district_id":"52","name":"Saltha"},{"id":"399","district_id":"53","name":"Panchagarh Sadar"},{"id":"400","district_id":"53","name":"Debiganj"},{"id":"401","district_id":"53","name":"Boda"},{"id":"402","district_id":"53","name":"Atwari"},{"id":"403","district_id":"53","name":"Tetulia"},{"id":"404","district_id":"54","name":"Nawabganj"},{"id":"405","district_id":"54","name":"Birganj"},{"id":"406","district_id":"54","name":"Ghoraghat"},{"id":"407","district_id":"54","name":"Birampur"},{"id":"408","district_id":"54","name":"Parbatipur"},{"id":"409","district_id":"54","name":"Bochaganj"},{"id":"410","district_id":"54","name":"Kaharol"},{"id":"411","district_id":"54","name":"Fulbari"},{"id":"412","district_id":"54","name":"Dinajpur Sadar"},{"id":"413","district_id":"54","name":"Hakimpur"},{"id":"414","district_id":"54","name":"Khansama"},{"id":"415","district_id":"54","name":"Birol"},{"id":"416","district_id":"54","name":"Chirirbandar"},{"id":"417","district_id":"55","name":"Lalmonirhat Sadar"},{"id":"418","district_id":"55","name":"Kaliganj"},{"id":"419","district_id":"55","name":"Hatibandha"},{"id":"420","district_id":"55","name":"Patgram"},{"id":"421","district_id":"55","name":"Aditmari"},{"id":"422","district_id":"56","name":"Syedpur"},{"id":"423","district_id":"56","name":"Domar"},{"id":"424","district_id":"56","name":"Dimla"},{"id":"425","district_id":"56","name":"Jaldhaka"},{"id":"426","district_id":"56","name":"Kishorganj"},{"id":"427","district_id":"56","name":"Nilphamari Sadar"},{"id":"428","district_id":"57","name":"Sadullapur"},{"id":"429","district_id":"57","name":"Gaibandha Sadar"},{"id":"430","district_id":"57","name":"Palashbari"},{"id":"431","district_id":"57","name":"Saghata"},{"id":"432","district_id":"57","name":"Gobindaganj"},{"id":"433","district_id":"57","name":"Sundarganj"},{"id":"434","district_id":"57","name":"Phulchari"},{"id":"435","district_id":"58","name":"Thakurgaon Sadar"},{"id":"436","district_id":"58","name":"Pirganj"},{"id":"437","district_id":"58","name":"Ranisankail"},{"id":"438","district_id":"58","name":"Haripur"},{"id":"439","district_id":"58","name":"Baliadangi"},{"id":"440","district_id":"59","name":"Rangpur Sadar"},{"id":"441","district_id":"59","name":"Gangachara"},{"id":"442","district_id":"59","name":"Taragonj"},{"id":"443","district_id":"59","name":"Badargonj"},{"id":"444","district_id":"59","name":"Mithapukur"},{"id":"445","district_id":"59","name":"Pirgonj"},{"id":"446","district_id":"59","name":"Kaunia"},{"id":"447","district_id":"59","name":"Pirgacha"},{"id":"448","district_id":"60","name":"Kurigram Sadar"},{"id":"449","district_id":"60","name":"Nageshwari"},{"id":"450","district_id":"60","name":"Bhurungamari"},{"id":"451","district_id":"60","name":"Phulbari"},{"id":"452","district_id":"60","name":"Rajarhat"},{"id":"453","district_id":"60","name":"Ulipur"},{"id":"454","district_id":"60","name":"Chilmari"},{"id":"455","district_id":"60","name":"Rowmari"},{"id":"456","district_id":"60","name":"Charrajibpur"},{"id":"457","district_id":"61","name":"Sherpur Sadar"},{"id":"458","district_id":"61","name":"Nalitabari"},{"id":"459","district_id":"61","name":"Sreebordi"},{"id":"460","district_id":"61","name":"Nokla"},{"id":"461","district_id":"61","name":"Jhenaigati"},{"id":"462","district_id":"62","name":"Fulbaria"},{"id":"463","district_id":"62","name":"Trishal"},{"id":"464","district_id":"62","name":"Bhaluka"},{"id":"465","district_id":"62","name":"Muktagacha"},{"id":"466","district_id":"62","name":"Mymensingh Sadar"},{"id":"467","district_id":"62","name":"Dhobaura"},{"id":"468","district_id":"62","name":"Phulpur"},{"id":"469","district_id":"62","name":"Haluaghat"},{"id":"470","district_id":"62","name":"Gouripur"},{"id":"471","district_id":"62","name":"Gafargaon"},{"id":"472","district_id":"62","name":"Iswarganj"},{"id":"473","district_id":"62","name":"Nandail"},{"id":"474","district_id":"62","name":"Tarakanda"},{"id":"475","district_id":"63","name":"Jamalpur Sadar"},{"id":"476","district_id":"63","name":"Melandah"},{"id":"477","district_id":"63","name":"Islampur"},{"id":"478","district_id":"63","name":"Dewangonj"},{"id":"479","district_id":"63","name":"Sarishabari"},{"id":"480","district_id":"63","name":"Madarganj"},{"id":"481","district_id":"63","name":"Bokshiganj"},{"id":"482","district_id":"64","name":"Barhatta"},{"id":"483","district_id":"64","name":"Durgapur"},{"id":"484","district_id":"64","name":"Kendua"},{"id":"485","district_id":"64","name":"Atpara"},{"id":"486","district_id":"64","name":"Madan"},{"id":"487","district_id":"64","name":"Khaliajuri"},{"id":"488","district_id":"64","name":"Kalmakanda"},{"id":"489","district_id":"64","name":"Mohongonj"},{"id":"490","district_id":"64","name":"Purbadhala"},{"id":"491","district_id":"64","name":"Netrokona Sadar"},{"id":"492","district_id":"9","name":"Eidgaon"},{"id":"493","district_id":"39","name":"Madhyanagar"},{"id":"494","district_id":"50","name":"Dasar"}];
 console.log(upazilas);









function myFunction(idd) {
    
    console.log(document.getElementById("division").value);
    const ul2 = document.getElementById("ul2");
    ul2.innerHTML = "";
    let setOFLi = "";
    for (let i = 0; i < 64; i++) {
        if(idd == districts[i].division_id){
            const li = `<li onclick="myFunctionDistrict(${districts[i].id})" id=${districts[i].id} data-value=${districts[i].name}>${districts[i].name}</li>`;
            setOFLi = setOFLi+li;
        }
        
    }

    ul2.innerHTML = setOFLi;
    const ul3 = document.getElementById("ul3");
    ul3.innerHTML = "<li></li><li></li><li></li><li></li><li></li><li></li><li></li>";

    // const ul2 = document.getElementById("ul2");
    // ul2.innerHTML = "<li></li><li></li><li></li><li></li><li></li><li></li><li></li>";
    // const ul3 = document.getElementById("ul3");
    // ul3.innerHTML = "<li></li><li></li><li></li><li></li><li></li><li></li><li></li>";

    let dName = "";
    for (let j = 0; j < 8; j++) {
       if(idd == divisions[j].id){
        dName = divisions[j].name;
        document.getElementById("division").value = dName;
       }
        
    }
    
}


// Second funtion for Ul2
function myFunctionDistrict(idd){
    document.getElementById("district").value = idd;
    const ul3 = document.getElementById("ul3");
    ul3.innerHTML = "";
    let setOFLi = "";
    for (let i = 0; i < 494; i++) {
        if(idd == upazilas[i].district_id){
            const li = `<li onclick="myFunctionUpazila(${upazilas[i].id})" id=${upazilas[i].id} data-value=${upazilas[i].name}>${upazilas[i].name}</li>`;
            setOFLi = setOFLi+li;
        }
        
    }

    ul3.innerHTML = setOFLi;

    let dName = "";
    for (let j = 0; j < 64; j++) {
       if(idd == districts[j].id){
        dName = districts[j].name;
        document.getElementById("district").value = dName;
       }
        
    }
}



function myFunctionUpazila(idd){
    document.getElementById("upazila").value = idd;

    let dName = "";
    for (let j = 0; j < 494; j++) {
       if(idd == upazilas[j].id){
        dName = upazilas[j].name;
        document.getElementById("upazila").value = dName;
       }
        
    }
}



























</script>
</body>
</html>