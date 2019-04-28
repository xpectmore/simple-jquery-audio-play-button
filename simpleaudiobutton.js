jqzp=function(){console.log('jQuery/Zepto not found: please enable one of them!');}
	if (typeof($) === 'undefined'){	jqzp();	}else $.fn.player = function(options){
		var e= $(this);
		var o= $.extend({src : '' }, options);
		genid=$(this).attr("id")+'id';
		$(this).append( '<style type="text/css">.play{width:36px;height:34px;padding:0;margin:0;font-size:20px;color:green;font-weight:bold;} .pause{width:36px;height:34px;padding:0;margin:0;font-size:20px;color:red;font-weight:bold;} </style><audio id="'+genid+'m"><source type="audio/mpeg" >Your browser does not support the audio element.</audio>' ).append($('<input id="'+genid+'" class="b" type="button" >'));
		$('#'+genid).addClass('play');
		$('#'+genid).val("\u{25ba}");
		$('audio').on('ended', function(){
			target=this.id;
			target=target.substr(0,target.length-1);
			$('#'+target).removeClass('pause').addClass('play').val("\u{25ba}");

			plsw[target+'m']=false;
		});
		var plsw=[];
		plsw[this.id+'m']=false;
		$('input.b').click(function(){
			plsw[this.id+'m']=!plsw[this.id+'m'];
			if(plsw[this.id+'m']){
				$('#'+this.id).removeClass('play').addClass('pause').val("\u{25fc}");
				$('#'+this.id+'m')[0].play();
			}else{
				$('#'+this.id).removeClass('pause').addClass('play').val("\u{25ba}");
				$('#'+this.id+'m')[0].pause();
				$('#'+this.id+'m')[0].currentTime = 0;
				plsw[this.id+'m']=false;
			}

		});

		return this.each(function(){
			$('#'+genid+'m')[0].src=o.src;
		});
	}
