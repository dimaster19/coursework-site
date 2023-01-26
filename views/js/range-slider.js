$("#polzunok").slider({
    animate: "slow",
    range: true,	
    values: [ 0, 100 ],
    slide : function(event, ui) {	
        $("#result-polzunok").text( "от " + ui.values[ 0 ] + " до " + ui.values[ 1 ] );		
    }
});
$( "#result-polzunok" ).text("от " + $("#polzunok").slider("values", 0) + " до " + $("#polzunok").slider("values", 1));