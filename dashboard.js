
	document.addEventListener("DOMContentLoaded", function(){

		document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

			element.addEventListener('click', function (e) {

				let nextEl = element.nextElementSibling;
				let parentEl  = element.parentElement;	

				if(nextEl) {
					e.preventDefault();	
					let mycollapse = new bootstrap.Collapse(nextEl);

			  		if(nextEl.classList.contains('show')){
			  			mycollapse.hide();
			  		} else {
			  			mycollapse.show();
			  			// find other submenus with class=show
			  			var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
			  			// if it exists, then close all of them
						if(opened_submenu){
							new bootstrap.Collapse(opened_submenu);
						}

			  		}
		  		}

			});
		})

	}); 


window.addEventListener("scroll", function(){
	var header=document.querySelector('.navbar');
	header.classList.toggle("sticky", window.scrollY>1);
});

function dropdown1(){
	var droupdown1=document.querySelector(".sub_menu_click-1");

	droupdown1.classList.toggle("sub_active");
	var droupdown2=document.querySelector(".sub_menu_click-2");
	droupdown2.classList.remove("sub_active");

}
function dropdown2(){
	var droupdown2=document.querySelector(".sub_menu_click-2");


	droupdown2.classList.toggle("sub_active");
	var droupdown1=document.querySelector(".sub_menu_click-1");

droupdown1.classList.remove("sub_active");

	
}

//top button section js code

const scrollTopBtn=document.getElementById('scrollTopBtn');
window.onscroll=function(){

    if(document.documentElement.scrollTop>70){
        scrollTopBtn.style.display="block";
       
    }else{
        scrollTopBtn.style.display="none";
    }
   
}
scrollTopBtn.addEventListener('click',()=>{
    window.scrollTo(0,0);//one way
    document.documentElement.scrollTop=0; //two way
});