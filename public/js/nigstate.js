
$(document).ready(function(){
   
   //list the lga
var Abia = ['Select LGA/Area...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'Umuahia South', 'Umu Nneochi'];
var Adamawa = ['Select LGA/Area...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
var AkwaIbom = ['Select LGA/Area...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];
var Anambra = ['Select LGA/Area...', 'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];
var Bauchi = ['Select LGA/Area...', 'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas-Gadau', 'Jama are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', 'Toro', 'Warji', 'Zaki'];
var Bayelsa = ['Select LGA/Area...', 'Brass', 'Ekeremor', 'Kolokuma Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];
var Benue = ['Select LGA/Area...', 'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];
var Borno = ['Select LGA/Area...', 'Abadam', 'Askira-Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala-Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];
var CrossRiver = ['Select LGA/Area...', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'];
var Delta = ['Select LGA/Area...', 'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];
var Ebonyi = ['Select LGA/Area...', 'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];
var Edo = ['Select LGA/Area...', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];
var Ekiti = ['Select LGA/Area...', 'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun-Ifelodun', 'Ise-Orun', 'Moba', 'Oye'];
var Enugu = ['Select LGA/Area...', 'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'];
var FCT = ['Select LGA/Area...', 'Abaji', 'Bwari', 'Gwagwalada', 'Lugbe', 'Kuje', 'Kwali', 'AMAC'];
var Gombe = ['Select LGA/Area...', 'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu-Deba'];
var Imo = ['Select LGA/Area...', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte-Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji-Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];
var Jigawa = ['Select LGA/Area...', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];
var Kaduna = ['Select LGA/Area...', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];
var Kano = ['Select LGA/Area...', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];
var Katsina = ['Select LGA/Area...', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];
var Kebbi = ['Select LGA/Area...', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];
var Kogi = ['Select LGA/Area...', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba Bunu', 'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];
var Kwara = ['Select LGA/Area...', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];
var Lagos = ['Select LGA/Area...', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];
var Nassarawa = ['Select LGA/Area...', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba'];
var Niger = ['Select LGA/Area...', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];
var Ogun = ['Select LGA/Area...', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];
var Ondo = ['Select LGA/Area...', 'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji-Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];
var Osun = ['Select LGA/Area...', 'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];
var Oyo = ['Select LGA/Area...', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East', 'Saki West', 'Surulere'];
var Plateau = ['Select LGA/Area...', 'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South', 'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua an Pan', 'Riyom', 'Shendam', 'Wase'];
var Rivers = ['Select LGA/Area...', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio Akpor', 'Ogba Egbema Ndoni', 'Ogu Bolo', 'Okrika', 'Omuma', 'Opobo Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];
var Sokoto = ['Select LGA/Area...', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];
var Taraba = ['Select LGA/Area...', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];
var Yobe = ['Select LGA/Area...', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];

var Zamfara = ['Select LGA/Area...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];


//populating resident lga
     $("#resident").change(function(){

           if($("#resident").val() == 'Ondo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ondo.length; i++) {
$("#residentlga").append('<option value='+Ondo[i]+'>'+Ondo[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Osun'){
          $("#residentlga").html('');
     for  (var i = 0; i < Osun.length; i++) {
$("#residentlga").append('<option value='+Osun[i]+'>'+Osun[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Oyo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Oyo.length; i++) {
$("#residentlga").append('<option value='+Oyo[i]+'>'+Oyo[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Plateau'){
          $("#residentlga").html('');
     for  (var i = 0; i < Plateau.length; i++) {
$("#residentlga").append('<option value='+Plateau[i]+'>'+Plateau[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Rivers'){
          $("#residentlga").html('');
     for  (var i = 0; i < Rivers.length; i++) {
$("#residentlga").append('<option value='+Rivers[i]+'>'+Rivers[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Sokoto'){
          $("#residentlga").html('');
     for  (var i = 0; i < Sokoto.length; i++) {
$("#residentlga").append('<option value='+Sokoto[i]+'>'+Sokoto[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Taraba'){
          $("#residentlga").html('');
     for  (var i = 0; i < Taraba.length; i++) {
$("#residentlga").append('<option value='+Taraba[i]+'>'+Taraba[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Yobe'){
          $("#residentlga").html('');
     for  (var i = 0; i < Yobe.length; i++) {
$("#residentlga").append('<option value='+Yobe[i]+'>'+Yobe[i]+'</option>');
       }
    }


          if($("#resident").val() == 'Kebbi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kebbi.length; i++) {
$("#residentlga").append('<option value='+Kebbi[i]+'>'+Kebbi[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Kwara'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kwara.length; i++) {
$("#residentlga").append('<option value='+Kwara[i]+'>'+Kwara[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Nassarawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Nassarawa.length; i++) {
$("#residentlga").append('<option value='+Nassarawa[i]+'>'+Nassarawa[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Niger'){
          $("#residentlga").html('');
     for  (var i = 0; i < Niger.length; i++) {
$("#residentlga").append('<option value='+Niger[i]+'>'+Niger[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Ogun'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ogun.length; i++) {
$("#residentlga").append('<option value='+Ogun[i]+'>'+Ogun[i]+'</option>');
       }
    }


         if($("#resident").val() == 'Imo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#residentlga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Jigawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Jigawa.length; i++) {
$("#residentlga").append('<option value='+Jigawa[i]+'>'+Jigawa[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kaduna'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kaduna.length; i++) {
$("#residentlga").append('<option value='+Kaduna[i]+'>'+Kaduna[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kano'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kano.length; i++) {
$("#residentlga").append('<option value='+Kano[i]+'>'+Kano[i]+'</option>');
       }
    }


     if($("#resident").val() == 'Katsina'){
          $("#residentlga").html('');
     for  (var i = 0; i < Katsina.length; i++) {
$("#residentlga").append('<option value='+Katsina[i]+'>'+Katsina[i]+'</option>');
       }
    }

  if($("#resident").val() == 'Ebonyi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ebonyi.length; i++) {
$("#residentlga").append('<option value='+Ebonyi[i]+'>'+Ebonyi[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Edo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Edo.length; i++) {
$("#residentlga").append('<option value='+Edo[i]+'>'+Edo[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Ekiti'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ekiti.length; i++) {
$("#residentlga").append('<option value='+Ekiti[i]+'>'+Ekiti[i]+'</option>');
       }
    }

      if($("#resident").val() == 'FCT'){
          $("#residentlga").html('');
     for  (var i = 0; i < FCT.length; i++) {
$("#residentlga").append('<option value='+FCT[i]+'>'+FCT[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Gombe'){
          $("#residentlga").html('');
     for  (var i = 0; i < Gombe.length; i++) {
$("#residentlga").append('<option value='+Gombe[i]+'>'+Gombe[i]+'</option>');
       }
    }


        if($("#resident").val() == 'Bayelsa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Bayelsa.length; i++) {
$("#residentlga").append('<option value='+Bayelsa[i]+'>'+Bayelsa[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Benue'){
          $("#residentlga").html('');
     for  (var i = 0; i < Benue.length; i++) {
$("#residentlga").append('<option value='+Benue[i]+'>'+Benue[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Borno'){
          $("#residentlga").html('');
     for  (var i = 0; i < Borno.length; i++) {
$("#residentlga").append('<option value='+Borno[i]+'>'+Borno[i]+'</option>');
       }
    }

    if($("#resident").val() == 'CrossRiver'){
          $("#residentlga").html('');
     for  (var i = 0; i < CrossRiver.length; i++) {
$("#residentlga").append('<option value='+CrossRiver[i]+'>'+CrossRiver[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Delta'){
          $("#residentlga").html('');
     for  (var i = 0; i < Delta.length; i++) {
$("#residentlga").append('<option value='+Delta[i]+'>'+Delta[i]+'</option>');
       }
    }
       
 if($("#resident").val() == 'Abia'){
          $("#residentlga").html('');
     for  (var i = 0; i < Abia.length; i++) {
$("#residentlga").append('<option value='+Abia[i]+'>'+Abia[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Adamawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Adamawa.length; i++) {
$("#residentlga").append('<option value='+Adamawa[i]+'>'+Adamawa[i]+'</option>');
       }
    }

     if($("#resident").val() == 'AkwaIbom'){
          $("#residentlga").html('');
     for  (var i = 0; i < AkwaIbom.length; i++) {
$("#residentlga").append('<option value='+AkwaIbom[i]+'>'+AkwaIbom[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Anambra'){
          $("#residentlga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#residentlga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Bauchi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Bauchi.length; i++) {
$("#residentlga").append('<option value='+Bauchi[i]+'>'+Bauchi[i]+'</option>');
       }
    }


        if($("#resident").val() == 'Zamfara'){
            $("#residentlga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#residentlga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Lagos'){
          $("#residentlga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#residentlga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Enugu'){
          $("#residentlga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#residentlga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kogi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#residentlga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }
})
     //populating resident lga ends

     //populating origin lga
  $("#origin").change(function(){


           if($("#origin").val() == 'Ondo'){
          $("#originlga").html('');
     for  (var i = 0; i < Ondo.length; i++) {
$("#originlga").append('<option value='+Ondo[i]+'>'+Ondo[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Osun'){
          $("#originlga").html('');
     for  (var i = 0; i < Osun.length; i++) {
$("#originlga").append('<option value='+Osun[i]+'>'+Osun[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Oyo'){
          $("#originlga").html('');
     for  (var i = 0; i < Oyo.length; i++) {
$("#originlga").append('<option value='+Oyo[i]+'>'+Oyo[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Plateau'){
          $("#originlga").html('');
     for  (var i = 0; i < Plateau.length; i++) {
$("#originlga").append('<option value='+Plateau[i]+'>'+Plateau[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Rivers'){
          $("#originlga").html('');
     for  (var i = 0; i < Rivers.length; i++) {
$("#originlga").append('<option value='+Rivers[i]+'>'+Rivers[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Sokoto'){
          $("#originlga").html('');
     for  (var i = 0; i < Sokoto.length; i++) {
$("#originlga").append('<option value='+Sokoto[i]+'>'+Sokoto[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Taraba'){
          $("#originlga").html('');
     for  (var i = 0; i < Taraba.length; i++) {
$("#originlga").append('<option value='+Taraba[i]+'>'+Taraba[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Yobe'){
          $("#originlga").html('');
     for  (var i = 0; i < Yobe.length; i++) {
$("#originlga").append('<option value='+Yobe[i]+'>'+Yobe[i]+'</option>');
       }
    }


          if($("#origin").val() == 'Kebbi'){
          $("#originlga").html('');
     for  (var i = 0; i < Kebbi.length; i++) {
$("#originlga").append('<option value='+Kebbi[i]+'>'+Kebbi[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Kwara'){
          $("#originlga").html('');
     for  (var i = 0; i < Kwara.length; i++) {
$("#originlga").append('<option value='+Kwara[i]+'>'+Kwara[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Nassarawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Nassarawa.length; i++) {
$("#originlga").append('<option value='+Nassarawa[i]+'>'+Nassarawa[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Niger'){
          $("#originlga").html('');
     for  (var i = 0; i < Niger.length; i++) {
$("#originlga").append('<option value='+Niger[i]+'>'+Niger[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Ogun'){
          $("#originlga").html('');
     for  (var i = 0; i < Ogun.length; i++) {
$("#originlga").append('<option value='+Ogun[i]+'>'+Ogun[i]+'</option>');
       }
    }


         if($("#origin").val() == 'Imo'){
          $("#originlga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#originlga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Jigawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Jigawa.length; i++) {
$("#originlga").append('<option value='+Jigawa[i]+'>'+Jigawa[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kaduna'){
          $("##originlga").html('');
     for  (var i = 0; i < Kaduna.length; i++) {
$("##originlga").append('<option value='+Kaduna[i]+'>'+Kaduna[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kano'){
          $("#originlga").html('');
     for  (var i = 0; i < Kano.length; i++) {
$("#originlga").append('<option value='+Kano[i]+'>'+Kano[i]+'</option>');
       }
    }


     if($("#origin").val() == 'Katsina'){
          $("#originlga").html('');
     for  (var i = 0; i < Katsina.length; i++) {
$("#originlga").append('<option value='+Katsina[i]+'>'+Katsina[i]+'</option>');
       }
    }

  if($("#origin").val() == 'Ebonyi'){
          $("#originlga").html('');
     for  (var i = 0; i < Ebonyi.length; i++) {
$("#originlga").append('<option value='+Ebonyi[i]+'>'+Ebonyi[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Edo'){
          $("#originlga").html('');
     for  (var i = 0; i < Edo.length; i++) {
$("#originlga").append('<option value='+Edo[i]+'>'+Edo[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Ekiti'){
          $("#originlga").html('');
     for  (var i = 0; i < Ekiti.length; i++) {
$("#originlga").append('<option value='+Ekiti[i]+'>'+Ekiti[i]+'</option>');
       }
    }

      if($("#origin").val() == 'FCT'){
          $("#originlga").html('');
     for  (var i = 0; i < FCT.length; i++) {
$("#originlga").append('<option value='+FCT[i]+'>'+FCT[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Gombe'){
          $("#originlga").html('');
     for  (var i = 0; i < Gombe.length; i++) {
$("#originlga").append('<option value='+Gombe[i]+'>'+Gombe[i]+'</option>');
       }
    }


        if($("#origin").val() == 'Bayelsa'){
          $("#originlga").html('');
     for  (var i = 0; i < Bayelsa.length; i++) {
$("#originlga").append('<option value='+Bayelsa[i]+'>'+Bayelsa[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Benue'){
          $("#originlga").html('');
     for  (var i = 0; i < Benue.length; i++) {
$("#originlga").append('<option value='+Benue[i]+'>'+Benue[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Borno'){
          $("#originlga").html('');
     for  (var i = 0; i < Borno.length; i++) {
$("#originlga").append('<option value='+Borno[i]+'>'+Borno[i]+'</option>');
       }
    }

    if($("#origin").val() == 'CrossRiver'){
          $("#originlga").html('');
     for  (var i = 0; i < CrossRiver.length; i++) {
$("#originlga").append('<option value='+CrossRiver[i]+'>'+CrossRiver[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Delta'){
          $("#originlga").html('');
     for  (var i = 0; i < Delta.length; i++) {
$("#originlga").append('<option value='+Delta[i]+'>'+Delta[i]+'</option>');
       }
    }
       
 if($("#origin").val() == 'Abia'){
          $("#originlga").html('');
     for  (var i = 0; i < Abia.length; i++) {
$("#originlga").append('<option value='+Abia[i]+'>'+Abia[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Adamawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Adamawa.length; i++) {
$("#originlga").append('<option value='+Adamawa[i]+'>'+Adamawa[i]+'</option>');
       }
    }

     if($("#origin").val() == 'AkwaIbom'){
          $("#originlga").html('');
     for  (var i = 0; i < AkwaIbom.length; i++) {
$("#originlga").append('<option value='+AkwaIbom[i]+'>'+AkwaIbom[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Anambra'){
          $("#originlga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#originlga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Bauchi'){
          $("#originlga").html('');
     for  (var i = 0; i < Bauchi.length; i++) {
$("#originlga").append('<option value='+Bauchi[i]+'>'+Bauchi[i]+'</option>');
       }
    }
       
        if($("#origin").val() == 'Zamfara'){
            $("#originlga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#originlga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Lagos'){
          $("#originlga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#originlga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Enugu'){
          $("#originlga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#originlga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kogi'){
          $("#originlga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#originlga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }
})



     //populating origin lga ends
 })
