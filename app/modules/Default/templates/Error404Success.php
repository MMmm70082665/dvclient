<div id="content-wrapper">
<div id="content" class="clearfix">
<section id="main-content">
<div class="blogroll">
	<h2>آخرین مطالب سایت</h2>
	<div class="blogroll-outer-wrapper">
		<div class="blogroll-inner-wrapper">
			<div class="blogroll-link-wrapper">
					<ul>
					<?php foreach ($t['last'] as $last):?>
					<li>
					<a target="_blank" title="<?php echo $last['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $last['Id']));?>">:: <?php echo $last['MainSubject'] ;?></a>
					</li>
					<?php endforeach;?>
					</ul>
					</div>
			</div>
		</div>
	</div>
<?php foreach ($t['lastnews'] as $ls):?>
<div class="article-wrapper">
<article class="post">
<header>
<h1 style="font-family:BKoodak;">
<a title="<?php echo $ls['Subject'];?>" href="<?php echo $ro->gen('singelnews',array('id' => $ls['Id']));?>">
<?php echo $ls['Subject'];?>
 </a>
  </h1>
<ul>
<li class="cat"> بندی دسته : 
<a title="<?php echo $ls['Subject'];?>" href="<?php echo $ro->gen('sitenews',array('id' => 1));?>">
دانلود وار » اخبار سایت
</a>

</li>
</ul>
</header>
<div class="post-content">
<div class="post-graphical-image">
<img alt="<?php echo $ls['Subject'];?>" src="http://dl.downloadvar.ir/downloadvar/images/news/<?php echo $ls['Id'].'.jpg'?>">
</div>
<p>
<?php echo $ls['Desc'];?>
</p>
</div>
<footer class="clearfix">
</footer>
</article>
</div>
<?php endforeach;?>
<center>
<div class="download-links" style="font-size:15px;">
              <span>با سلام : مطلب مورد نظر شما در سایت موجود است اما به دلیل برخی تغییرات ناگذیر باید آن را با اندکی جستجو بیابید.</span>
            </div>
            </center>
            </section>
            
            
<!-- ****************************************** sidebar ****************************************** -->

<section id="sidebar"> 

<div class="widget socials">
<h2>جستجو گوگل</h2>
<div class="block-content">
<ul>
<li class="clearfix">
<div class="subscribe-form" style="display: block;">
<p>مطلب مورد نظر خود را در سایت با <span style="color: #D82727;">Google</span> بیابید.</p>
<form action="https://www.google.com/search" method="get" target="_blank">
<input id="query" name="q" onblur="if (this.value == '') {this.value = 'جستجوی کلمه مورد نظر...';}" onfocus="if (this.value == 'جستجوی کلمه مورد نظر...') {this.value = '';}" value="جستجوی کلمه مورد نظر..." size="255" type="text" class="email-field">
<input type="hidden" name="domains" value="downloadvar.ir">
<input type="hidden" name="sitesearch" value="downloadvar.ir">
<input type="hidden" name="oe" value="UTF-8">
<input type="hidden" name="ie" value="UTF-8">
<input type="hidden" name="hl" value="fa">
<input type="submit" value="جستجو" class="email-submit">
</form>
</div>
</li>
</ul>
</div>
</div>
<div class="widget basic-list-linkdump">
<h2>پر بازدیدترین مطالب</h2>
<div class="block-content">
	 <ul>
	 <?php krsort($t['max_view']);?>
   		 <?php foreach ($t['max_view'] as $view):?>
   		 <?php if ($view['Publisher'] == 1){?>
			<li>
			<a target="_blank" title="<?php echo $view['MainSubject'];?>" href="<?php echo  $ro->gen('download.continue',array('id' => $view['Id'],'subject' => $view['MainSubject']));?>">
			<!--<span><?php echo $view['ViewCount'];?></span>-->
			<?php echo $view['MainSubject'];?>
			</a>
			</li>
			<?php }?>
			<?php endforeach;?>
		</ul>
