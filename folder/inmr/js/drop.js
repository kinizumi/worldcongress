
            
            function DropDown(el) {
                this.dd = el;
                this.placeholder = this.dd.children('span');
                this.opts = this.dd.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        return false;
                    });

                    obj.opts.on('click',function(){
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                    });
                },
                getValue : function() {
                    return this.val;
                },
                getIndex : function() {
                    return this.index;
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-3').removeClass('active');
                });

            });

    
// JavaScript Document
//onlinelink onclick popup


$(document).on('click', "a.go2att", function() {
    
        return confirm('You are going to a webpage outside of the USB key that requires internet connection');

});
$(document).on('click', "a.go2par", function() {
    
    return confirm('You are going to a webpage outside of the USB key that requires internet connection');
});
$(document).on('click', "a.go2exh", function() {
    
    return confirm('You are going to a webpage outside of the USB key that requires internet connection');
});
$(document).on('click', "a.add2", function() {
    
    return confirm('You are going to a webpage outside of the USB key that requires internet connection');
});