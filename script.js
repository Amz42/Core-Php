window.onload=function(){
	////          removing loader
	let loader=document.getElementById("loader"); 
	setTimeout(()=>{
		document.body.removeChild(loader);
	},100);

	document.getElementById("eye-btn").addEventListener('click',function eyeblink(){
		let status=document.getElementById("login-password").type;
		if(status=="password"){ 
			document.getElementById("login-password").type="text"; 
			document.querySelector("#eye-btn").innerHTML="<i class='fas fa-eye-slash'></i>"; 
		}
		else{
			document.getElementById("login-password").type="password"; 
			document.querySelector("#eye-btn").innerHTML="<i class='fas fa-eye'></i>"; 
		}
	});





}