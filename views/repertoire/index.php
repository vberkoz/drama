<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
	<div class="title">
		<h1>Репертуар</h1>
	</div>
	<div class="menu-line">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav>
						<ul>
                            <?php foreach ($categories as $category): ?>
                                <li><a href="<?php echo $category['link']; ?>" <?php echo (strpos($_SERVER['REQUEST_URI'], $category['link']))?'class="active"':null?>><?php echo $category['title']; ?></a></li>
                            <?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </div>
    
    <div class="reper-list" id="abstract">
        <?php $i = 1; ?>
        <?php foreach ($categoryPerformances as $performance): ?>
            <?php
            if ($i == 3 || $i == 4) {
            $thirdFourth1 = "third-fourth-1";
            $thirdFourth2 = "third-fourth-2";
            } else {
            $thirdFourth1 = "";
            $thirdFourth2 = "";
            }
            if ($i == 2 || $i == 4) {
            $secondFourth1 = "second-fourth-1";
            $secondFourth2 = "second-fourth-2";
            } else {
            $secondFourth1 = "";
            $secondFourth2 = "";
            }
            ?>
            <a href='/spectacle/<?php echo $performance['link']; ?>'>
                <div class='reper-block reper-block-img <?php echo "$thirdFourth1 $secondFourth1"; ?>'>
                    <div class='square' style="opacity: 1; background: url('/template/images/original/<?php echo $performance['image']; ?>')center/cover;"></div>
                </div>

                <div class='reper-block reper-block-text <?php echo "$thirdFourth2 $secondFourth2"; ?>'>
                    <figure>
                        <article><?php echo $performance['title']; ?></article>
                        <p><?php echo $performance['author']; ?></p>
                        <p><?php echo $performance['type']; ?></p>
                        <p><?php echo $performance['duration']; ?></p>
                    </figure>
                </div>
            </a>
            <?php $i++; if ($i == 5) $i = 1; ?>
        <?php endforeach; ?>
    </div>
  
    <div style="margin-bottom: 100px;"></div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>