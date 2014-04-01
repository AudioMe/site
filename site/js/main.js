
Main = {
    
    _var : {
        is_open : false
    },
    init : function()
    {
        this._events();
               
        $(function()
        {
            // test
        });
    },
    
    _events : function()
    {
        var self = this;
        
        $(document).on('click', '.login_link', function()
        {
            $('.login_box').slideToggle('fast', function() {
            // Animation complete.
            });
        });
        
        $(document).on('click', '.list_rate li', function()
        {
            self.selectRate( $(this) );
        });
        
        $(document).on('click', '.list_rate_discount li', function()
        {
            self.selectAsoc( $(this) );
        });
    },
    
    selectRate : function(item)
    {
        var self = this;
        var type = item.attr('type');
        item.siblings().removeClass('active').end().addClass('active');
        $('.rate_desc_box').hide();
        if( self._var.is_open )
        {
            $('.rate_desc_box[type="'+type+'"]').show();
        }
        else
        {
            $('.rate_desc_box[type="'+type+'"]').slideDown(400, function(){
                $('html, body').animate({scrollTop: 570}, 'fast');
            });
            
            self._var.is_open = true;
        }
    },
    
    selectAsoc : function(item)
    {
        item.siblings().removeClass('active').end().addClass('active');
    }
};

Main.init();