$(function (e) {

	$("#signupform").on("submit",function(e) {
		e.preventDefault();
		const url="http://localhost/voucherasset/register/proccessignup.php";

		$.ajax({
			url:url,
			type:"POST",
			cache:false,
			data:new FormData(this),
			contentType:false,
			processData:false,
			beforeSend:()=>{
						$(".preloaders").css("display","flex")
								
			},
			success:(data)=>{
		
				$(".preloaders").css("display","none")

					console.log(data)
					if(data.status=="username sholud more than 4"){
						swal("ALERT!","username too short","error")
					}
					if(data.status=="email is empty"){
						swal("ALERT!","Emppty Email","error")
					}
					if(data.status=="password should be more than 7"){
					swal("ALERT!",data.status,"error")
					}
					if(data.status=="password does not match"){
					swal("ALERT!","password does not match","error")

					}
					if(data.status=="Email Already Exist"){
					swal("ALERT!","Email Already Exist","error")

					}
					if(data.status=="faid to insert"){
							swal("ALERT!","Error Loading","error")
					}
					if(data.status=="success" && data.ok==1 && data.url!=''){
						window.location.href=data.url
					}					

			},
			error:(error)=>{
				alert("error loading from server")

			}
		})

	})

	$("#login-form-section").on("submit",function(e){
		e.preventDefault();
		$.ajax({
			url:"proccesslogin.php",
			type:"POST",
			data:new FormData(this),
			cache:false,
			contentType:false,
			processData:false,
			beforeSend:()=>{
				$(".preloaders").css("display","flex")

			},
			success:(data)=>{
				$(".preloaders").css("display","none")

							console.log(data)

							if(data.status=="empty email"){
									swal("ALERT","Empty email","error")
							}
									if(data.status=="empty password"){
									swal("ALERT","Empty password","error")
							}
								if(data.status=="Email/Password Combination Error"){
									swal("ALERT","Email/Password Combination Error","error")
							}
									if(data.status=="success" && data.ok==1){
									window.location.href="../User/"+data.url
							}
						},
						error:()=>{}
		})
	})

	$("#otpform").on("submit",function (e) {
		e.preventDefault();
		$.ajax({
			url:"proccessotp.php",
			type:"POST",
			data:new FormData(this),
			cache:false,
			contentType:false,
			processData:false,
			beforeSend:()=>{
				$(".preloaders").css("display","flex")

			},
			success:(data)=>{
				$(".preloaders").css("display","none")

							console.log(data)
							if(data.status=="Already Inserted"){
									window.location.href="index.php"
							}
									if(data.status=="error"){
									swal("ALERT","Try again later","error")
							}
								if(data.status=="Invalid OTP"){
									swal("ALERT","Invalid OTP","error")
							}
									if(data.status=="success" && data.ok==1){
									window.location.href="../User/"+data.url
							}
			},
			error:(error)=>{}
		})
		// body...
	})
	// body...
})