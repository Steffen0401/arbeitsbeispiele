$(function(){
    let startPrice =  124095;
    let priceA = 0;
    let priceB = 0;
    let priceC = 0;
    let endPrice;
    let nameA;
    let nameB;
    let nameC;

    $("#coatUl li").click(function(){
        let auto = $(".modelViewer").attr('src');
        let auto1 = auto.substr(10, 10);
        let src = "models/" + $(this).attr('class') + auto1;

        $(".modelViewer").attr("src", src);

        nameA = $(this).attr("name");
        $("#selCol").html("Coat color: "+nameA);
        priceA = Number($(this).attr("data-price"));
        endPrice = startPrice + priceA + priceB + priceC;
        $("#price").html("Price: "+endPrice+" €");

        $(".modelViewer").fadeOut(500);

        customElements.whenDefined('model-viewer').then(function() {
            $(".modelViewer").fadeIn(500);
        });

    });

    $("#rimsUl li").click(function(){
        let auto = $(".modelViewer").attr('src');
        auto1 = auto.substr(0, 10);
        auto2 = auto.substr(13, 7);
        let src = auto1 + $(this).attr('class') + auto2;

        $(".modelViewer").attr("src", src);

        nameB = $(this).attr("name");
        $("#selRim").html("Rim color: "+nameB);
        priceB = Number($(this).attr("data-price"));
        endPrice = startPrice + priceA + priceB + priceC;
        $("#price").html("Price: "+endPrice+" €");

        $(".modelViewer").fadeOut(500);

        customElements.whenDefined('model-viewer').then(function() {
            $(".modelViewer").fadeIn(500);
        });
    });

    $("#wingUl li").click(function(){
        let auto = $(".modelViewer").attr('src');
        auto1 = auto.substr(0, 13);
        auto2 = auto.substr(16, 7);
        let src = auto1 + $(this).attr('class') + auto2;

        $(".modelViewer").attr("src", src);

        nameC = $(this).attr("name");
        $("#selTra").html("Track package: "+nameC);
        priceC = Number($(this).attr("data-price"));
        endPrice = startPrice + priceA + priceB + priceC;
        $("#price").html("Price: "+endPrice+" €");

        $(".modelViewer").fadeOut(500);

        customElements.whenDefined('model-viewer').then(function() {
            $(".modelViewer").fadeIn(500);
        });
    });





    $("#checkout").hide();
    $('#checkout #info').hide();

    //blur after checkout button click + checkout div popup
    $("#checkoutButton").click(function(){
        $("#checkout").show();
        $("nav, main, footer").css("filter","blur(2px)");
    //focus input forename
        $("[name=forename]").focus();
        return false;
    });

    $("#checkout #back").click(function(){
        $("#checkout").hide();
        $("nav, main, footer").css("filter","blur(0px)");
        return false;
    });

    $('#checkout #infoHover').mouseover(function(){
        $('#checkout #info').show();
    });

    $('#checkout #infoHover').mouseout(function(){
        $('#checkout #info').hide();
    });

    $('#checkout form').submit(function(){
        return false;
    });



});