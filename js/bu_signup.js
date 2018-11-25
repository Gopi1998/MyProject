function BuyerVerify()
      {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         var password_reg= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
         var phone_reg = /^([0-9]){10}$/;
         var pan_reg = /^([A-Z]{5}[0-9]{4}[A-Z]{1})$/
         var temp;
      
         if( document.myForm.first_name.value == "" )
         {
            alert( "Please provide your Firstname!" );
            document.myForm.first_name.focus() ;
            return false;
         }
          if( document.myForm.last_name.value == "" )
         {
            alert( "Please provide your LastName!" );
            document.myForm.last_name.focus() ;
            return false;
         }

         
         /*if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }*/
            temp=document.myForm.email.value;
            temp=re.test(String(temp).toLowerCase());
            if((temp=="")||(temp==false))
            {
               alert( "Please enter your Email correctly!" );
               document.myForm.email.focus() ;
               return false;
            }

            if( document.myForm.address.value == "" )
         {
            alert( "Please provide your address!" );
            document.myForm.address.focus() ;
            return false;
         }
         /*   if( document.myForm.password.value == "" )
         {
            alert( "Please provide your Password!" );
            document.myForm.password.focus() ;
            return false;
         }*/
            temp=document.myForm.pan.value;
            temp=pan_reg.test(temp);
            if((temp=="")||(temp==false))
            {
               alert( "Please enter your PAN number correctly!" );
               document.myForm.pan.focus() ;
               return false;
            }

         temp=document.myForm.phone.value;
         temp=phone_reg.test(temp);
            if((temp=="")||(temp==false))
         {
            alert( "Please provide only 10 digits in your phone number!" );
            document.myForm.phone.focus() ;
            return false;
         }

         temp=document.myForm.password.value;
         temp=password_reg.test(temp);
            if((temp=="")||(temp==false))
         {
            alert( "Please provide atleast 1 lowercase, 1 uppercase, 1 special character, 1 digit in your password!" );
            document.myForm.password.focus() ;
            return false;
         }
            if( document.myForm.password_confirmation.value != document.myForm.password.value )
         {
            alert( "Please re-enter your password correctly!!" );
            document.myForm.password_confirmation.focus() ;
            return false;
         }
         
         return( true );
      }