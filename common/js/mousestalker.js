$(function() {
	if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
				//マウスストーカーの中のアイコンの初期化(SVGMorpheusを実行)
				var stalkershape = new SVGMorpheus('#mouse-icons', {
						duration: '200', //アニメーションの時間
						easing: 'linear', //アニメーションのイージング
						rotation: 'none' //回転するかどうか
				});
				//初期のアイコンを設定
				stalkershape.to('icon-noshape');
			 
				var body = document.body;
					var stalker = document.getElementById("mouse-stalker");
					
					//マウスが動いたらマウスストーカーを移動させる
					body.addEventListener("mousemove", function(e) {
						TweenMax.to('#mouse-stalker', 0.3, { left: e.clientX , top: e.clientY });
								
					}, false);
					
					//aタグにマウスオーバーしたときの処理
					$('a').on("mouseenter", function() {
							$('#mouse-stalker').addClass("active");
							stalkershape.to('icon-noshape');
					});
					$('a[target="_blank"]').on("mouseenter", function() {
							$('#mouse-stalker').addClass("active");
							stalkershape.to('arrow-tr');
					});
					$('#showcase_items a').on("mouseenter", function() {
							$('#mouse-stalker').addClass("active");
							stalkershape.to('arrow-r');
					});
					
					//data-stalkershape属性がついたaタグにマウスオーバーしたときの処理
					$('a[data-stalkershape]').on("mouseenter", function() {
							$('#mouse-stalker').addClass("active");
							stalkershape.to($(this).data('stalkershape'));
					});
					//aタグからマウスが離れたとき
					$("a").on("mouseleave", function() {
							$('#mouse-stalker').removeClass("active");
							stalkershape.to('icon-noshape');
					});
	}
});
