function lo(x)
{
	location.replace(x)
}
function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}
// 顯示彈跳視窗#cover
function cl(x)
{
	$(x).fadeOut();
}

// <!-- 搜尋 -->

function getvalue(search,url) {
	var $selectart = document.getElementById("search0").value;
    document.getElementById("test").innerHTML = $selectart;
    console.log($str);
}

