
jQuery(function($){
    $('.pesquisador-senior').show(); 
    $('.pesquisador-voluntario').hide(); 
    $('.pesquisador-anterior').hide(); 
    $('.bolsista-atual').hide(); 
    $('.bolsista-anterior').hide(); 

    $("#pesquisador-senior-button").on('click', function(evt){
        $('.pesquisador-senior').show(); 
        $('.pesquisador-voluntario').hide(); 
        $('.pesquisador-anterior').hide(); 
        $('.bolsista-atual').hide(); 
        $('.bolsista-anterior').hide(); 

        $("#pesquisador-senior-button").removeClass("navbar-button").addClass("navbar-button-active");
        $("#pesquisador-voluntario-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-atual-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
    });

    $("#pesquisador-voluntario-button").on('click', function(evt){
        $('.pesquisador-senior').hide(); 
        $('.pesquisador-voluntario').show(); 
        $('.pesquisador-anterior').hide(); 
        $('.bolsista-atual').hide(); 
        $('.bolsista-anterior').hide(); 

        $("#pesquisador-senior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-voluntario-button").removeClass("navbar-button").addClass("navbar-button-active");
        $("#pesquisador-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-atual-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
    });

    $("#pesquisador-anterior-button").on('click', function(evt){
        $('.pesquisador-senior').hide(); 
        $('.pesquisador-voluntario').hide(); 
        $('.pesquisador-anterior').show(); 
        $('.bolsista-atual').hide(); 
        $('.bolsista-anterior').hide(); 

        $("#pesquisador-senior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-voluntario-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-anterior-button").removeClass("navbar-button").addClass("navbar-button-active");
        $("#bolsista-atual-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
    });

    $("#bolsista-atual-button").on('click', function(evt){
        $('.pesquisador-senior').hide(); 
        $('.pesquisador-voluntario').hide(); 
        $('.pesquisador-anterior').hide(); 
        $('.bolsista-atual').show(); 
        $('.bolsista-anterior').hide(); 

        $("#pesquisador-senior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-voluntario-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-atual-button").removeClass("navbar-button").addClass("navbar-button-active");
        $("#bolsista-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
    });

    $("#bolsista-anterior-button").on('click', function(evt){
        $('.pesquisador-senior').hide(); 
        $('.pesquisador-voluntario').hide(); 
        $('.pesquisador-anterior').hide(); 
        $('.bolsista-atual').hide(); 
        $('.bolsista-anterior').show(); 

        $("#pesquisador-senior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-voluntario-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#pesquisador-anterior-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-atual-button").removeClass("navbar-button-active").addClass("navbar-button");
        $("#bolsista-anterior-button").removeClass("navbar-button").addClass("navbar-button-active");
    });
});
