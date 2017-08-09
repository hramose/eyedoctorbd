
$( function() {
    var allCity = [
      "Dhaka",
      "Narayanganj",
      "Chittaogng",
      "Khulna",
      "Bogra",
      "Mymensingh",
      "Rajshahi",
      "Sylhet",
      "Comilla",
      "Kishorganj",
      "Natore",
      "Tangail",
      "Barisal"
    ];
    $( "#City" ).autocomplete({
      source: allCity
    });
  } );


 $( function() {
    var allSubarea = [
      "Aga Sadek Khan Road",
      "Agargaon",
      "Ashulia",
      "Azimpur",
      "Badda",
      "Bakshi Bazar",
      "Banani",
      "Banasree",
      "Bangshal",
      "Baridhara",
      "Basabo",
      "Bashundhara",
      "Demra",
      "Uttra"
    ];
    $( "#Subarea" ).autocomplete({
      source: allSubarea
    });
  } );