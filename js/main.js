(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var ins = $('.validate-input input[name="ins"]');
    var pno = $('.validate-input input[name="pno"]');
    var dept = $('.validate-input select[name="dept"]');
    var re = $('.validate-input select[name="re"]');
    var year = $('.validate-input select[name="year"]');
	var cap = $('.validate-input input[name="cap"]');

    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }
		
        if($(ins).val().trim() == ''){
            showValidate(ins);
            check=false;
        } 
         if($(dept).val().trim() == ''){
            showValidate(dept);
            check=false;
        }  

         if($(re).val().trim() == ''){
            showValidate(re);
            check=false;
        } 

         if($(year).val().trim() == ''){
            showValidate(year);
            check=false;
        } 

        if($(pno).val().trim().match(/^([7-9]{1}[0-9]{9})$/) == null){
            showValidate(pno);
            check=false;
        }
		
		if($(cap).val().trim() =='') {
            showValidate(cap);
            check=false;
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);