



function slide1()
{
	document.getElementById("first-slide").style.marginLeft="0%"
	document.getElementById("btn1").style.backgroundColor="#bf9751";
	document.getElementById("btn2").style.backgroundColor="";
	document.getElementById("btn3").style.backgroundColor="";
	document.getElementById("btn4").style.backgroundColor="";
}
function slide2()
{
	document.getElementById("first-slide").style.marginLeft="-20%";
	document.getElementById("btn1").style.backgroundColor="";
	document.getElementById("btn2").style.backgroundColor="#bf9751";
	document.getElementById("btn3").style.backgroundColor="";
	document.getElementById("btn4").style.backgroundColor="";
}
function slide3()
{
	document.getElementById("first-slide").style.marginLeft="-40%";
	document.getElementById("btn1").style.backgroundColor="";
	document.getElementById("btn2").style.backgroundColor="";
	document.getElementById("btn3").style.backgroundColor="#bf9751";
	document.getElementById("btn4").style.backgroundColor="";
}
function slide4()
{
	document.getElementById("first-slide").style.marginLeft="-60%";
	document.getElementById("btn1").style.backgroundColor="";
	document.getElementById("btn2").style.backgroundColor="";
	document.getElementById("btn3").style.backgroundColor="";
	document.getElementById("btn4").style.backgroundColor="#bf9751";
}





function popup()
{
	document.getElementById("login").style.display="flex";
}

function popout()
{
	document.getElementById("login").style.display="none";
}

window.onscroll=function(){myscroll()};

function myscroll()
{
	
	if(document.documentElement.scrollTop > 150)
	{
		document.getElementById("drop-bar").style.top="0";
	}
	else
	{
		document.getElementById("drop-bar").style.top="-80px";
	}

	if (document.documentElement.scrollTop > 480) 
	{
		document.getElementById("sec1").style.paddingLeft="0px";
		document.getElementById("sec1").style.opacity="1";
	}
	else
	{
		document.getElementById("sec1").style.paddingLeft="100px";
		document.getElementById("sec1").style.opacity="0";
	}
	if (document.documentElement.scrollTop > 800) 
	{
		document.getElementById("sec2").style.width="100%";
		document.getElementById("sec2").style.opacity="1";
	}
	else
	{
		document.getElementById("sec2").style.width="96%";
		document.getElementById("sec2").style.opacity="0";
	}
	if (document.documentElement.scrollTop > 1100) 
	{
		document.getElementById("sec3").style.paddingLeft="0";
		document.getElementById("sec3").style.opacity="1";
	}
	else
	{
		document.getElementById("sec3").style.paddingLeft="100px";
		document.getElementById("sec3").style.opacity="0";
	}



}



