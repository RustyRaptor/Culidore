<script>
    $(document).ready(function(){
        $("#loginknop").click(function(){
            $("#logindivetje").fadeToggle("fast");
            $(".registratie").slideUp("fast");
            $(".venster").fadeOut("fast");
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeOut("fast");
            $(".receptdiv").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
        });
    });
    function closelogintje(){
        $("#logintje").slideUp("fast");
    }
    $(document).ready(function(){
        $("#signupknop").click(function(){
            $(".registratie").fadeIn(300);
            $(".logintje").slideUp("fast");
            $(".venster").fadeIn(300);
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeOut("fast");
            $(".zoekendiv").slideUp("fast");
            $(".receptdiv").slideUp("fast");
        });
    });
    $(document).ready(function(){
        $(".venster").click(function(){
            $(".registratie").slideUp(300);
            $(".logindivetje").slideUp("fast");
            $(".venster").fadeOut(300);
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").slideUp("fast");
            $(".probleemtoevoegen").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
        });
    });
    $(document).keyup(function(e) {
        if (e.which === 27){
            $(".registratie").slideUp(300);
            $(".logindivetje").slideUp("fast");
            $(".venster").fadeOut(300);
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").slideUp("fast");
            $(".probleemtoevoegen").slideUp("fast");
            $(".receptdiv").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
        }});
    $(document).ready(function(){
        $(".mainpagina").click(function(){
            $(".logintje").slideUp("fast");
            $(".registratie").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeOut("fast");
        });
    });
    $(document).ready(function(){
        $(".circle").click(function(){
            $(".logintje").slideUp("fast");
            $(".registratie").slideUp("fast");
            $(".venster").fadeIn("fast");
            $(".recepttoevoegen").slideDown("fast");
            $(".gelogged").fadeOut("fast");
            $(".receptdiv").slideUp("fast");
            $(".probleemtoevoegen").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
        });
    });
    $(document).ready(function(){
        $("#welkom").click(function(){
            $(".logintje").slideUp("fast");
            $(".registratie").slideUp("fast");
            $(".venster").fadeOut("fast");
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeToggle("fast");
            $(".receptdiv").slideUp("fast");
            $(".zoekendiv").slideUp("fast");
            $(".probleemtoevoegen").slideUp("fast");
        });
    });
    $(document).ready(function(){
        $(".aanmeldprobleem").click(function(){
            $(".logintje").slideUp("fast");
            $(".registratie").slideUp("fast");
            $(".venster").fadeIn("fast");
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeOut("fast");
            $(".receptdiv").slideUp("fast");
            $(".probleemtoevoegen").fadeToggle("fast");
            $(".zoekendiv").slideUp("fast");
        });
    });
    $(document).ready(function(){
        $(".zoeken").click(function(){
            $(".logintje").slideUp("fast");
            $(".registratie").slideUp("fast");
            $(".venster").fadeIn("fast");
            $(".recepttoevoegen").slideUp("fast");
            $(".gelogged").fadeOut("fast");
            $(".receptdiv").slideUp("fast");
            $(".zoekendiv").fadeToggle("fast");
        });
    });
</script>