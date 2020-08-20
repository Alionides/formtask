$(function() {    
    $('#sendMessageButton').click('onclick',function(){    
        var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var message = $('#message').val();
		if(name!="" && email!="" && phone!="" && message!=""){
            $("#sendMessageButton").attr("disabled", "disabled");
            $.ajax({
                type: 'post',
                url: 'insertform',
                data: {'name':name,'email':email,'phone':phone,'message':message,},
                success: function(response) { 
                     if(response.data == false){ 

                       console.log(response.data);

                       if(typeof response.msg.name === 'undefined'){
                            var m_name = '';
                       }else{
                            var m_name = response.msg.name;
                       }

                       if(typeof response.msg.phone === 'undefined'){
                            var m_phone = '';
                       }else{
                        var m_phone = response.msg.phone;
                       }
                       if(typeof response.msg.email === 'undefined'){
                            var m_email = '';
                       }else{
                        var m_email = response.msg.email;
                       }
                       if(typeof response.msg.message === 'undefined'){
                            var m_message = '';
                       }else{
                        var m_message = response.msg.message;
                       }
                       
                     
                    Swal.fire(
                        'Wrong !',
                         m_name +' '+ m_phone +' '+ m_email +' '+ m_message,
                        'error'
                        );
                        
                    }else if (response.data == true){
                        Swal.fire(
                            'Good job!',
                            'You inserted the data!',
                            'success'
                            );                        
                    }
                        

                },
                error: function(response) {                    
                }
            });         
        }
   })
})