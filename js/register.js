$(function() {
	$("#in_area").numericInput({ allowFloat: true, allowNegative: false});
	$("#in_area").spinner({min: 1, max: 999});
	$("#count_record").numericInput({ allowFloat: true, allowNegative: false});
	$("#count_record").spinner({min: 1, max: 999});
    $("#in_price").numericInput({ allowFloat: true, allowNegative: false});
	prettyRadio();
});
