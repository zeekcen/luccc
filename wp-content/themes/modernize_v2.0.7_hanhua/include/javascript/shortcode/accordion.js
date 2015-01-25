(function() {  
    tinymce.create('tinymce.plugins.accordion', {  
        init : function(ed, url) {  
            ed.addButton('accordion', {  
                title : '添加手风琴项目',  
                image : url + '/images/accordion.png',  
                onclick : function() {  
					ed.focus();
                    ed.selection.setContent('[accordion]<br/> \
						[acc_item title="ITEM_TITLE"]ADD_CONTENT_HERE[/acc_item]<br/> \
						[acc_item title="ITEM_TITLE"]ADD_CONTENT_HERE[/acc_item]<br/> \
						[acc_item title="ITEM_TITLE"]ADD_CONTENT_HERE[/acc_item]<br/> \
						[/accordion]<br/>');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        }  
    });  
    tinymce.PluginManager.add('accordion', tinymce.plugins.accordion);  
})(); 