</div>
</div>
<div class="widget big-icon-list">
<h2>نرم افزار های مورد نیاز</h2>
<?php foreach ($t['need_software'] as $n):?>
<?php if ($n['Publisher'] == 1){?>
<div class="block-content">
<ul>
<li>
<div class="big-icon-wrapper">
<a target="_blank" href="<?php echo $ro->gen('download.continue',array('id' => $n['Id'],'subject' => $n['MainSubject']));?>" title="<?php echo $n['MainSubject'];?>">
<img width="36" height="36" src="http://dl.downloadvar.ir/downloadvar/images/tumb/<?php echo $n['ShortSubject'].'.png'; ?>">
</a>
</div>
<a target="_blank" href="<?php echo $ro->gen('download.continue',array('id' => $n['Id'],'subject' => $n['MainSubject']));?>" title="<?php echo $n['MainSubject'];?>">
<strong>دانلود <?php echo $n['ShortSubject']?></strong>
<small>تاریخ : <?php echo $n['Date']?></small>
</a>
</li>
</ul>
</div>
<?php }?>
<?php endforeach;?>
</div>
<div class="widget basic-list-linkdump">
<h2>بیشترین دانلودها</h2>
<div class="block-content">
	 <ul>
	 <?php krsort($t['max_dl']);?>
   		 <?php foreach ($t['max_dl'] as $dl):?>
   		 <?php if ($dl['Publisher'] == 1){?>
			<li>
			<a target="_blank" title="<?php echo $dl['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $dl['Id'],'subject' => $dl['MainSubject']));?>">
			<?php echo $dl['MainSubject'];?>
			<!--<span><?php echo $dl['DownloadCount'];?></span>-->
			</a>
			</li>
			<?php }?>
			<?php endforeach;?>
		</ul>
</div>
</div>
<div class="widget pc-games">
<h2>اوقات شرعی</h2>
<div class="block-content">
<center>
﻿						<script type='text/javascript' src='js/azan.js'></script>
					<script language=javascript>function pz() {};init();document.getElementById('cities').selectedIndex=28;coord();main();</script>
</center>
</div>
</div>
<?php foreach ($t['cat'] as $cat):?>
<div class="widget basic-list">
<h2> آخرین مطالب <?php echo $cat['PersianName'];?> </h2>
<?php $matter = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->limit(7)->useThirdCategoryQuery()->useSecondCategoryQuery()->useOneCategoryQuery()->filterById($cat['Id'])->endUse()->endUse()->endUse()->find(); ?>
<div class="block-content">
<ul>
<?php foreach ($matter as $mat): ?>
<li><a target="_blank" title="<?php echo $mat->getMainSubject(); ?>" href="<?php echo  $ro->gen('download.continue',array('id' => $mat->getId(),'subject' => $mat->getMainSubject()));?>"><?php echo $mat->getMainSubject(); ?></a></li>
<?php endforeach;?>
</ul>
</div>
</div>
<?php endforeach;?>

<div class="widget linkroll">
<h2>اخبار سایت</h2>
<div class="block-content">
<ul class="clearfix">
<?php foreach ($t['news_site'] as $news):?>
<li><a href="<?php echo $ro->gen('singelnews',array('id' => $news['Id']));?>" target="_blank"><?php echo $news['Subject'];?></a></li>
<?php endforeach;?>
</ul>
</div>
</div>
<div class="widget linkroll">
<h2>تبادل لینک</h2>
<div class="block-content">
<ul class="clearfix">
<li><a href="" target="_blank"></a></li>
</ul>
</div>
</div>
<!-- Begin WebGozar.com Counter code -->
<script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=2918845&amp;t=counter" ></script>
<noscript><a href="http://www.webgozar.com/counter/stats.aspx?code=2918845" target="_blank">&#1570;&#1605;&#1575;&#1585;</a></noscript>
<!-- End WebGozar.com Counter code -->

</section>
</div>
</div>