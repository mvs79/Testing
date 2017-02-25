
//function showUser(str) {
//	if (str == "") {
//		document.
//		return;
//	} else {
//		if (window.XMLHttpRequest) {
//			// code for IE7+, Firefox, Chrome, Opera, Safari
//			xmlhttp = new XMLHttpRequest();
//		} else {
//			// code for IE6, IE5
//			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//		}
//		xmlhttp.onreadystatechange = function() {
//			if (this.readyState == 4 && this.status == 200) {
//				document.getElementById("txtdata").innerHTML = this.responseText;
//			}
//		};
//		xmlhttp.open("GET", "listing.php?q=" + str, true);
//		xmlhttp.send();
//	}
//};
//
//$(document).ready(function(){
//	 $('#form').on('click','#btn_getproduct',function()
//   {
//   var formpar=$(this).seralize();
//   alert(formpar);
//   });
//	alert('Hallo')
//});
//$(document).ready(function(){
////	 $('#formular').on('click','#btn_getproduct',function()
////  {
////  var formpar=$(this).seralize();
////  alert(formpar);
////  });
//	alert('Hallo Matthias')
////});
// $('#drop_region').change(function(){
//function getproduct()
//{
 
//    $('btn_getproduct').on('click')
//    {
//    var formpar=$('#formular').seralize();
//    alert(formpar);
//    }
//	var reg = $('#txtdata').html();
//	alert(reg);
//	$('#txtdata').html("<h1>hallo</h1>");
//}
///*
// * function getfirstname(value) { $.ajax({ url: "GetData.php"; type:"POST",
// * dataType:"HTML", async:false, data: "{value : value }", success:
// * function(data) { $(#search).html(data); } }); }
// * 
// * $(document).ready(function(){ $("#btn1").click(function(){
// * $("div").data("greeting", "Hello World"); }); $("#btn2").click(function(){
// * alert($("div").data("greeting")); }); }); function getval(sel) {
// * alert(sel.value); }
// * 
// * $(document).ready(function(){ $('#drop_region').change(function(){ var txtval =
// * $(this).val(); $('#search').val(txtval); }); });
// * 
// * $(document).ready(function(){ $('#drop_region').change(function(){ var txtval =
// * $(this).val(); $('#search').val(txtval);
// * 
// * $.ajax({ type:"POST", data: {'txtval' : txtval }, url: "GetData.php",
// * dataType: "HTML", success: function(data) { //alert(data);
// * $('#search').val(data); } });
// * 
// * }); });
// */

// $(document).ready(function(){
// $('#drop_region').change(function(){
// var txtval = $(this).val();
// // $('#search').val(txtval);
//   
// $.ajax({
// type:"POST",
// data: {'txtval' : txtval },
// url: "datadropdown.php",
// dataType: "HTML",
// success: function(data)
// {
// //alert(data);
// $('#drop_firstname').html(data);
// }
// });
//	
// });
// });
function SendeAjaxRequest(method,JsObject,url)
{
	$.ajax({
		type : "POST",
		data : {
			JsObject : JsObject,
			method : mthod
		},
		url : url,
		success : onsuccess 
	});
}

var vallast ="";

$(document).ready(function() {
	$('#drop_region').change(function() {
		var txtval = $(this).val();
		$.ajax({
			type : "POST",
			data : {
				'txtval' : txtval
			},
			url : "datadropdown.php",
			dataType : "HTML",
			success : function(data) {
				$('#drop_firstname').html(data);
			}
		});

	});


//	$('#drop_firstname').change(function() {
//		
//
////		 $('#form_input').load('inputfield.php');
//		var region = $('#drop_region').val();
//		var lastname = $('#search').val();
//		if (lastname == "" || region == "") {
//			return;
//		}
//		alert('Hallo');
//		$.ajax({
//			type : "POST",
//			data : {
//				'lastname' : lastname,
//				'region' : region
//			},
//			url : "workertemplate.php",
//			dataType : 'JSON',
//			success : function(data){
//			   
//				$('#form_input').html(data);
////			    $('#form_input').load('inputfield.php')	;
////				alert(data['10']['LastName']);
////				vallast = (data['10']['LastName']);
//				//alert(vallast);
////				alert('');
////				$('#form_input #lastname').val(data['10']['LastName']);
////
//////				$('#form_input #lastname').html("<h2>Hallo</h2>");
//////				$('#form_input').children('#lastname').text('Hallo');
//////				$('#lastname').val(data['10']['LastName']);
//////				$('#firstname').val(data['10']['FirstName']);
////				$('#birthdate').val(data['10']['BirthDate']);
////				$('#adress').val(data['10']['Address']);
////				$('#city').val(data['10']['City']);
//
//			}
//			
//		});
//		alert(vallast)
		
		

	$('#drop_firstname').change(function() {
		

		 var formdata = $('#formular').serialize();
		
		alert('Hallo');
		$.ajax({
			type : "POST",
			data : formdata,
			url : "workerserialize.php",
			dataType : 'HTML',
			success : function(data){
			   
				$('#form_input').html(data);
			    
			}
			
		});
	
	
//	$('#drop_firstname').change(function() {
//		
//
//		 var formdata = $('#formular').serialize();
//		
//		alert('Hallo');
//		$.ajax({
//			type : "POST",
//			data : { 'formdata' : JSON.stringify(formdata)},
//			url : "workerJsonserialize.php",
//			dataType : 'JSON',
//			success : function(data){
//			   
//				$('#form_input').html(data);
////			    
//			}
//			
//		});
//	
	
	
	
	

//});
		
		
	});
	
	
//	$('#load_form').submit(function()
//			{
//		       alert('loadform');
//				var loaddata = $('#form_input').seralize();
//				$.ajax({
//					url:"datawriter.php",
//					data: loaddata,
//					type : "POST",
//		            success:function()
//		            {
//		            	
//		            }
//
//				});
//				
//			});

	
});

