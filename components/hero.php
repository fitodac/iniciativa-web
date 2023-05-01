<?php 
$content = [
	(object) [
		'title' => 'Impulsa tu negocio con Iniciativa',
		'intro' => 'Manejamos la gestión de apertura de registro y empresas',
		'image' => 'img/home-slider/slider-6.jpg',
		'btn_text' => 'Conoce más',
		'btn_link' => '/servicios'
	],
	(object) [
		'title' => 'Ahorra tiempo y dinero en tus trámites',
		'intro' => 'Gestión de registros y trámites de impuestos sin complicaciones',
		'image' => 'img/home-slider/slider-5.jpg',
		'btn_text' => 'Conoce más',
		'btn_link' => '/servicios'
	],
	(object) [
		'title' => 'Maximiza tu gestión empresarial',
		'intro' => 'Software de gestión integral y sistemas eficientes',
		'image' => 'img/home-slider/slider-4.jpg',
		'btn_text' => 'Conoce más',
		'btn_link' => '/servicios'
	]
];
?>

<!--================Slider Area =================-->
<section class="main_slider_area">
	<div id="main_slider5" class="rev_slider" data-version="5.3.1.6">
		<ul>
			<li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-6.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
			<!-- MAIN IMAGE -->
			<img src="<?= $content[0]->image; ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>


				<div class="slider_text_box">
					<div class="tp-caption tp-resizeme first_text" 
						id="slide-1592-layer-1" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['210','210','210','210','130']" 
						data-fontsize="['55','55','55','40','30']"
						data-lineheight="['59','59','59','50','40']"
						data-width="['550','550','550','400']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[0]->title; ?>
					</div>
						
						<div class="tp-caption tp-resizeme secand_text" 
						id="slide-1593-layer-2" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['350','350','350','340','225']"  
						data-fontsize="['18','18','18','18','16']"
						data-lineheight="['26','26','26','26']"
						data-width="['550','550','550','550','300']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[0]->intro; ?>
					</div>
						
						<div class="tp-caption tp-resizeme slider_button" 
						id="slide-1594-layer-3" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['435','435','435','435','330']" 
						data-fontsize="['14','14','14','14']"
						data-lineheight="['46','46','46','46']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<a class="main_b_btn" href="<?= $content[0]->btn_link; ?>">
							<?= $content[0]->btn_text; ?>
						</a>
						</div>
				</div>
			</li>


			<li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?= $content[1]->image; ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYERS -->

				<!-- LAYER NR. 2 -->
				<div class="slider_text_box">
					<div class="tp-caption tp-resizeme first_text" 
						id="slide-1589-layer-1" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['210','210','210','210','130']" 
						data-fontsize="['55','55','55','40','30']"
						data-lineheight="['59','59','59','50','40']"
						data-width="['650','650','650','400']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[1]->title; ?>
					</div>
						
						<div class="tp-caption tp-resizeme secand_text" 
						id="slide-1590-layer-2" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['350','350','350','340','225']"  
						data-fontsize="['18','18','18','18','16']"
						data-lineheight="['26','26','26','26']"
						data-width="['550','550','550','550','300']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[1]->intro; ?>
					</div>
						
						<div class="tp-caption tp-resizeme slider_button" 
						id="slide-1591-layer-3" 
						data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" data-voffset="['435','435','435','435','330']" 
						data-fontsize="['14','14','14','14']"
						data-lineheight="['46','46','46','46']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<a class="main_b_btn" href="<?= $content[1]->btn_link; ?>">
							<?= $content[1]->btn_text; ?>
						</a>
					</div>
				</div>
			</li>
			
			<li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
			<!-- MAIN IMAGE -->
			<img src="<?= $content[2]->image; ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
				<!-- LAYER NR. 3 -->
				<div class="slider_text_box">
						<div class="tp-caption tp-resizeme first_text" 
						id="slide-1586-layer-1" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['210','210','210','210','130']" 
						data-fontsize="['55','55','55','40','30']"
						data-lineheight="['59','59','59','50','40']"
						data-width="['650','650','650','400']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[2]->title; ?>
					</div>
						
						<div class="tp-caption tp-resizeme secand_text" 
						id="slide-1587-layer-2" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['350','350','350','340','225']"  
						data-fontsize="['18','18','18','18','16']"
						data-lineheight="['26','26','26','26']"
						data-width="['550','550','550','550','300']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<?= $content[2]->intro; ?>
					</div>
						
						<div class="tp-caption tp-resizeme slider_button" 
						id="slide-1588-layer-3" 
						data-x="['left','left','left','15','0']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" 
						data-voffset="['435','435','435','435','330']" 
						data-fontsize="['14','14','14','14']"
						data-lineheight="['46','46','46','46']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
						data-textAlign="['left','left','left','left']">
						<a class="main_b_btn" href="<?= $content[2]->btn_link; ?>">
							<?= $content[2]->btn_text; ?>
						</a>
						</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!--================End Slider Area =================-->