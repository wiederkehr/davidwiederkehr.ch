var initSize = 2;
var emArray =  new Array('62.5','68.75','75','100','125');
function fontSizer(inc){
	var body = document.getElementsByTagName('body')[0];
	var size = initSize;
			size+= inc;
	if (size < 0 ) {
		size = 0;
	}
	if (size > 4 ) {
		size = 4;
	}
	initSize = size;
	fontSize = emArray[size];
	//alert(emArray[size]);
	body.style.fontSize = fontSize+"%";
}