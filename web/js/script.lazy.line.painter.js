(function( $ ){  

					/* 
	 * Lazy Line Painter - Path Object 
	 * Generated using 'SVG to Lazy Line Converter'
	 * 
	 * http://lazylinepainter.info 
	 * Copyright 2013, Cam O'Connell  
	 *  
	 */ 
	 
	var pathObj = {
		"btn": {
			"strokepath": [
				{
					"path": "M 3.339,33.69 L 3.339,3.902 326.86,3.902    326.86,33.691  ",
					"duration": 600
				},
				{
					"path": "M 3.47,73.69 L 3.47,103.166 22.292,103.166    56.739,128.734 56.739,105.296 326.663,105.296 326.663,91.652  ",
					"duration": 600
				}
			],
			"dimensions": {
				"width": 330,
				"height": 134
			}
		}
	}; 
	 
	 
	/* 
	 Setup and Paint your lazyline! 
	 */ 
	 
	 $(document).ready(function(){ 
	 $('#btn').lazylinepainter( 
	 {
		"svgData": pathObj,
		"strokeWidth": 2,
		"strokeColor": "#e09b99"
	}).lazylinepainter('paint'); 
	 });


				})( jQuery );	
                                
                                
                                
                                