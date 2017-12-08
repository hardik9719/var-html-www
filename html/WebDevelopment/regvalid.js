$(document).ready(function(){
		  var flag=0;
                $("#myName").focusout(function(){
                    if($(this).val()==''){
                        $(this).css("border-color", "#FF0000");

                             $("#error_name").text("* You have to enter your first name!");
                             flag=1;
                    }
                    else
                    {
                        $(this).css("border-color", "#2eb82e");
                        $("#error_name").text("");

                    }
               });
                $("#email").focusout(function(){
                    if($(this).val()==''){
                        $(this).css("border-color", "#FF0000");
                           
                            $("#error_email").text("* You have to enter valid Email address!");
                            flag=1;
                    }
                    else
                    {
                        $(this).css("border-color", "#2eb82e");
                       
                        $("#error_email").text("");
                    }
               });
                $("#password").focusout(function(){
                    if($(this).val()==''){
                        $(this).css("border-color", "#FF0000");
                           
                            $("#error_password").text("* You have to enter Alphanumeric Passwords!");
                        flag=1;
                    }
                    else
                    {
                        $(this).css("border-color", "#2eb82e");
                       
                        $("#error_password").text("");
                    }
               });
              
                $("#cpassword").focusout(function(){
                    if($(this).val()==''){
                        $(this).css("border-color", "#FF0000");
                           
                            $("#error_password").text("* You have to enter Alphanumeric Passwords!");
                  flag=1;
                    }
                    else
                    {
                        $(this).css("border-color", "#2eb82e");
                       
                        $("#error_password").text("");
                    }
               });
                
                

   		$( "#submit" ).click(function() {
   			if(($("#myName" ).val()=='') || (($("#myName" ).val().length)<3))
   			{
        		$("#myName").css("border-color", "#FF0000");
        			
        			 $("#error_name").text("*First name should contain min 3 characters!");
                     flag=1
                     console.log("name");        	}
        	if($("#email").val()=='')
            {
                $("#email").css("border-color", "#FF0000");
                   
                     $("#error_email").text("* You have to enter a valid email address!");
                     flag=1;
                     console.log("email");  
            }else{
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                    if(regMail.test($("#email").val()) == false)
                    {
                    $("#email").css("border-color", "#FF0000");
                                      
                                        $("#error_email").text("* You have to enter a valid email address!");
                        flag=1;
                        console.log("email");  
                    }
                    
            }
            if($("#password").val()==''||$("#cpassword").val()=='')
            {
                $("#password,#cpassword").css("border-color", "#FF0000");
                   
                     $("#error_password").text("* You have to enter password!");
                     flag=1;
                     console.log("name");  
            }else if($("#password").val()!=$("#cpassword").val()){
                $("#password,#cpassword").css("border-color", "#FF0000");
                   
                     $("#error_password").text("* Both Passwords do not match!");
                     flag=1;
                     console.log("name");  
            }
   			console.log(flag);
            if(flag==0){
                $.post("addUser.php",{
                    name:$("#myName" ).val(),
                    email:$("#email").val(),
                    password:$("#password").val()
                },function(data){
                    console.log(data);
                    if(data=="Success"){
                       alert("Registered Successfully!");

                    }else{
                        alert("failed");
                    }
                });
            }

    	
	});
    });