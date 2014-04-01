(function($) {
    $.fn.prettyAM = function(options) {
        options = options || {}; 
        var defaultOpt = { 
            checkboxCls: options.checkboxCls || 'am-checkbox' , radioCls : options.radioCls || 'am-radio' ,
            checkedCls: options.checkedCls|| 'am-checked', selectedCls : options.selectedCls || 'am-selected' , 
            hideCls: 'am-hide'
        };
        return this.each(function() {
            var $this = $(this);
            var wrapTag = $this.attr('type') == 'checkbox' ? '<div class="'+defaultOpt.checkboxCls+'">' : '<div class="'+defaultOpt.radioCls+'">';
            // for checkbox
            if( $this.attr('type') == 'checkbox') {
                $this.addClass(defaultOpt.hideCls).wrap(wrapTag).change(function() {
                    if( $(this).is(':checked') ) { 
                        $(this).parent().animate({opacity:0}, 100, "linear", function(){
                            $(this).addClass(defaultOpt.checkedCls); 
                            $(this).animate({opacity:1}, 100);
                        });
                    } 
                    else {
                        $(this).parent().animate({opacity:0}, 100, "linear", function(){
                            $(this).removeClass(defaultOpt.checkedCls); 
                            $(this).animate({opacity:1}, 100);
                        });
                    }
                });

                if( $this.is(':checked') ) {
                    $this.parent().addClass(defaultOpt.checkedCls);
                }
            } 
            else if( $this.attr('type') == 'radio') {
                $this.addClass(defaultOpt.hideCls).wrap(wrapTag).change(function() {
                    $('input[name="'+$(this).attr('name')+'"]').each(function() {
                        if( $(this).is(':checked') ) { 
                        $(this).parent().animate({opacity:0}, 100, "linear", function(){
                            $(this).addClass(defaultOpt.selectedCls); 
                            $(this).animate({opacity:1}, 100);
                        });
                        }
                        else {
                            $(this).parent().removeClass(defaultOpt.selectedCls);
                        }
                    });
                });

                if( $this.is(':checked') ) {
                    $this.parent().addClass(defaultOpt.selectedCls);
                }
            }
        });
    }
})(jQuery);
