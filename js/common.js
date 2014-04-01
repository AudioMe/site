function prettyRadio() {
	$('.prettyRadio').click(function() {
		var checked = $(this).is(':checked');
		if (checked) {
			 $(this).parent().find('label').animate({opacity:0}, 100, "linear", function(){
			   $(this).attr('class', 'am_checked');
			   $(this).animate({opacity:1}, 300);
		       });
		}
		else {
			$(this).parent().find('label').animate({className:'am_unchecked'},400);
		}
	});
}
$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
