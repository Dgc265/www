$(document).ready(function() {
    $(".navigation-menu__icon").on("click", function() {
        $(".navigation-menu__options").toggleClass("showing");
    });


        $(".navigation-menu__option").on("click", function() {
            $(this).children('.navigation-submenu__options').slideToggle();
        });

        $(".navigation-submenu__option").on("click", function(p) {
            p.stopPropagation();
        });


    let categoria = $('#categoria');
    let lista=$('<ul class="navigation-submenu__options"></ul>');
   
    $.ajax(
        { url:"http://proyecto.test/productos",
    
            type:"GET",
            dataType: "json",
            success: function(json){
                json.data.map(function(n){
                    lista.append($('<li class="navigation-submenu__option" id='+n.id+'>'+n.nombre+'</li>'));
                  })
            },
            error: function(jqXHR,satus,error){
              //  alert('disculpe su retraso');
            },
            complete : function (jqXHR,status){
              //  alert("peticion realizada")
    
            }
    
        }
    
     )

    categoria.append(lista);

    let slider = $('#slider');


    $.ajax(
        { url:"http://proyecto.test/imagenes",

            type:"GET",
            dataType: "json",
            success: function(json){
                json.data.map(function(n){
                    if(n.tipo="slider"){
                        slider.prepend($('<figure class="carrousel_background-image" id='+n.id+'></figure>').css("background-image", "url(img/"+n.nombre+")"));
                    }

                })
            },
            error: function(jqXHR,satus,error){
                //  alert('disculpe su retraso');
            },
            complete : function (jqXHR,status){
                //  alert("peticion realizada")

            }

        }

    )



 });
// Scrolling Effect
$(window).on("scroll", function() {
    if(($(window).scrollTop())&& ($(window).width() > 786)) {
        $('.navigation-menu').addClass('black');

    }

    else {
        $('.navigation-menu').removeClass('black');
        $('.navigation-menu').addClass('fade-out-animation');
    }
});
$( window ).resize(function() {
    if($(window).width() > 767){
        $(".navigation-menu__options").removeClass("showing");
        $("ul").removeAttr("style");
    }
});

;