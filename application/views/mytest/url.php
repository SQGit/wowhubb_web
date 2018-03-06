<html>

<style type="text/css">
  
  .remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
    margin-left: 107px;
  }
  .remove:hover {
    background: white;
    color: black;
  }
</style>   
<body>
                         
                          
                             <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('video_size').click();" />
                              <input type="file" style="display:none;" name="cover_img" id="video_size"  title="cover image" >  

                        <div id="video_show" style="display: none;" >
                          <video width="200" height="150" controls>
                                <source src="mov_bbb.mp4" id="video_here">
                            Your browser does not support HTML5 video.
                          </video>
                        </div>
                        

<script>
var con=new Array();
var cur=new Array();
con[0]='Afghanistan';cur[0]='Afghani';
con[1]='Albania';cur[1]='Lek';
con[2]='Algeria';cur[2]='Dinar';
con[3]='Andorra';cur[3]='Euro';
con[4]='Angola';cur[4]='New Kwanza';
con[5]='Antigua and Barbuda';cur[5]='East Caribbean dollar';
con[6]='Argentina';cur[6]='Peso';
con[7]='Armenia';cur[7]='Dram';
con[8]='Australia';cur[8]='Australian dollar';
con[9]='Austria';cur[9]='Euro';
con[10]='Azerbaijan';cur[10]='Manat';
con[11]='Bahamas';cur[11]='Bahamian dollar';
con[12]='Bahrain';cur[12]='Bahrain dinar';
con[13]='Bangladesh';cur[13]='Taka';
con[14]='Barbados';cur[14]='Barbados dollar';
con[15]='Belarus';cur[15]='Belorussian ruble';
con[16]='Belgium';cur[16]='Euro';
con[17]='Belize';cur[17]='Belize dollar';
con[18]='Benin';cur[18]='CFA Franc';
con[19]='Bhutan';cur[19]='Ngultrum';
con[20]='Bolivia';cur[20]='Boliviano';
con[21]='Bosnia and Herzegovina';cur[21]='Marka';
con[22]='Botswana';cur[22]='Pula';
con[23]='Brazil';cur[23]='Real';
con[24]='Brunei';cur[24]='Brunei dollar';
con[25]='Bulgaria';cur[25]='Lev';
con[26]='Burkina Faso';cur[26]='CFA Franc';
con[27]='Burundi';cur[27]='Burundi franc';
con[28]='Cambodia';cur[28]='Riel';
con[29]='Cameroon';cur[29]='CFA Franc';
con[30]='Canada';cur[30]='Canadian dollar';
con[31]='Cape Verde';cur[31]='Cape Verdean escudo';
con[32]='Central African Republic';cur[32]='CFA Franc';
con[33]='Chad';cur[33]='CFA Franc';
con[34]='Chile';cur[34]='Chilean Peso';
con[35]='China';cur[35]='Yuan/Renminbi';
con[36]='Colombia';cur[36]='Colombian Peso';
con[37]='Comoros';cur[37]='Franc';
con[38]='Congo(DRC)';cur[38]='Congolese franc';
con[39]='Congo(ROC)';cur[39]='CFA Franc';
con[40]='Costa Rica';cur[40]='Colón';
con[41]='Cóte d\'Ivoire';cur[41]='CFA Franc';
con[42]='Croatia';cur[42]='Kuna';
con[43]='Cuba';cur[43]='Cuban Peso';
con[44]='Cyprus';cur[44]='Cyprus pound';
con[45]='Czech Republic';cur[45]='Koruna';
con[46]='Denmark';cur[46]='Krone';
con[47]='Djibouti';cur[47]='Djibouti franc';
con[48]='Dominica';cur[48]='East Caribbean dollar';
con[49]='Dominican Republic';cur[49]='Dominican Peso';
con[50]='East Timor';cur[50]='U.S. dollar';
con[51]='Ecuador';cur[51]='U.S. dollar';
con[52]='Egypt';cur[52]='Egyptian pound';
con[53]='El Salvador';cur[53]='Colón, U.S. dollar';
con[54]='Equatorial Guinea';cur[54]='CFA Franc';
con[55]='Eritrea';cur[55]='Nakfa';
con[56]='Estonia';cur[56]='Kroon';
con[57]='Ethiopia';cur[57]='Birr';
con[58]='Fiji';cur[58]='Fiji dollar';
con[59]='Finland';cur[59]='Euro';
con[60]='France';cur[60]='Euro';
con[61]='Gabon';cur[61]='CFA Franc';
con[62]='Gambia';cur[62]='Dalasi';
con[63]='Georgia';cur[63]='Lari';
con[64]='Germany';cur[64]='Euro';
con[65]='Ghana';cur[65]='Cedi';
con[66]='Greece';cur[66]='Euro';
con[67]='Grenada';cur[67]='East Caribbean dollar';
con[68]='Guatemala';cur[68]='Quetzal';
con[69]='Guinea';cur[69]='Guinean franc';
con[70]='Guinea-Bissau';cur[70]='CFA Franc';
con[71]='Guyana';cur[71]='Guyanese dollar';
con[72]='Haiti';cur[72]='Gourde';
con[73]='Honduras';cur[73]='Lempira';
con[74]='Hungary';cur[74]='Forint';
con[75]='Iceland';cur[75]='Icelandic króna';
con[76]='India';cur[76]='$';
con[77]='Indonesia';cur[77]='Rupiah';
con[78]='Iran';cur[78]='Rial';
con[79]='Iraq';cur[79]='U.S. dollar';
con[80]='Ireland';cur[80]='Euro';
con[81]='Israel';cur[81]='Shekel';
con[82]='Italy';cur[82]='Euro';
con[83]='Jamaica';cur[83]='Jamaican dollar';
con[84]='Japan';cur[84]='Yen';
con[85]='Jordan';cur[85]='Jordanian dinar';
con[86]='Kazakhstan';cur[86]='Tenge';
con[87]='Kenya';cur[87]='Kenya shilling';
con[88]='Kiribati';cur[88]='Australian dollar';
con[89]='Korea, North';cur[89]='Won';
con[90]='Korea, South';cur[90]='Won';
con[91]='Kuwait';cur[91]='Kuwaiti dinar';
con[92]='Kyrgyzstan';cur[92]='Som';
con[93]='Laos';cur[93]='New Kip';
con[94]='Latvia';cur[94]='Lats';
con[95]='Lebanon';cur[95]='Lebanese pound';
con[96]='Lesotho';cur[96]='Maluti';
con[97]='Liberia';cur[97]='Liberian dollar';
con[98]='Libya';cur[98]='Libyan dinar';
con[99]='Liechtenstein';cur[99]='Swiss franc';
con[100]='Lithuania';cur[100]='Litas';
con[101]='Luxembourg';cur[101]='Euro';
con[102]='Macedonia ';cur[102]='Denar';
con[103]='Madagascar';cur[103]='Malagasy franc';
con[104]='Malawi';cur[104]='Kwacha';
con[105]='Malaysia';cur[105]='Ringgit';
con[106]='Maldives';cur[106]='Rufiya';
con[107]='Mali';cur[107]='CFA Franc';
con[108]='Malta';cur[108]='Maltese lira';
con[109]='Mauritania';cur[109]='Ouguiya';
con[110]='Mauritius';cur[110]='Mauritian rupee';
con[111]='Mexico';cur[111]='Mexican peso';
con[112]='Moldova';cur[112]='Leu';
con[113]='Monaco';cur[113]='Euro';
con[114]='Mongolia';cur[114]='Tugrik';
con[115]='Montenegro';cur[115]='Euro';
con[116]='Morocco';cur[116]='Dirham';
con[117]='Mozambique';cur[117]='Metical';
con[118]='Myanmar';cur[118]='Kyat';
con[119]='Namibia';cur[119]='Namibian dollar';
con[120]='Nauru';cur[120]='Australian dollar';
con[121]='Nepal';cur[121]='Nepalese rupee';
con[122]='Netherlands';cur[122]='Euro';
con[123]='New Zealand';cur[123]='New Zealand dollar';
con[124]='Nicaragua';cur[124]='Gold cordoba';
con[125]='Niger';cur[125]='CFA Franc';
con[126]='Nigeria';cur[126]='Naira';
con[127]='Norway';cur[127]='Norwegian krone';
con[128]='Oman';cur[128]='Omani rial';
con[129]='Pakistan';cur[129]='Pakistan rupee';
con[130]='Palau';cur[130]='U.S. dollar used';
con[131]='Palestinian State (proposed)';cur[131]='New Israeli shekels, Jordanian dinars, U.S. dollars';
con[132]='Panama';cur[132]='balboa, U.S. dollar';
con[133]='Papua New Guinea';cur[133]='Kina';
con[134]='Paraguay';cur[134]='Guaraní';
con[135]='Peru';cur[135]='Nuevo sol';
con[136]='Philippines';cur[136]='Peso';
con[137]='Poland';cur[137]='Zloty';
con[138]='Portugal';cur[138]='Euro';
con[139]='Qatar';cur[139]='Qatari riyal';
con[140]='Romania';cur[140]='Leu';
con[141]='Russia';cur[141]='Ruble';
con[142]='Rwanda';cur[142]='Rwanda franc';
con[143]='St. Kitts and Nevis';cur[143]='East Caribbean dollar';
con[144]='St. Lucia';cur[144]='East Caribbean dollar';
con[145]='St. Vincent and the Grenadines';cur[145]='East Caribbean dollar';
con[146]='Samoa';cur[146]='Tala';
con[147]='San Marino';cur[147]='Euro';
con[148]='Sáo Tomé and Príncipe';cur[148]='Dobra';
con[149]='Saudi Arabia';cur[149]='Riyal';
con[150]='Senegal';cur[150]='CFA Franc';
con[151]='Serbia';cur[151]='Yugoslav new dinar, Euro';
con[152]='Seychelles';cur[152]='Seychelles rupee';
con[153]='Sierra Leone';cur[153]='Leone';
con[154]='Singapore';cur[154]='Singapore dollar';
con[155]='Slovakia';cur[155]='Koruna';
con[156]='Slovenia';cur[156]='euro';
con[157]='Solomon Islands';cur[157]='Solomon Islands dollar';
con[158]='Somalia';cur[158]='Somali shilling';
con[159]='South Africa';cur[159]='Rand';
con[160]='Spain';cur[160]='Euro';
con[161]='Sri Lanka';cur[161]='Sri Lanka rupee';
con[162]='Sudan';cur[162]='Dinar';
con[163]='Suriname';cur[163]='Surinamese dollar';
con[164]='Swaziland';cur[164]='Lilangeni';
con[165]='Sweden';cur[165]='Krona';
con[166]='Switzerland';cur[166]='Swiss franc';
con[167]='Syria';cur[167]='Syrian pound';
con[168]='Taiwan';cur[168]='Taiwan dollar';
con[169]='Tajikistan';cur[169]='somoni';
con[170]='Tanzania';cur[170]='Tanzanian shilling';
con[171]='Thailand';cur[171]='baht';
con[172]='Togo';cur[172]='CFA Franc';
con[173]='Tonga';cur[173]='Pa\'anga';
con[174]='Trinidad and Tobago';cur[174]='Trinidad and Tobago dollar';
con[175]='Tunisia';cur[175]='Tunisian dinar';
con[176]='Turkey';cur[176]='Turkish lira (YTL)';
con[177]='Turkmenistan';cur[177]='Manat';
con[178]='Tuvalu';cur[178]='Australian dollar';
con[179]='Uganda';cur[179]='Ugandan new shilling';
con[180]='Ukraine';cur[180]='Hryvna';
con[181]='United Arab Emirates';cur[181]='U.A.E. dirham';
con[182]='United Kingdom';cur[182]='Pound sterling (£)';
con[183]='United States';cur[183]='dollar';
con[184]='Uruguay';cur[184]='Uruguay peso';
con[185]='Uzbekistan';cur[185]='Uzbekistani sum';
con[186]='Vanuatu';cur[186]='Vatu';
con[187]='Vatican City (Holy See)';cur[187]='Euro';
con[188]='Venezuela';cur[188]='Bolivar';
con[189]='Vietnam';cur[189]='Dong';
con[190]='Western Sahara (proposed state)';cur[190]='Tala';
con[191]='Yemen';cur[191]='Rial';
con[192]='Zambia';cur[192]='Kwacha';
con[193]='Zimbabwe';cur[193]='Zimbabwean dollar';

function list(index)
{
  var con=document.getElementById('curr');
  if(index==-1)
  {
    con.value=""; 
    return;
  }
  con.value=cur[index];
}
</script> 


<select name=country id=con onChange=list(this.value)>
<script type="text/javascript">
document.write("<option value=-1>Select Country</option>");
count=con.length;
for(i=0;i<count;i++)
document.write("<option value="+i+">"+con[i]+"</option>");
</script>
</select>
<input type=text id=curr size=40 name=curr >
<!-- Script by hscripts.com -->


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>                           

<script>
  


  
  
//image preview and delete step1

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#video_size").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#video_size");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//video size limitation highlight video1

$(document).on("change", "#video_size", function(evt)
        {
            var file = this.files[0];

            if (file.size > 2621440)
             {
                   //Now Here I need to update <span> 
                 $('#video_show').hide();  
                 alert('Filesize must 2.5MB or below');           
             }else
             {  
          var $source = $('#video_here');         
          $source[0].src = URL.createObjectURL(this.files[0]);
          $source.parent()[0].load();
          $('#video_show').show();         
         }
    });

</script>

</body>
</html>