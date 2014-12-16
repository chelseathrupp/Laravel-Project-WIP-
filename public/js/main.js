$(function(){

    $(".mobileNavHandle").on("click",function(){
        console.log("hello");
        $("#mobileNav").toggleClass("showMobileNav");
    });

    $("[data-url]").on("click",function(){

        var url = $(this).data("url");



        var options = {
            type: "textarea",
            //cssclass: "inserted",
            submitdata: {
                _method: "PUT",
                field: $(this).data("field")
            },
            submit: "OK"
        };

        if($(this).is("div")){
            options.cssclass = "inserted";

        }

        $(this).editable(url,options);
    });

        $(document).on("DOMNodeInserted",function(e){


        if($(e.target).hasClass("inserted")){
            console.log(e.target);

            tinymce.editors=[]; // remove any existing references
            tinymce.init({
                selector: ".inserted textarea"
            });

        }
    });

});
