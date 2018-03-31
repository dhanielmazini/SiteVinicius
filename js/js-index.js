$(document).ready(function(){

        $('.scrollspy').scrollSpy();

        $('.dropdown-trigger').dropdown();
        
        $(".button-collapse").sideNav();
        
        $('.carousel').carousel();
        
        $('.dropdown-button + .dropdown-content').on('click', function(event) {
                event.stopPropagation();
        });

        $('#btnLogin').click(function(){
                
                var campo_vazio = false;

                if($('#user').val() == ''){
                        $('#user').css({'border-bottom': '1px solid red','box-shadow': '0 1px 0 0 red'});
                        campo_vazio = true;
                }else{
                        $('#user').css({'border-bottom': '1px solid green','box-shadow': '0 1px 0 0 green'});  
                }
                
                if($('#password').val() == ''){
                        $('#password').css({'border-bottom': '1px solid red','box-shadow': '0 1px 0 0 red'});
                        campo_vazio = true;
                }else{
                        $('#password').css({'border-bottom': '1px solid green','box-shadow': '0 1px 0 0 green'});  
                }

                if(campo_vazio) return false;
        });
        
});