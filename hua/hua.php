<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
// 封装代码
function meihua() { ?>
<!-- 加载snowfall.js -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/hua/snowfall.js"></script>
<!-- 梅花树枝，可以删除 -->
<div class="meiha"></div>
<!-- 配套样式，可以替换其中的图片地址 -->
<style>
/** 梅花树 **/
.meiha {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 999;
	width: 350px;/** PNG图宽度 **/
	height: 231px;/** PNG图高度 **/
	pointer-events: none;
	/*background: url('https://s2.ax1x.com/2020/01/21/1kBpid.png');*/
	background: url('https://s1.ax1x.com/2020/04/25/JyntMV.png');
}
 
/** 梅花翻转动画 **/
.snowfall-flakes {
	pointer-events: none;
	animation: sakura 1s linear 0s infinite;
}
 
.snowfall-flakes {
	animation: sakura 1s linear 0s infinite;
}
 
.night .snowfall-flakes {
	background: transparent !important;
}
 
@keyframes sakura {
	0% {
		transform: rotate3d(0, 0, 0, 0deg);
	}
 
	25% {
		transform: rotate3d(1, 1, 0, 60deg);
	}
 
	50% {
		transform: rotate3d(1, 1, 0, 0deg);
	}
 
	75% {
		transform: rotate3d(1, 0, 0, 60deg);
	}
 
	100% {
		transform: rotate3d(1, 0, 0, 0deg);
	}
}
</style>
<?php }
/** 将代码绑定到页脚 **/
add_action( 'wp_footer', 'meihua', 100 );
