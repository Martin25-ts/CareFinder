$(document).ready(function() {
    var left = $(".register-table-left");
    var leftWidth = left.outerWidth();
    var rigth = $(".register-table-right");

    rigth.css("width", leftWidth+ "px");
});


// $(document).ready(function() {
//     var registertable = $(".register-table");

//     var registertableheight = registertable.height();
//     var rigth = $(".register-table-right");
//     console.log(registertableheight);
//     rigth.css("height", registertableheight+ "px");

// });


