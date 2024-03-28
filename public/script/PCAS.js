var PCAP=[]
function PCASIp(){
	 var conName = this.conName = arguments[0];
	 var callBack = this.callBack = arguments[2];
	 this.txtCon = $('#'+conName);
	 $('body').append('<div id="PCAS_IP_POP" class="PCAS_IP_POP'+conName+'"></div>');
	 $('.PCAS_IP_POP'+conName).append('<div class="PCAS_IP_POP_cotent" id="PCAS_IP_POP_cotent" class="clearfix"></div>');
	  $('.PCAS_IP_POP'+conName).append('<div class="btn">保  存</div>');
	 $('.PCAS_IP_POP'+conName+' .PCAS_IP_POP_cotent').append('<div class="province"></div>');
	this.city = $('.PCAS_IP_POP'+conName+' .PCAS_IP_POP_cotent .city')
	 var initbool = true;
	 var province,city,area
	 var _this = this
	PCAP = arguments[1]
	 province = new ScrollRadio({
            wrapper: $('.PCAS_IP_POP'+conName+' .province'),
            data: PCAP
     });
      _this.txtCon.click(function(){
      	$('.PCAS_IP_POP'+conName).css({bottom:0});
      })
      $('.PCAS_IP_POP'+conName+' .btn').click(function(){
      	_this.txtCon.val(province.getSelected());
      	$('.PCAS_IP_POP'+conName).css({bottom:'-100%'});
      	if(_this.callBack){
      		_this.callBack();
      	}
      })
//    document.addEventListener("touchmove", function (e) {
//       e.preventDefault(); 
//    }, false);
}
(function () {
            var ScrollRadio = function (opts) {
                opts = opts || {};
                //容器元素
                this.wrapper = opts.wrapper || $(document);
                var id = new Date().getTime() + Math.random() + 'id';
                this.body = [
    '<div class="cui-roller">',
        '<ul class="ul-list" style=" position: absolute; width: 100%; z-index: 2;  "  id="' + id + '" >',
        '</ul>',
        '<div class="cui-mask"></div>',
        '<div class="cui-lines">&nbsp;</div>',
    '</div>'
].join('');
                this.body = $(this.body);

                //真正拖动的元素（现在是ul）
                this.dragEl = this.body.find('.ul-list');
                //数据源
                this.data = opts.data || [];
                this._changed = opts.changed || null;
                //当前选项索引默认选择2项
                this.selectedIndex = opts.selectedindex|| 0;

                //当前选项值
                //                this.key = '';
                //当前选项显示的值
                //                this.value = '';

                /*
                定位实际需要用到的信息
                暂时不考虑水平移动吧
                */
                this.itemHeight = 0; //单个item高度
                this.dragHeight = 0; //拖动元素高度
                this.dragTop = 0; //拖动元素top
                this.animateParam = [10, 6, 2, 1, 0, 0, 0, 0, 0, 0, 0]; //动画参数
                this.timeGap = 0; //时间间隔
                this.touchTime = 0; //开始时间
                this.moveAble = false; //是否正在移动
                this.moveState = 'up'; //移动状态，up right down left
                this.oTop = 0; //拖动前的top值
                this.curTop = 0; //当前容器top
                this.mouseY = 0; //鼠标第一次点下时相对父容器的位置
                this.cooling = false; //是否处于冷却时间

                this.init();
            };
            ScrollRadio.prototype = {
                constructor: ScrollRadio,
                init: function () {
                    this.initItem();
                    this.wrapper.append(this.body);
                    this.initEventParam();
                    this.bindEvent();
//                  if(this.selectedIndex>1){
//                  		var li = this.dragEl.find('li').eq(this.selectedIndex)
//                  		this.oTop = li.position().top-this.itemHeight;
//	                    this.curTop = li.position().top-this.itemHeight;
//						this.touchEnd()
//                  }
                    this.setIndex(this.selectedIndex)
                    console.log(this.selectedIndex)
                    this.onTouchEnd();
                     console.log(this.selectedIndex,'onTouchEnd')
                },
                //增加数据
                initItem: function () {
                    var _tmp, _data, i, k;
                  	
                    for (var i in this.data) {
                        _data = this.data[i]
                        _tmp = $('<li>' + (_data == undefined ? i : _data) + '</li>');
                        _tmp.attr('data-index', i);
                        for (k in _data) {
                            _tmp.attr('data-' + k, _data[k]);
                        }
                        this.dragEl.append(_tmp);
                    }
                    
                },
                //初始化事件需要用到的参数信息
                initEventParam: function () {
//              	alert('initEventParam')
                    var offset = this.dragEl.offset();
                    var itemOffset = this.dragEl.find('li').eq(0).offset();
                    this.itemHeight = this.dragEl.find('li').eq(0).height()
                    this.dragTop = offset.top;
                    this.dragHeight = this.dragEl[0].scrollHeight;
                    var s = '';
                },
                bindEvent: function () {
                    var scope = this;
                    this.dragEl[0].addEventListener("touchstart", function (e) {
                        scope.touchStart.call(scope, e);
                    }, false);
                    this.dragEl[0].addEventListener("touchend", function (e) {
                        scope.touchEnd.call(scope, e);
                    }, false);
                    this.dragEl[0].addEventListener("touchmove", function (e) {
                        scope.touchMove.call(scope, e);
                    }, false);
                },
                touchStart: function (e) {
                    if (this.cooling) return false; //冷却时间不能开始

                    //需要判断是否是拉取元素，此处需要递归验证，这里暂时不管
                    //！！！！！！！！此处不严谨
                    var el = $(e.srcElement).parent(), pos;
                    if (el.hasClass('ul-list')) {
                        this.moveAble = true;

                        this.touchTime = e.timeStamp;
                        //获取鼠标信息
                        pos = this.getMousePos(e.changedTouches[0]);
                        //注意，此处是相对位置，注意该处还与动画有关，所以高度必须动态计算
                        //可以设置一个冷却时间参数，但想想还是算了
                        //最后还是使用了冷却时间
                        //                        var top = parseFloat(this.dragEl.css('top')) || 0;
                        //                        this.mouseY = pos.top - top;
//                      console.log( this.getMousePos(e.changedTouches[0]),this.curTop)
                        this.mouseY = pos.top - this.curTop;
                        this.moveAble = true;
                    }
                },
                touchMove: function (e) {
                    if (!this.moveAble) return false;
                    var pos = this.getMousePos(e.changedTouches[0]);
                    //先获取相对容器的位置，在将两个鼠标位置相减
                    this.curTop = pos.top - this.mouseY;
                    this.dragEl.css('top', this.curTop + 'px');
                    e.preventDefault();
                },
                touchEnd: function (e) {
                    if (!this.moveAble) return false;
                    this.cooling = true; //开启冷却时间

                    //时间间隔
                    var scope = this;
                    this.timeGap = e.timeStamp - this.touchTime;
                    var flag = this.oTop <= this.curTop ? 1 : -1; //判断是向上还是向下滚动
                    var flag2 = this.curTop > 0 ? 1 : -1; //这个会影响后面的计算结果
                    this.moveState = flag > 0 ? 'up' : 'down';
                    var ih = parseFloat(this.itemHeight);
                    var ih1 = ih / 2;

                    var top = Math.abs(this.curTop);
                    var mod = top % ih;
                    top = (parseInt(top / ih) * ih + (mod > ih1 ? ih : 0)) * flag2;

                    var step = parseInt(this.timeGap / 50);
                    step = step > 0 ? step : 0;
                    var speed = this.animateParam[step] || 0;
                    var increment = speed * ih * flag
                    top += increment;
                    //！！！此处动画可能导致数据不同步，后期改造需要加入冷却时间
                    if (this.oTop != this.curTop) {
                        this.dragEl.animate({
                            top: top + 'px'
                        }, 100 + (speed * 20), function () {
                            var _top = top, t = false; ;
                            if (top > ih) {
                                _top = ih;
                                t = true;
                            }
                            if (top < 0 && (top + scope.dragHeight < ih * 2)) {
                                t = true;
                                _top = (scope.dragHeight - ih * 2) * (-1);
                            }
                            if (t) {
                                scope.dragEl.animate({
                                    top: _top + 'px'
                                }, 10, function () {
                                    scope.oTop = _top;
                                    scope.curTop = _top;
                                    scope.cooling = false; //关闭冷却时间
                                    scope.onTouchEnd();
                                });
                            } else {
                                scope.cooling = false; //关闭冷却时间
                                scope.oTop = top;
                                scope.curTop = top;
                                scope.onTouchEnd();
                            }
                        });
                    } else {
                        this.cooling = false; //关闭冷却时间
                        this.onTouchEnd();
                    }
                    this.moveAble = false;
                },
                onTouchEnd: function () {
                		console.log((this.curTop - this.itemHeight),parseFloat(this.itemHeight),'onTouchEnd1')
                    var i = parseInt((this.curTop - this.itemHeight) / parseFloat(this.itemHeight));
                    this.selectedIndex = Math.abs(i);
                    	console.log(this.selectedIndex,'onTouchEnd1')
                    var secItem = this.data[this.selectedIndex];
                    //触发变化事件
                    var changed = this._changed;
                    if (changed && typeof changed == 'function') {
                    	console.log(this.selectedIndex,'onTouchEnd')
                        changed.call(this,this.selectedIndex, secItem);
                    }
                },
                setKey: function (k) { },
                setVal: function (v) { },
                setIndex: function (i) {
                    var i = parseInt(i);
                    if (i >= this.data.length || i < 0) return false;

                    this.selectedIndex = i;
                    this.curTop = (i * this.itemHeight * (-1) + this.itemHeight);
                    this.dragEl.css('top', this.curTop + 'px');
                },
                getSelected: function () {
                    return this.data[this.selectedIndex];
                },
                getByKey: function (k) { },
                getByVal: function (v) { },
                getByIndex: function (i) { },
                //获取鼠标信息
                getMousePos: function (event) {
                    var top, left;
                    top = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
                    left = Math.max(document.body.scrollLeft, document.documentElement.scrollLeft);
//                  console.log(document.body.scrollTop)
                    return {
                        top: top + event.clientY,
                        left: left + event.clientX
                    };
                }
            };
            window.ScrollRadio = ScrollRadio;

        })();