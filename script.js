"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


let student = ['alamin', '123', 'CS'];

function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty input';		
	}else{
		let data1=document.getElementById('name').value;
		let dlen = data1.length;
		let arr = data1.split("");
		let err=0;
		let i=0;

		for (i = 0; i < dlen; i++) {
              if(arr[i]>='A' && arr[i]<='Z'){


	   }
	   else if(arr[i]>='a' && arr[i]<='z'){

	   }
	     else if(arr[i]=='.' || arr[i]=='-'){

	   }
	   else{
		  err=err+1;


	   }
}
		if(err<=0){
			if(arr[0]>='A' && arr[0]<='Z' || arr[0]>='a' && arr[0]<='z'){
			let arr1=data1.split("-");
			let a=arr1.length;
			if(a>=2){
		document.getElementById('head').innerHTML = data1;
			}
			else{
				document.getElementById('head').innerHTML = 'Less than two words';
			}
			}
			else{
				document.getElementById('head').innerHTML = 'Not start with a letter';
			}

	}
	else{

		document.getElementById('head').innerHTML = 'Invalid characters';
	}

}
} 