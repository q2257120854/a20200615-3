function getClass(oParent,sClass)
{
	var value=[];
	var Ele=oParent.getElementsByTagName('*');
	for (var i=0; i<Ele.length; i++)
	{
		var aClass=Ele[i].className.split(' ');
		for (n=0; n<aClass.length; n++)
		{
			if (aClass[n]==sClass)
			{
				value.push(Ele[i]);
			}
		}
	}
	return value;
}

function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj,false)[name];
	}
}

function setCSS3(obj,name,value)
{
	obj.style['webkit'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
	obj.style['moz'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
	obj.style['ms'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
	obj.style['O'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
	obj.style[name]=value;
}

function rnd(n)
{
	return Math.random()*2*n-n;
}

function Running(obj,json,fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function()
	{
		var now=0;
		var bStop=true;
		for (var attr in json)
		{
			if(attr=='opacity')
			{
				now=Math.round(parseFloat(getStyle(obj,attr))*100);
			}
			else
			{
				now=parseInt(getStyle(obj,attr));
			}
			var speed=(json[attr]-now)/5;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			if(now!=json[attr])bStop=false;
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+now+speed+')';
				obj.style.opacity=(now+speed)/100;
			}
			else
			{
				obj.style[attr]=speed+now+'px';
			}
		}
		if(bStop)
		{
			clearInterval(obj.timer);
			if(fnEnd)fnEnd();
		}
	}, 30);
}

function Flexing(obj,json,fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function()
	{
		var now=0;
		var bStop=true;
		for (var attr in json)
		{
			if(!obj.speed)obj.speed={};
			if(!obj.speed[attr])obj.speed[attr]=0;
			now=parseInt(getStyle(obj,attr));
			if(Math.abs(json[attr]-now)>1 || Math.abs(obj.speed[attr])>1)
			{
				bStop=false;
				obj.speed[attr]+=(json[attr]-now)/5;
				obj.speed[attr]*=0.85;
				var MaxSpeed=50;
				if(Math.abs(obj.speed[attr])>MaxSpeed)
				{
					obj.speed[attr]=obj.speed[attr]>0?MaxSpeed:-MaxSpeed;
				}
				obj.style[attr]=now+obj.speed[attr]+'px';
			}
		}
		if(bStop)
		{
			clearInterval(obj.timer);
			obj.style[attr]=json[attr]+'px';
			if(fnEnd)fnEnd();
		}
	}, 30);
}

function convertStyle(obj)
{
	for (var i=0; i<obj.length; i++)
	{
		obj[i].style.left=obj[i].offsetLeft+'px';
		obj[i].style.top=obj[i].offsetTop+'px';
	}
	for (var i=0; i<obj.length; i++)
	{
		obj[i].style.position='absolute';
		obj[i].style.margin=0;
	}
}

function info()
{
	var aLink=document.createElement('a');
	var myinfo="";
	aLink.innerHTML=myinfo;
	aLink.onmouseover=function()
	{
		aLink.style.textDecoration='underline';
	}
	aLink.onmouseout=function()
	{
		aLink.style.textDecoration='none';
	}
	document.body.appendChild(aLink);
}

function create(oParent,Ele,num,sClass)
{
	var value=[];
	var Element=0;
	for (var i=0; i<num; i++)
	{
		Element=document.createElement(Ele);
		oParent.appendChild(Element);
		if(sClass)Element.className=sClass;
		value.push(Element);	
	}
	return value;
}

function rndColor()
{
	var str=Math.ceil(Math.random()*0xFFFFFF).toString(16);
	for (var i=0; i<str.length; i++)
	{
		if(str.length<6)
		{
			str='0'+str;
		}
	}
	return str;
}

function shake(obj)
{
	var posData=[obj.offsetLeft,obj.offsetTop];
	obj.onclick=function()
	{
		var i=0;
		clearInterval(timer);
		var timer=setInterval(function()
		{
			i++;
			obj.style.left=posData[0]+((i%2)>0?-2:2)+'px';
			obj.style.top=posData[1]+((i%2)>0?-2:2)+'px';
			if(i>=30)
			{
				clearInterval(timer);
				obj.style.left=posData[0]+'px';
				obj.style.top=posData[1]+'px';
			}
		}, 30);
	}
}