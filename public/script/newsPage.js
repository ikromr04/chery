function cantJump(pageNum) {
    var pageTotal = parseInt(pageNum.total / pageNum.pageSize);
    if ((pageTotal > 0) && parseInt(pageNum.total % pageNum.pageSize)> 0) {
        pageTotal++;
    };
    if (pageNum < 1) return;
    if (pageNum > pageTotal) return;
}

function initPage(resDataPage) {
    var showPage = 7;
    $(".pagewrap").empty();
    var pageTotal = parseInt(resDataPage.total / resDataPage.pageSize);
    if ((pageTotal > 0) && parseInt(resDataPage.total % resDataPage.pageSize)> 0) {
        pageTotal++;
    };
    if (pageTotal > 1) {
        var html = '<a class="prev" href="javascript:jumpPage(' + (resDataPage.pageNum - 1) + ')"></a>';
        for(var i=1;i <= pageTotal;i++){
            if(pageTotal <=showPage){
                if(resDataPage.pageNum == i){
                    html += ' <a class="active" style="color: #c50d27;" href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                }else{
                    html += ' <a href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                }
            }else if(pageTotal > showPage){
                if(resDataPage.pageNum <= showPage){
                    if(i <= showPage){
                        if(resDataPage.pageNum == i){
                            html += ' <a class="active" style="color: #c50d27;" href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }else{
                            html += ' <a href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }
                    }
                }else if(resDataPage.pageNum > showPage && resDataPage.pageNum <= (pageTotal - showPage)){
                    if(i >= (resDataPage.pageNum- (showPage/2)) && i < (resDataPage.pageNum +(showPage/2))){
                        if(resDataPage.pageNum == i){
                            html += ' <a class="active" style="color: #c50d27;" href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }else{
                            html += ' <a href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }
                    }
                }else if(resDataPage.pageNum > (pageTotal - showPage)){
                    if(i > (pageTotal - showPage)){
                        if(resDataPage.pageNum == i){
                            html += ' <a class="active" style="color: #c50d27;" href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }else{
                            html += ' <a href="javascript:jumpPage(' + i + ')">'+i+'</a>';
                        }
                    }
                }
            }
        }
        var totalPage = Math.max(1, Math.ceil(resDataPage.total / resDataPage.pageSize));   
        html += '<a class="next" href="javascript:jumpPage(' + (resDataPage.pageNum + 1) + ')"></a>';
        html += '<span class="label">Go to page</span>';
        html += '<input type="text" class="jump-ipt"/>';
        html += '<a href="javascript:;" onclick="gotosearch('+pageTotal+')" class="jump-btn">Go<span class="arrow"></span></a>';
        $(".pagewrap").append(html);
    }
}

function gotosearch(pageTotal) {
	var re = /^[1-9]+[0-9]*]*$/;
    var goPage = $(".jump-ipt").val();
    if (!re.test(goPage) || goPage > pageTotal) {
        alert("请正确输入要跳转的页数。");
        $(".jump-ipt").focus();
        return false;
    } else {
  		    cantJump(goPage);
  		    getParams(goPage);
  		    newsArchiveList(url,getParam);
    }
}


var escapeHtml = function(value){
	var  labalSet = ["script","iframe"];
	var isEscape = false;
	for (var i = 0; i < labalSet.length; i++ ){
		value += "";
		isEscape = value.toLowerCase().indexOf("<"+labalSet[i])>=0 || value.indexOf(labalSet[i]+">") >=0 ;	
		if(isEscape) break;
	}
	if(isEscape)
		value = value.replace(/[<>&"]/g,function(c){return {'<':'&lt;','>':'&gt;','&':'&amp;','"':'&quot;'}[c];});
	return value;
}
