<div class="container">

<ul class="breadcrumbs">
    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?=$siteadres?>/"><span itemprop="title">Check Website</span></a>&nbsp;&gt;&nbsp;</li>
    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?=$siteadres?>/tools"><span itemprop="title">Webmasters Tools</span></a>&nbsp;&gt;&nbsp;</li>
    <li>Word counter</li>
</ul>

	<div class="cl"></div>

	<div class="ablock"></div>

	<div class="description"></div>

	<?if($purposes['social_sharing']){?>

    <div style="margin-bottom: 25px;" class="addthis_inline_share_toolbox"></div>

	<?}?>

	<div class="cl"></div>

	<div class="ablock"></div>

	<div class="tool-page">

        Type or Paste your text here<br>
		<form action="/word-counter#result" method="get">
		        <textarea maxlength=2000 name="text" style="width: 100%; height: 350px;" wrap="off"><?=$_GET['text'];?></textarea>
			    <br>
			    <input type="submit" value="Count Words">
      </form>
			    <br>
        <?


        if(!empty($_GET['text'])){

            ?>

<div id="result"><h2>Result:</h2></div>

Words in text: <?

	$words = explode(" ", $_GET['text']);
  print "<b>".count($words)."</b>";
?><br>
Symbols: <b><? print strlen($_GET['text']);?></b>
            <?

        }

        ?>


	<div class="cl"></div>
	</div>
