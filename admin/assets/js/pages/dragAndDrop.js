


/*aaa*/
	$().ready(function(){
			var ns = $('ol.sortable').nestedSortable({
				forcePlaceholderSize: true,
				handle: 'div',
				helper:	'clone',
				items: 'li',
				opacity: .6,
				placeholder: 'placeholder',
				revert: 250,
				tabSize: 50,
				tolerance: 'pointer',
				toleranceElement: '> div',
				maxLevels: 6,
				isTree: true,
				expandOnHover: 700,
				startCollapsed: false,
				change: function(){
					console.log('Relocated item');
				}
			});
			
			$('.expandEditor').attr('title','Click to show/hide item editor');
			$('.disclose').attr('title','Click to show/hide children');
			$('.deleteMenu').attr('title', 'Click to delete item.');
		
			$('.disclose').on('click', function() {
				$(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
				$(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
			});
			
			$('.expandEditor, .itemTitle').click(function(){
				var id = $(this).attr('data-id');
				$('#menuEdit'+id).toggle();
				$(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
			});
			
			$('.deleteMenu').click(function(){
				var id = $(this).attr('data-id');
				$('#menuItem_'+id).remove();
			});
				
			$('#serialize').click(function(){
				serialized = $('ol.sortable').nestedSortable('serialize');
				$('#serialize_output_1').text(serialized+'\n\n');
			})
	
			$('#toHierarchy').click(function(e){
				hiered = $('ol.sortable').nestedSortable('toHierarchy', {startDepthCount: 0});
				hiered = dump(hiered);
				(typeof($('#serialize_output_1')[0].textContent) != 'undefined') ?
				$('#serialize_output_1')[0].textContent = hiered : $('#serialize_output_1')[0].innerText = hiered;
			})
	
			$('#toArray').click(function(e){
				arraied = $('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});
				arraied = dump(arraied);
				(typeof($('#serialize_output_1')[0].textContent) != 'undefined') ?
				$('#serialize_output_1')[0].textContent = arraied : $('#serialize_output_1')[0].innerText = arraied;
			});
		});			
	
		function dump(arr,level) {
			var dumped_text = "";
			if(!level) level = 0;
	
			//The padding given at the beginning of the line.
			var level_padding = "";
			for(var j=0;j<level+1;j++) level_padding += "    ";
	
			if(typeof(arr) == 'object') { //Array/Hashes/Objects
				for(var item in arr) {
					var value = arr[item];
	
					if(typeof(value) == 'object') { //If it is an array,
						dumped_text += level_padding + "'" + item + "' ...\n";
						dumped_text += dump(value,level+1);
					} else {
						dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
					}
				}
			} else { //Strings/Chars/Numbers etc.
				dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
			}
			return dumped_text;
		}