(function() {  
    tinymce.create('tinymce.plugins.testimonial', {  
        init : function(ed, url) {  
            ed.addButton('testimonial', {  
                title : '添加推荐组合',  
                image : url + '/images/testimonial.png',  
                onclick : function() {  
					ed.focus();
                    ed.selection.setContent('[testimonial title="TESTIMONIAL_TITLE"]<br/>');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        }
    });  
    tinymce.PluginManager.add('testimonial', tinymce.plugins.testimonial);  
})(); 