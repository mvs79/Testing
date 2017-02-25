
/*
function showUser(str) {
    if (str == "") {
        document.getElementById("txtdata").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtdata").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","listing.php?q="+str,true);
        xmlhttp.send();
    }
};

function getfirstname(value)
{
	$.ajax({
		url: "GetData.php";
		type:"POST",
		dataType:"HTML",
		async:false,
		data: "{value : value }",
		success: function(data)
		{
			$(#search).html(data);
		}
	});
}

$(document).ready(function(){
    $("#btn1").click(function(){
        $("div").data("greeting", "Hello World");
    });
    $("#btn2").click(function(){
        alert($("div").data("greeting"));
    });
});
function getval(sel)
{
 alert(sel.value);
}

$(document).ready(function(){
   $('#drop_region').change(function(){
   var txtval = $(this).val();
   $('#search').val(txtval);
});
});

$(document).ready(function(){
   $('#drop_region').change(function(){
   var txtval = $(this).val();
   $('#search').val(txtval);
   
   $.ajax({
		type:"POST",
		data: {'txtval' : txtval },
		url: "GetData.php",		
		dataType: "HTML",
		success: function(data)
		{   
			//alert(data);
     		$('#search').val(data);
		}
	});
	
});
});
*/

//$(document).ready(function(){
//   $('#drop_region').change(function(){
//   var txtval = $(this).val();
//  // $('#search').val(txtval);
//   
//   $.ajax({
//		type:"POST",
//		data: {'txtval' : txtval },
//		url: "datadropdown.php",
//		dataType: "HTML",
//		success: function(data)
//		{   
//			//alert(data);
//     		$('#drop_firstname').html(data);
//		}
//	});
//	
//});
//});

$(document).ready(function(){
   $('#drop_region').change(function(){
   var txtval = $(this).val();
  // $('#search').val(txtval);
   
   $.ajax({
		type:"POST",
		data: {'txtval' : txtval },
		url: "datadropdown.php",
		dataType: "HTML",
		success: function(data)
		{   
			//alert(data);
     		$('#drop_firstname').html(data);
		}
	});
	
});

$('#btn_costumer').click(function(){
//   var region = $(this).val();
   //$('#search').val(region);
   var lastname = $('#search').val();
   // alert($('#drop_firstname').val());
   $.ajax({
		type:"POST",
		data:
		{
		'lastname': lastname
		},
		url: "getemployee.php",
		dataType: 'HTML',
		success: function(data)
		{   
			 console.log("ok");
			//alert("Hallo");
     		//$('#drop_firstname').html(data);
     		$('#search').val(data);
		}
	});
	
	});
});
