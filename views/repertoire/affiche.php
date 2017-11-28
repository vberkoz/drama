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
                            <li>
                                <a href="/affiche/<?php echo strtolower($currentMonth); ?>"
                                    <?php echo (strpos($_SERVER['REQUEST_URI'], strtolower($currentMonth)))?'class="active"':null?>>
                                    <?php echo $uaMonthNames[$currentMonthNum - 1]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="/affiche/<?php echo strtolower($nextMonth); ?>"
                                    <?php echo (strpos($_SERVER['REQUEST_URI'], strtolower($nextMonth)))?'class="active"':null?>>
                                    <?php echo $uaMonthNames[$nextMonthNum - 1]; ?>
                                </a>
                            </li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </div>
    
    <div class="reper-list" id="abstract">
        <?php $i = 1; ?>
        <?php foreach ($spectacles as $spectacle): ?>
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
            <a href='/spectacle/<?php echo $spectacle['link']; ?>'>
                <div class='reper-block reper-block-img <?php echo "$thirdFourth1 $secondFourth1"; ?>'>
                    <div class='square' style="opacity: 1; background: url('/template/images/original/<?php echo $spectacle['image']; ?>')center/cover;">
                        <div class="opaline"><p><?php echo $spectacle['beginning']; ?></p></div>
                    </div>
                </div>

                <div class='reper-block reper-block-text <?php echo "$thirdFourth2 $secondFourth2"; ?>'>
                    <figure>
                        <article><?php echo $spectacle['title']; ?></article>
                        <p><?php echo $spectacle['author']; ?></p>
                        <p><?php echo $spectacle['type']; ?></p>
                        <p><?php echo $spectacle['duration']; ?></p>
                    </figure>
                </div>
            </a>
            <?php $i++; if ($i == 5) $i = 1; ?>
        <?php endforeach; ?>
    </div>
  
    <div style="margin-bottom: 100px;"></div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>